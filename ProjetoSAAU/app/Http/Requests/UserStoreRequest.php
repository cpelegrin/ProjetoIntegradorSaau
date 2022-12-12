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
            ],
        ];


    }
}