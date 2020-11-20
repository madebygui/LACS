<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmailToxicologico extends Mailable
{
    use Queueable, SerializesModels;

    public $params = [
        'nome' => '',
        'email' => '',
        'telefone' => '',
        'empresa' => ''
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
        return $this->view('mail.toxicologicoEmail')->subject('Formulário de Contato - Exame Toxicológico (Simplificado)');
    }
}
