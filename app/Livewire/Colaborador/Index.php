<?php

namespace App\Livewire\Colaborador;

use app\Repositorios\Auditoria;
use App\Models\Colaborador;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    protected $auditoria;

    public function boot(Auditoria $auditoria)
    {
        $this->auditoria = $auditoria;
    }

    public function delete(Colaborador $colaborador)
    {
        $this->auditoria->delete($colaborador);

        $colaborador->delete();
    }

    public function render()
    {
        return view('livewire.colaborador.index', ['colaboradores' => Colaborador::paginate(5)]);
    }
}
