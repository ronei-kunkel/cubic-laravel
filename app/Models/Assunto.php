<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assunto extends Model
{
    use HasFactory;

    protected $table = 'assunto';

    /**
     * Interações que possuem esse assunto
     *
     * @return void
     */
    public function interacao()
    {
        return $this->belongsToMany(Interacao::class);
    }
}
