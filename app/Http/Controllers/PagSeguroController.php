<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Pagseguro\PagSeguroClass;

use App\associados;
use App\Produtos;

use App\Mail\SendEmailCompra;
use Illuminate\Support\Facades\Mail;

use Carbon\Carbon;

class PagSeguroController extends Controller
{

	public function getSessao(){
		// Produção
		// $url = 'https://ws.pagseguro.uol.com.br/?email=email&token=token';
		// Sandbox
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => "http://ws.pagseguro.uol.com.br/v2/sessions?email=diretoria01@lacs.com.br&token=5273091e-1169-4fbc-b1b7-a922a54ae60be532415844deaa5fccc66ef1d0f7dcb732e0-c89e-4c23-a82a-3e48d9da9b9f",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "POST",
			CURLOPT_HTTPHEADER => array(
				"Content-Type: multipart/form-data; boundary=--------------------------379478318653705546002457"
			),
		));

		$retorno = curl_exec($curl);

		curl_close($curl);

		$xml = simplexml_load_string($retorno);

		return response()->json(['retorno' => json_encode($xml)]);

	}

	public function notificacao(){

		$associados = associados::select('id_associados')
		->where('status_cartao','!=',6)
		->where('created_at','>',Carbon::now()->subDays(10))
		->where('id_pagseguro','!=',0)
		->get();

		foreach ($associados as $item) {

			$PagSeguro = new PagSeguroClass();

			$xml = $PagSeguro->getStatusByReference($item->id_associados);



			if($xml != null){
				$objeto = json_decode(json_encode($xml), TRUE);
				$this->atualizarCadastro($item->id_associados,$objeto["status"],$objeto["code"],$objeto["date"]);
			}

		}


	}

	public function checkout(Request $request){

		// $associado = $this->salvarCadastro($request);

		$produto = Produtos::find($request->plano_cartao);

		$pessoa = new associados;
		$associado = $pessoa->create($request->all());

		if($associado->forma_pgto == 2){

			//cl@lacs.com.br

			Mail::to($associado->email)->bcc(['cl@lacs.com.br'])->send(new SendEmailCompra([
					'nome' => $associado->nome,
	        'sobrenome' => $associado->sobrenome,
	        'email' => $associado->email,
	        'telefone' => $associado->telefone,
	        'valor' =>$produto->preco,
	        'plano' => $produto->nome,
	        'datanasc' => $associado->datanasc,
	        'cpf' => $associado->cpf,
	        'rg' => $associado->rg,
	        'celular' => $associado->celular,
	        'forma_pgto' => 'Boleto Recorrente',
	        'parcelas' => $associado->parcelas,
	        'cep' => $associado->cep,
	        'cidade' => $associado->cidade,
	        'uf' => $associado->uf,
	        'bairro' => $associado->bairro,
	        'rua' => $associado->rua,
	        'numero' => $associado->numero,
	        'complemento' => $associado->complemento,
					'comprovante' => $request->file('comprovante')
			]));

			return redirect('cartao-lacs')->with('status', true);
		}

		$PagSeguro = new PagSeguroClass();


		//EFETUAR PAGAMENTO
		$venda = array("codigo"=>$associado->id_associados,
			"valor"=>$associado->valor,
			"descricao"=>$produto->nome,
			"nome"=>$associado->nome.' '.$associado->sobrenome,
			"email"=>$associado->email,
			"telefone"=>$telefone,
			"rua"=>$associado->rua,
			"numero"=>$associado->numero,
			"bairro"=>$associado->bairro,
			"cidade"=>$associado->cidade,
			"estado"=>$associado->uf,
			"cep"=>$associado->cep,
			"codigo_pagseguro"=>"");

		$code = $PagSeguro->executeCheckout($venda,"http://www.lacs.com.br/pagseguro/pagamento");

		$this->atualizarCadastro($associado->id_associados,1,$code,null);

		header('Location: https://pagseguro.uol.com.br/v2/checkout/payment.html?code='.$code);
		exit;

	}

	public function salvarCadastro($request, $xml, $file = null){

		if($xml){
			$code_pagseguro = (array)$xml->code;
			$code_pagseguro = $code_pagseguro[0];
			$code_pagseguro = str_replace('-','',$code_pagseguro);
		}
		else{
			$code_pagseguro = 0;
		}


		$produto = Produtos::find($request['itemId1']);

		$pessoa = new associados;
		$associado = $pessoa->create([
			"nome" => $request['nome'],
			"sobrenome" => $request['sobrenome'],
			"email" => $request['senderEmail'],
			"datanasc" => $request['datanasc'],
			"cpf" => $request['senderCPF'],
			"rg" => $request['rg'],
			"telefone" => $request['telefone'],
			"celular" => $request['celular'],
			"status_cartao" => 1,
			"plano_cartao" => $request['itemId1'],
			"forma_pgto" => $request['forma_pgto'],
			"valor" => $produto->preco,
			"parcelas" => $request['parcelas'],
			"cep" => $request['billingAddressPostalCode'],
			"cidade" => $request['billingAddressCity'],
			"uf" => $request['billingAddressState'],
			"bairro" => $request['billingAddressDistrict'],
			"rua" => $request['billingAddressStreet'],
			"numero" => $request['billingAddressNumber'],
			"complemento" => $request['billingAddressComplement'],
			"id_pagseguro" => $code_pagseguro,
		]);

		$forma_pagamento = '';

		switch ($request['forma_pgto']) {
			case 1:
				$forma_pagamento = 'Boleto';
			break;
			case 2:
				$forma_pagamento = 'Boleto Recorrente';
			break;
			case 3:
				$forma_pagamento = 'Cartão de Crédito parcelado';
			break;
			case 4:
				$forma_pagamento = 'Cartão de Crédito Recorrente';
			break;


		}


			//->cc('cl@lacs.com.br')

			Mail::to($associado->email)->bcc(['cl@lacs.com.br'])->send(new SendEmailCompra([
					'nome' => $associado->nome,
					'sobrenome' => $associado->sobrenome,
					'email' => $associado->email,
					'telefone' => $associado->telefone,
					'valor' =>$associado->valor,
					'plano' => $produto->nome,
					'datanasc' => $associado->datanasc,
					'cpf' => $associado->cpf,
					'rg' => $associado->rg,
					'celular' => $associado->celular,
					'forma_pgto' => $forma_pagamento,
					'parcelas' => $associado->parcelas,
					'cep' => $associado->cep,
					'cidade' => $associado->cidade,
					'uf' => $associado->uf,
					'bairro' => $associado->bairro,
					'rua' => $associado->rua,
					'numero' => $associado->numero,
					'complemento' => $associado->complemento,
					'comprovante' => isset($request['comprovante']) ? $request->file('comprovante') : null
			]));


		return $associado;
	}

	public function salvarCadastroRecorrente($request, $code){

		$produto = Produtos::find($request['id_plano']);

		$pessoa = new associados;

		$associado = $pessoa->create([
			"nome" => $request['nome'],
			"sobrenome" => $request['sobrenome'],
			"email" => $request['sender']['email'],
			"datanasc" => $request['datanasc'],
			"cpf" => $request['sender']['documents'][0]['value'],
			"rg" => $request['rg'],
			"telefone" => $request['telefone'],
			"celular" => $request['celular'],
			"status_cartao" => 1,
			"plano_cartao" => $request['id_plano'],
			"forma_pgto" => $request['forma_pgto'],
			"valor" => $request['valor_plano'],
			"parcelas" => $request['parcelas'],
			"cep" => $request['sender']['address']['postalCode'],
			"cidade" => $request['sender']['address']['country'],
			"uf" => $request['sender']['address']['state'],
			"bairro" => $request['sender']['address']['district'],
			"rua" => $request['sender']['address']['street'],
			"numero" => $request['sender']['address']['number'],
			"complemento" => $request['sender']['address']['complement'],
			"id_pagseguro" => $code,
		]);

		$forma_pagamento = '';

		switch ($request['forma_pgto']) {
			case 1:
				$forma_pagamento = 'Boleto';
			break;
			case 2:
				$forma_pagamento = 'Boleto Recorrente';
			break;
			case 3:
				$forma_pagamento = 'Cartão de Crédito parcelado';
			break;
			case 4:
				$forma_pagamento = 'Cartão de Crédito Recorrente';
			break;


		}


			//->cc('cl@lacs.com.br')

			Mail::to($associado->email)->bcc(['cl@lacs.com.br'])->send(new SendEmailCompra([
					'nome' => $associado->nome,
					'sobrenome' => $associado->sobrenome,
					'email' => $associado->email,
					'telefone' => $associado->telefone,
					'valor' =>$associado->valor,
					'plano' => $produto->nome,
					'datanasc' => $associado->datanasc,
					'cpf' => $associado->cpf,
					'rg' => $associado->rg,
					'celular' => $associado->celular,
					'forma_pgto' => $forma_pagamento,
					'parcelas' => $associado->parcelas,
					'cep' => $associado->cep,
					'cidade' => $associado->cidade,
					'uf' => $associado->uf,
					'bairro' => $associado->bairro,
					'rua' => $associado->rua,
					'numero' => $associado->numero,
					'complemento' => $associado->complemento,
					'comprovante' => isset($request['comprovante']) ? $request->file('comprovante') : null
			]));

		return $associado;
	}

	public function atualizarCadastro($id,$status,$id_pagseguro,$data_ultimo_evento){

		$pessoa = associados::find($id);
		$pessoa->status_cartao = $status;
		$pessoa->id_pagseguro = $id_pagseguro;

		if($data_ultimo_evento != null && $pessoa->status_cartao == 4){
			$pessoa->datatrans = substr($data_ultimo_evento, 0, 10);
		}

		$pessoa->save();

		return 'true';
	}

  public function finalizarCompra(Request $request){

		if($request->forma_pgto == 3 || $request->forma_pgto == 1){
			$request->merge(['email' => 'diretoria01@lacs.com.br']);
	    $request->merge(['token' => '5273091e-1169-4fbc-b1b7-a922a54ae60be532415844deaa5fccc66ef1d0f7dcb732e0-c89e-4c23-a82a-3e48d9da9b9f']);

	    $buildQuery = http_build_query($request->all());
	    $url = 'https://ws.pagseguro.uol.com.br/v2/transactions';
	    $curl = curl_init($url);
	    curl_setopt($curl, CURLOPT_HTTPHEADER, Array("Content-Type: application/x-www-form-urlencoded; charset=UTF-8"));
	    curl_setopt($curl, CURLOPT_POST, true);
	    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	    curl_setopt($curl, CURLOPT_POSTFIELDS, $buildQuery);
	    $retorno = curl_exec($curl);
	    curl_close($curl);

	    $xml = simplexml_load_string($retorno);

	    if($xml->error){
				return response()->json(['retorno' => $xml]);
			}
			else{
				PagSeguroController::salvarCadastro($request->all(), $xml);
				return response()->json(['retorno' => $xml]);
			}
		}


  }

	public function finalizarCompraRecorrente(Request $request){

    $buildQuery = http_build_query($request->all());

    $url = 'https://ws.pagseguro.uol.com.br/pre-approvals?email=diretoria01@lacs.com.br&token=5273091e-1169-4fbc-b1b7-a922a54ae60be532415844deaa5fccc66ef1d0f7dcb732e0-c89e-4c23-a82a-3e48d9da9b9f';
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_HTTPHEADER, Array('Content-type: application/json', 'Accept: application/vnd.pagseguro.com.br.v3+json;charset=ISO-8859-1'));
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode([
            'plan' => $request->plan,
            'reference' => $request->reference,
            'sender' => [
                'name' => $request->sender['name'],
                'email' => $request->sender['email'],
								'hash' => $request->sender['hash'],
                'phone' => [
                    'areaCode' => $request->sender['phone']['areaCode'],
                    'number' => $request->sender['phone']['number'],
                ],
                'address' => [
                    'street' => $request->sender['address']['street'],
                    'number' => $request->sender['address']['number'],
                    'complement' => $request->sender['address']['complement'],
                    'district' => $request->sender['address']['district'],
                    'city' => $request->sender['address']['city'],
                    'state' => $request->sender['address']['state'],
                    'country' => $request->sender['address']['country'],
                    'postalCode' => $request->sender['address']['postalCode'],
                ],
                'documents' => [
                    ['type' => 'CPF', 'value' => $request->sender['documents'][0]['value']],
                ],
            ],
            'paymentMethod' => [
                'type' => 'CREDITCARD',
                'creditCard' => [
                    'token' => $request->paymentMethod['creditCard']['token'],
                    'holder' => [
                        'name' => $request->paymentMethod['creditCard']['holder']['name'],
                        'birthDate' => $request->paymentMethod['creditCard']['holder']['birthDate'],
                        'documents' => [
                            ['type' => 'CPF', 'value' => $request->paymentMethod['creditCard']['holder']['documents'][0]['value']],
                        ],
                        'phone' => [
                            'areaCode' => $request->paymentMethod['creditCard']['holder']['phone']['areaCode'],
                            'number' => $request->paymentMethod['creditCard']['holder']['phone']['number'],
                        ],
                    ],
                ],
            ],
        ]));

    $retorno = curl_exec($curl);
    curl_close($curl);

		$retorno = json_decode($retorno);

    if(isset($retorno->error)){
			return response()->json(['retorno' => json_encode($retorno)]);
		}
		else{
			PagSeguroController::salvarCadastroRecorrente($request->all(), $retorno->code);
			return response()->json(['retorno' => true]);
		}



  }

	public function criarPlano(Request $request){

		if($request->parcelas > 12){
			return response()->json(['error' => 'A quantidade máxima de parcelas é 12.']);
		}

		$plano = Produtos::find($request->id_cartao);

		$url = 'https://ws.pagseguro.uol.com.br/pre-approvals/request/?email=diretoria01@lacs.com.br&token=5273091e-1169-4fbc-b1b7-a922a54ae60be532415844deaa5fccc66ef1d0f7dcb732e0-c89e-4c23-a82a-3e48d9da9b9f';
		$curl = curl_init($url);
		curl_setopt($curl, CURLOPT_HTTPHEADER, Array('Content-type: application/json', 'Accept: application/vnd.pagseguro.com.br.v3+json;charset=ISO-8859-1'));
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode([

			"reference" => $request->id_cartao,
			"preApproval" => [
			    "name" => $request->plano,
			    "charge" => "AUTO",
			    "period" => "MONTHLY",
			    "amountPerPayment" => number_format($plano->preco/$request->parcelas, 2, '.', ''),
			    "expiration" => [
			    	"value" => $request->parcelas,
			    	"unit" => "MONTHS"
			    ]
			]

		]));

		$retorno = curl_exec($curl);
		curl_close($curl);

		$retorno = json_decode($retorno);

		return response()->json(['retorno' => $retorno, 'valor' => $plano->preco]);
	}

	public function dadosPlano(Request $request){
		$plano = Produtos::find($request->id);

		return response()->json(compact('plano'));
	}

}
