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
            'tamanho_mb'                => 'required|min:1|max:3',
            'numero_assinaturas'        => 'required|min:1|max:2',
            'assinatura_responsavel'    => 'required|min:10|max:200',
            'quantidade_paginas'        => 'required|min:1|max:2',
        ];
    }

    public function messages()
    {
        return [
            'titulo.required' => 'O campo Titulo não pode ser vazio',
            'titulo.min' => 'O campo Titulo não pode ser menor que 10',
            'titulo.max' => 'O campo Titulo não pode ser maior que 200',

            'tamanho_mb.required' => 'O campo Tamanho do documento em MB não pode ser vazio',
            'tamanho_mb.min' => 'O campo Tamanho do documento em MB não pode ser menor que 1',
            'tamanho_mb.max' => 'O campo Tamanho do documento em MB não pode ser maior que 2',

            'numero_assinaturas.required' => 'O campo Nº de assinaturas do documento não pode ser vazio',
            'numero_assinaturas.min' => 'O campo Nº de assinaturas do documento não pode ser menor que 1',
            'numero_assinaturas.max' => 'O campo Nº de assinaturas do documento não pode ser maior que 2',

            'assinatura_responsavel.required' => 'O campo Assinatura do responsável não pode ser vazio',
            'assinatura_responsavel.min' => 'O campo Assinatura do responsável não pode ser menor que 10',
            'assinatura_responsavel.max' => 'O campo Assinatura do responsável não pode ser maior que 200',

            'quantidade_paginas.required' => 'O campo Quantidade de páginas (1 ou 10) não pode ser vazio',
            'quantidade_paginas.min' => 'O campo Quantidade de páginas (1 ou 10) não pode ser menor que 1',
            'quantidade_paginas.max' => 'O campo Quantidade de páginas (1 ou 10) não pode ser maior que 2',
        ];
    }
}
