<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuario';

    protected $fillable = [
        'nome',
        'cpf',
        'rg',
        'email',
        'telefone',
        'senha'
    ];

    /**
     * Funções do usuário
     *
     * @return void
     */
    public function funcao()
    {
        return $this->hasMany(Funcao::class);
    }

    /**
     * Condomínios em que o usuário possui algum vínculo
     *
     * @return void
     */
    public function condominio()
    {
        return $this->belongsToMany(Condominio::class);
    }

    /**
     * Construções em que o usuário possui algum vínculo
     *
     * @return void
     */
    public function construcao()
    {
        return $this->belongsToMany(Construcao::class);
    }

    /**
     * Apartamentos em que o usuário possui algum vínculo
     *
     * @return void
     */
    public function apartamento()
    {
        return $this->belongsToMany(Apartamento::class);
    }

    /**
     * Interações que o usuário já fez
     *
     * @return void
     */
    public function interacao()
    {
        $this->hasMany(Interacao::class);
    }
}
