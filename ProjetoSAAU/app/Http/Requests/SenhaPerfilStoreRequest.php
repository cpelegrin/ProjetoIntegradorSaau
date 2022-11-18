<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SenhaPerfilStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    public function messages()
    {
        return [
            'name.required' => 'Você precisa inserir um nome para continuar',
            'name.min' => 'O nome tem que ter pelo menos 3 caracteres',
            'password.required' => 'Você precisa inserir uma senha para continuar',
            'password.min' => 'Você tem que inserir uma senha com mais de 8 caracteres',
            'email.unique' => 'Esse endereço de email já existe',
            'email.required' => 'Você precisa inserir um email para continuar',

        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'password' => [
                'required',
                'min:8',
                'max:50'
            ],

        ];


    }
}