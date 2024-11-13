<?php

namespace App\Livewire\Colaborador;

use app\Repositorios\Auditoria;
use App\Models\Colaborador;
use Livewire\Component;

class Index extends Component
{
    public $colaboradores;
    protected $auditoria;

    public function mount()
    {
        $this->updateColaboradores();
    }

    public function boot(Auditoria $auditoria)
    {
        $this->auditoria = $auditoria;
    }

    public function delete(Colaborador $colaborador)
    {
        $this->auditoria->delete($colaborador);

        $colaborador->delete();

        $this->updateColaboradores();
    }

    protected function updateColaboradores()
    {
        $this->colaboradores = Colaborador::all();
    }

    public function render()
    {
        return view('livewire.colaborador.index');
    }
}
