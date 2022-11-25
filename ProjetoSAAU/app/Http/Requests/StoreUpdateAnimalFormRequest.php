<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateAnimalFormRequest extends FormRequest
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
            'nome.required' => 'Você precisa inserir o nome para continuar',
            'sexo.required' => 'Você precisa inserir o sexo para continuar',
            'prontuario.required' => 'Você precisa inserir o prontuário para continuar',
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
            'nome' => [
                'required',
            ],
            'sexo' => [
                'required',
            ],
            'prontuario' => [
                'required'
            ],

        ];
    }
}
