<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ConstrucaoFormRequest extends FormRequest
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
            'tipo' => [
                'required',
                'string',
                'min:3'
            ],
            'numero_interno' => [
                'required',
                'numeric',
                'min:0'
            ],
            'quantidade_andar' => [
                'required',
                'numeric',
                'min:1'
            ],
            'condominio_id' => [
                'required',
                'numeric',
                'min:1'
            ],
            'rua_id' => [
                'required',
                'numeric',
                'min:1'
            ],
            // 'cnpj' => [
            //     'required',
            //     'string',
            //     'size:14',
            //     !is_null($this->condominio) ? Rule::unique('condominio')->ignore($this->condominio->id) : 'unique:condominio,cnpj'
            // ]
        ];
    }
}
