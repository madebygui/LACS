<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrcamentoRequest extends FormRequest
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
            'sobrenome' => 'required|string',
            'email' => 'required|email',
            'telefone' => 'required|string',
            'empresa' => 'required|string',
            'cargo' => 'sometimes|nullable',
            'num_funcionarios' => 'required|string',
            'site' => 'sometimes|nullable',
            'mensagem' => 'required|string'
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O nome é um campo obrigatório',
            'sobrenome.required' => 'O sobrenome é um campo obrigatório',
            'email.required' => 'O email é um campo obrigatório',
            'email.email' => 'Adicione um email válido',
            'telefone.required' => 'O telefone é um campo obrigatório',
            'empresa.required' => 'Adicione a empresa.',
            'num_funcionarios.required' => 'Adicione o número de funcionários da empresa',
            'mensagem.required' => 'Adicione uma mensagem'
        ];
    }
}
