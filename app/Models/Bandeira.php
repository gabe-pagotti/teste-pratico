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

    public function unidades()
    {
        return $this->hasMany(Unidade::class);
    }

    public function delete()
    {
        $this->unidades()->delete();

        return parent::delete();
    }
}
