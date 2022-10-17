<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartamento extends Model
{
    use HasFactory;

    protected $table = 'apartamento';

    /**
     * Construção em que está o apartamento
     *
     * @return void
     */
    public function construcao()
    {
        return $this->belongsTo(Construcao::class);
    }

    /**
     * Usuários do apartamento
     *
     * @return void
     */
    public function usuario()
    {
        return $this->hasMany(Usuario::class);
    }
}
