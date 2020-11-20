<?php

namespace App\Http\Controllers;

use App\Http\Requests\FaleConoscoRequest;
use App\Http\Requests\NewsletterRequest;
use App\Http\Requests\orcamentoRequest;
use App\Http\Requests\ToxicologicoRequest;
use Illuminate\Http\Request;

use App\Mail\SendEmailDuvida;
use App\Mail\SendEmailFaleConosco;
use App\Mail\SendEmailNewsLetter;
use App\Mail\SendEmailOrcamento;
use App\Mail\SendEmailToxicologico;
use Illuminate\Support\Facades\Mail;

use App\Lead;


class ContatoController extends Controller
{
    private $email = 'faleconosco@lacs.com.br';

    public function __construct()
    { 
      $this->footer = parent::__construct();  
    }


    public function faleConosco(FaleConoscoRequest $request)
    {
        $lead = new Lead;
		$lead->nome = $request->nome;
		$lead->email = $request->email;
        $lead->telefone = $request->telefone;
        $lead->mensagem = 'Mensagem : '.$request->mensagem;
		$lead->localizacao = 5;
        $lead->save();

       Mail::to($this->email)->send(new SendEmailFaleConosco([
           'email' => $request->input('email'),
           'nome' => $request->input('nome'),
           'telefone' => $request->input('telefone'),
           'mensagem' =>$request->input('mensagem')
       ]));
        
       return redirect()->back()->with(['success' => 'Contato enviado com sucesso!','footer' => $this->footer]);
    }

    public function newsletter(NewsletterRequest $request)
    {
        $lead = new Lead;
		$lead->nome = $request->nome;
        $lead->email = $request->email;
        $lead->localizacao = 6;
        $lead->save();

        Mail::to($this->email)->send(new SendEmailNewsletter([
            'nome' => $request->input('nome'),
            'email' => $request->input('email')
        ]));

        return redirect()->back()->with(['success' => 'Assinatura salva com sucesso!','footer' => $this->footer]);
    }

    public function toxicologicoSimples(ToxicologicoRequest $request)
    {

        $lead = new Lead;
		$lead->nome = $request->nome;
		$lead->email = $request->email;
        $lead->telefone = $request->telefone;
        $lead->mensagem = 'Empresa : '.$request->empresa ;
		$lead->localizacao = 4;
        $lead->save();

       Mail::to($this->email)->send(new SendEmailToxicologico([
           'email' => $request->input('email'),
           'nome' => $request->input('nome'),
           'telefone' => $request->input('telefone'),
           'empresa' =>$request->input('empresa')
       ]));

       return redirect()->back()->with(['success' => 'Contato Enviado com sucesso!','footer' => $this->footer]);
    }

    public function orcamento(orcamentoRequest $request)
    {
        Mail::to('ocupacional04@lacs.com.br')->send(new SendEmailOrcamento([
            'nome' => $request->input('nome'),
            'sobrenome' => $request->input('sobrenome'),
            'email' => $request->input('email'),
            'telefone' => $request->input('telefone'),
            'empresa' =>$request->input('empresa'),
            'cargo' => $request->input('cargo'),
            'num_funcionarios' => $request->input('num_funcionarios'),
            'site' => $request->input('site'),
            'mensagem' => $request->input('mensagem')
        ]));

        return redirect()->back()->with(['success' => 'Orçamento Enviado com sucesso!','footer' => $this->footer]);
        
    }
}
