<?php

namespace App\Livewire\Colaborador;

use App\Models\Colaborador;
use Livewire\Component;

class Index extends Component
{
    public $colaboradores;

    public function mount()
    {
        $this->updateColaboradores();
    }

    public function delete(Colaborador $colaborador)
    {
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
