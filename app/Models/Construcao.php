<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Construcao extends Model
{
    use HasFactory;

    protected $table = 'construcao';

    public $timestamps = false;

    protected $fillable = [
        'nome',
        'tipo',
        'numero_interno',
        'quantidade_andar',
        'condominio_id',
        'rua_id'
    ];

    /**
     * Apartamentos que a construção possui
     *
     * @return void
     */
    public function apartamento()
    {
        return $this->hasMany(Apartamento::class);
    }

    /**
     * Condomínio em que está a construção
     *
     * @return void
     */
    public function condominio()
    {
        return $this->belongsTo(Condominio::class);
    }

    /**
     * Usuários da construção
     *
     * @return void
     */
    public function usuario()
    {
        return $this->hasMany(Usuario::class);
    }

    /**
     * Rua em que está a construção
     *
     * @return void
     */
    public function rua()
    {
        return $this->belongsTo(Rua::class);
    }
}
