<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UsuarioFormRequest extends FormRequest
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
                'min:2'
                ],
            'rg' => [
                'required',
                'numeric',
                'digits:10',
                !is_null($this->usuario) ? Rule::unique('usuario')->ignore($this->usuario->id) : 'unique:usuario,rg'
            ],
            'cpf' => [
                'required',
                'numeric',
                'digits:11',
                !is_null($this->usuario) ? Rule::unique('usuario')->ignore($this->usuario->id) : 'unique:usuario,cpf'
            ],
            'email' => [
                'required',
                'email',
                'min:5',
                !is_null($this->usuario) ? Rule::unique('usuario')->ignore($this->usuario->id) : 'unique:usuario,email'
            ],
            'telefone' => [
                'required',
                'numeric',
                'digits:11',
                !is_null($this->usuario) ? Rule::unique('usuario')->ignore($this->usuario->id) : 'unique:usuario,telefone'
            ],
            'senha' => [
                'required',
                'min:6',
                'max:8'
            ],
            'confirmacaoSenha' => [
                'required',
                'min:6',
                'max:8',
                'required_with:senha',
                'same:senha'
            ]
        ];
    }
}
