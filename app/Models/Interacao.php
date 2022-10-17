<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interacao extends Model
{
    use HasFactory;

    protected $table = 'interacao';

    /**
     * Usuário que fez a interação
     *
     * @return void
     */
    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }
}
