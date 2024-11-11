<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GrupoEconomico extends Model
{
    public $table = "grupos_economicos";

    public $fillable = [
        "nome",
    ];
}
