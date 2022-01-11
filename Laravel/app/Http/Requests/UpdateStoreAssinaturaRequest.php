<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStoreAssinaturaRequest extends FormRequest
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
            'qnt_caracteres'        => 'required|min:1|max:200',
            'assinatura_default'    => 'required|min:10|max:200',
            'qnt_de_uso'            => 'required|min:1|max:2'
        ];
    }

    public function messages()
    {
        return [
            'qnt_caracteres.required'   => 'O campo Qnt de caracteres da assinatura não pode ser vazio',
            'qnt_caracteres.min'        => 'O campo Qnt de caracteres da assinatura não pode ser menor que 1',
            'qnt_caracteres.max'        => 'O campo Qnt de caracteres da assinatura não pode ser maior que 200',

            'assinatura_default.required'   => 'O campo Assinatura padrão não pode ser vazio',
            'assinatura_default.min'        => 'O campo Assinatura padrão não pode ser menor que 10',
            'assinatura_default.max'        => 'O campo Assinatura padrão não pode ser maior que 200',

            'qnt_de_uso.required'   => 'O campo Nº vezes que essa assinatura foi usada não pode ser vazio',
            'qnt_de_uso.min'        => 'O campo Nº vezes que essa assinatura foi usada não pode ser menor que 1',
            'qnt_de_uso.max'        => 'O campo Nº vezes que essa assinatura foi usada não pode ser maior que 2',
        ];
    }
}
