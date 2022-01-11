<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStoreDocumentoRequest extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'titulo'                    => 'required|min:10|max:200',
            'tamanho'                   => 'required|min:1|max:3',
            'assinatura_responsavel'    => 'required|min:10|max:200',
            'qnt_pages'                 => 'required|min:1|max:2',
        ];
    }

    public function messages()
    {
        return [
            'titulo.required'   => 'O campo Titulo não pode ser vazio',
            'titulo.min'        => 'O campo Titulo não pode ser menor que 10',
            'titulo.max'        => 'O campo Titulo não pode ser maior que 200',

            'tamanho.required'  => 'O campo Tamanho do documento em MB não pode ser vazio',
            'tamanho.min'       => 'O campo Tamanho do documento em MB não pode ser menor que 1',
            'tamanho.max'       => 'O campo Tamanho do documento em MB não pode ser maior que 2',

            'assinatura_responsavel.required'   => 'O campo Assinatura do responsável não pode ser vazio',
            'assinatura_responsavel.min'        => 'O campo Assinatura do responsável não pode ser menor que 10',
            'assinatura_responsavel.max'        => 'O campo Assinatura do responsável não pode ser maior que 200',

            'qnt_pages.required'    => 'O campo Quantidade de páginas (1 ou 10) não pode ser vazio',
            'qnt_pages.min'         => 'O campo Quantidade de páginas (1 ou 10) não pode ser menor que 1',
            'qnt_pages.max'         => 'O campo Quantidade de páginas (1 ou 10) não pode ser maior que 2',
        ];
    }
}
