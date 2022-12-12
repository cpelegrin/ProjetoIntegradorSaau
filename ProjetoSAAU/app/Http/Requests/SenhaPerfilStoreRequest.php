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
        return true;
    }

    public function messages()
    {
        return [
            'password.required' => 'Você precisa inserir uma nova senha para continuar',
            'password.min' => 'Você tem que inserir uma senha com mais de 8 caracteres',
            'passwordSame.same' => 'Impossível trocar senha , senhas diferentes',
            'passwordSame.required' => 'Você precisa confirmar a senha'
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
            'passwordSame' => 'required|same:password',

        ];
    }
}