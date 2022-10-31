<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateNoticiaFormRequest extends FormRequest
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
            'resumo.required' => 'Você precisa inserir o resumo para continuar',
            'corpo.required' => 'Você precisa inserir o corpo para continuar',
            'image.required' => 'Você precisa inserir uma imagem para continuar',
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
                'unique:noticias'
            ],
            'resumo' => [
                'required',
                'max:270'
            ],
            'corpo' => [
                'required'
            ],
            'foto_noticia' => [
                'required'
            ],
        ];
    }
}
