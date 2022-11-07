<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Symfony\Contracts\Service\Attribute\Required;

class UserStoreRequest extends FormRequest
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
            'name' => [
                'required',
                'max:60',
                'min:3'
            ],
            'email' => [
                'required',
                'email',
                'unique:users'
            ],
            'password' => [
                'required',
                'min:8',
                'min:50',
            ],

        ];


    }
}