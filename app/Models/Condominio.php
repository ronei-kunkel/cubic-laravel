<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Condominio extends Model
{
    use HasFactory;

    protected $table = 'condominio';

    public $timestamps = false;

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
