<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bandeira extends Model
{
    public $fillable = [
        'nome',
    ];

    public function grupo_economico()
    {
        return $this->belongsTo(GrupoEconomico::class);
    }
}
