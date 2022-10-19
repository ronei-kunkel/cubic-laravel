<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CondominioFormRequest extends FormRequest
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
            'nome' => [
                'required',
                'string',
                'min:5'
            ],
            'cnpj' => [
                'required',
                'string',
                'size:14',
                !is_null($this->condominio) ? Rule::unique('condominio')->ignore($this->condominio->id) : 'unique:condominio,cnpj'
            ],
            'cep' => [
                'required',
                'string',
                'size:8'
            ],
            'estado' => [
                'required',
                'string',
                'size:2'
            ],
            'cidade' => [
                'required',
                'string',
                'min:3'
            ],
            'bairro' => [
                'required',
                'string',
                'min:2'
            ],
            'rua' => [
                'required',
                'string',
                'min:2'
            ],
            'numero' => [
                'required',
                'string',
                'min:1'
            ],
            'complemento' => [
                'nullable',
                'string'
            ]
        ];
    }
}
