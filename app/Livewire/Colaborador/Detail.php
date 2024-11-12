<?php

namespace App\Livewire\Colaborador;

use App\Models\Colaborador;
use Livewire\Component;

class Detail extends Component
{
    public Colaborador $colaborador;

    public function mount(Colaborador $colaborador)
    {
        $this->colaborador = $colaborador;
    }

    public function delete(Colaborador $colaborador)
    {
        $colaborador->delete();

        return $this->redirect('/colaboradores');
    }

    public function render()
    {
        return view('livewire.colaborador.detail');
    }
}
