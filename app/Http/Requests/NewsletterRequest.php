<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsletterRequest extends FormRequest
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
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O nome é um campo obrigatório.',
            'email.required' => 'O email é um campo obrigatório',
            'email.email' => 'Adicione um email válido',
        ];
    }
}
