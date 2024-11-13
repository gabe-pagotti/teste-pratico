<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GrupoEconomico extends Model
{
    public $table = "grupos_economicos";

    public $fillable = [
        "nome",
    ];

    public function bandeiras()
    {
        return $this->hasMany(Bandeira::class);
    }

    public function delete()
    {
        $bandeiras = $this->bandeiras;
        foreach ($bandeiras as $bandeira) {
            $bandeira->delete();
        }

        return parent::delete();
    }
}
