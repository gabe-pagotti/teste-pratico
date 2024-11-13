<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Auditoria extends Model
{
    public $fillable = [
        'user_id',
        'acao',
        'alteracoes',
        'entidade',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getAlteracoesAttribute($value)
    {
        $alteracoes = json_decode($value, true);

        if (empty($alteracoes)) {
            return '-';
        }

        $log = '';
        foreach ($alteracoes as $campo => $alteracao) {
            $log .= "Campo: <u>$campo</u> Alterado para: <u>$alteracao</u> <br/>";
        }

        return $log;
    }

    public function getEntidadeAttribute($value){
        $entidade = json_decode($value, true);

        if (!$entidade['id']) {
            return $entidade['classname'];
        }

        return $entidade['classname'].'#'.$entidade['id'];
    }
}
