<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PerfilStoreRequest extends FormRequest
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
            'nome.required' => 'Você precisa ter um nome no perfil',
            'nome.min'=>'O nome precisa ter mais de três caracteres',
            'email'=>'Você precisa de um email no perfil'
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
            'nome'=>[
                'required',
                'min:3'
            ],
            'email'=>[
                'required'
            ],
        ];
    }
}
