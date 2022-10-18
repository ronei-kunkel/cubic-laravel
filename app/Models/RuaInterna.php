<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RuaInterna extends Model
{
    use HasFactory;

    protected $table = 'rua_interna';

    public $timestamps = false;

    /**
     * Condominio que essa rua está
     *
     * @return void
     */
    public function condominio()
    {
        return $this->belongsTo(Condominio::class);
    }

    /**
     * Construções que estão nessa rua
     *
     * @return void
     */
    public function construcao()
    {
        return $this->hasMany(Construcao::class);
    }
}
