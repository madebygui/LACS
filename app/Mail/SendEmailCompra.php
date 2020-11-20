<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmailCompra extends Mailable
{
    use Queueable, SerializesModels;

    public $params = [
        'nome' => '',
        'sobrenome' => '',
        'email' =>'',
        'telefone' => '',
        'valor' =>'',
        'plano' => '',
        'datanasc' => '',
        'cpf' => '',
        'rg' => '',
        'celular' => '',
        'forma_pgto' => '',
        'parcelas' => '',
        'cep' => '',
        'cidade' => '',
        'uf' => '',
        'bairro' => '',
        'rua' => '',
        'numero' => '',
        'complemento' => ''
    ];

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($params)
    {
        $this->params = array_merge($this->params,$params);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

      if($this->params['comprovante']){
        return $this->view('mail.assinaturaEmail')->subject('Solicitação de assinatura')->attach($this->params['comprovante']->getRealPath(),
                [
                    'as' => $this->params['comprovante']->getClientOriginalName(),
                    'mime' => $this->params['comprovante']->getClientMimeType(),
                ]);
      }
      else{
        return $this->view('mail.assinaturaEmail')->subject('Solicitação de assinatura');
      }

    }
}
