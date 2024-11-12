<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unidade extends Model
{
    public $fillable = [
        'nome_fantasia',
        'razao_social',
        'cnpj',
    ];

    public function bandeira()
    {
        return $this->belongsTo(Bandeira::class);
    }

    public function colaboradores()
    {
        return $this->hasMany(Colaborador::class);
    }

    public function getNomeAttribute()
    {
        return $this->attributes['nome_fantasia'];
    }
}
