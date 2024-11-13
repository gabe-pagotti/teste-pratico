<?php

namespace app\Repositorios;

use App\Models\Auditoria as ModelsAuditoria;
use Illuminate\Support\Facades\Auth ;

class Auditoria
{
    public function logForm($entidade)
    {
        $alteracoes = $entidade->getDirty();

        $acao = 'Criar';
        if ($entidade->exists) {
            $acao = "Editar";
        }

        $model = [
            'classname' => class_basename($entidade),
            'id' => $entidade->id,
        ];

        ModelsAuditoria::create([
            'user_id' => Auth::id(),
            'acao' => $acao,
            'alteracoes' => json_encode($alteracoes),
            'entidade' => json_encode($model),
        ]);
    }

    public function delete($entidade) {

        $alteracoes = [];

        $acao = 'Deletar';

        $model = [
            'classname' => class_basename($entidade),
            'id' => $entidade->id,
        ];

        ModelsAuditoria::create([
            'user_id' => Auth::id(),
            'acao' => $acao,
            'alteracoes' => json_encode($alteracoes),
            'entidade' => json_encode($model),
        ]);
    }
}
