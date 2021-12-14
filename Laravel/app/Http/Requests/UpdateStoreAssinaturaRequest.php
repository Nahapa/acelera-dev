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
            'quantidade_caracteres' => 'required|min:1|max:200',
            'padrao'                => 'required|min:10|max:200',
            'numero_vezes_usada'    => 'required|min:1|max:2'
        ];
    }

    public function messages()
    {
        return [
            'quantidade_caracteres.required' => 'O campo Qnt de caracteres da assinatura não pode ser vazio',
            'quantidade_caracteres.min' => 'O campo Qnt de caracteres da assinatura não pode ser menor que 1',
            'quantidade_caracteres.max' => 'O campo Qnt de caracteres da assinatura não pode ser maior que 200',

            'padrao.required' => 'O campo Assinatura padrão não pode ser vazio',
            'padrao.min' => 'O campo Assinatura padrão não pode ser menor que 10',
            'padrao.max' => 'O campo Assinatura padrão não pode ser maior que 200',

            'numero_vezes_usada.required' => 'O campo Nº vezes que essa assinatura foi usada não pode ser vazio',
            'numero_vezes_usada.min' => 'O campo Nº vezes que essa assinatura foi usada não pode ser menor que 1',
            'numero_vezes_usada.max' => 'O campo Nº vezes que essa assinatura foi usada não pode ser maior que 2',
        ];
    }
}
