<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateAdocoesFormRequest extends FormRequest
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
            'contato.required' => 'Você precisa inserir o contato para continuar',
            'data.required' => 'Você precisa inserir a data para continuar',
            'interesse.required' => 'Você precisa inserir o interesse para continuar',
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
            'contato' => [
                'required',
                'max:270'
            ],
            'data' => [
                'required'
            ],
            'interesse' => [
                'required'
            ],
        ];
    }
}
