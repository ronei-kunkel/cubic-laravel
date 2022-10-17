<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $table = 'status';

    /**
     * Condomínio que possui o status
     *
     * @return void
     */
    public function condominio()
    {
        return $this->belongsTo(Condominio::class);
    }

    /**
     * Construções que possuem o status
     *
     * @return void
     */
    public function construcao()
    {
        return $this->belongsToMany(Construcao::class);
    }

    /**
     * Apartamentos que possuem o status
     *
     * @return void
     */
    public function apartamento()
    {
        return $this->belongsToMany(Apartamento::class);
    }
}
