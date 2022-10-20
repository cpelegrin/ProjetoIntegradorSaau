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
            'titulo.required' => 'o título',
            'resumo.required' => 'o resumo',
            'corpo.required' => 'o corpo',
            'image.required' => 'uma imagem',
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
        'image' => [
            'required'
        ],
        ];
    }
}
