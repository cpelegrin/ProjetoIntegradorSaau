<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateEventosFormRequest extends FormRequest
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
            'titulo.required' => 'Você precisa inserir o título para continuar',
            'descricao.required' => 'Você precisa inserir a descrição para continuar',
            'data.required' => 'Você precisa inserir a data para continuar',
            'local.required' => 'Você precisa inserir um local para continuar',
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
            'titulo' => [
                'required',
                'unique:eventos'
            ],
            'descricao' => [
                'required',
                'max:270'
            ],
            'data' => [
                'required'
            ],
            'local' => [
                'required'
            ],
        ];
    }
}
