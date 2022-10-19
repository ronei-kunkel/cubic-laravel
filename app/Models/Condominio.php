<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Condominio extends Model
{
    use HasFactory;

    protected $table = 'condominio';

    public $timestamps = false;

    protected $fillable = [
        'nome',
        'cnpj',
        'cep',
        'estado',
        'cidade',
        'bairro',
        'rua',
        'numero',
        'complemento'
    ];

    /**
     * Ruas que o condominio possui
     *
     * @return void
     */
    public function rua()
    {
        return $this->hasMany(Rua::class);
    }

    /**
     * Construções que o condomínio possui
     *
     * @return void
     */
    public function construcao()
    {
        return $this->hasMany(Construcao::class);
    }

    /**
     * Usuários do condominio
     *
     * @return void
     */
    public function usuario()
    {
        return $this->hasMany(Usuario::class);
    }
}
