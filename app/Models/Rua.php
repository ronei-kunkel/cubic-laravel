<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rua extends Model
{
    use HasFactory;

    protected $table = 'rua';

    public $timestamps = false;

    protected $fillable = [
        'nome',
        'condominio_id'
    ];

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
