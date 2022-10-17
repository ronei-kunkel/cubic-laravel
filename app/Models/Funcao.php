<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcao extends Model
{
    use HasFactory;

    protected $table = 'funcao';

    /**
     * Usuários que possuem a função
     *
     * @return void
     */
    public function usuario()
    {
        return $this->belongsToMany(Usuario::class);
    }
}
