<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FaleConoscoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required|string',
            'email' => 'required|email',
            'telefone' => 'required|string',
            'mensagem' => 'required|string'
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O nome é um campo obrigatório.',
            'email.required' => 'O email é um campo obrigatório',
            'email.email' => 'Adicione um email válido',
            'telefone.required' => 'O telefone é um campo obrigatório',
            'mensagem.required' => 'A mensagem é um campo obrigatório'
        ];
    }
}
