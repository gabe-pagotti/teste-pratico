<?php

namespace App\Livewire\GrupoEconomico;

use App\Models\GrupoEconomico;
use Livewire\Component;

class Index extends Component
{
    public $gruposEconomicos;

    public function mount()
    {
        $this->updateGruposEconomicos();
    }

    public function delete(GrupoEconomico $grupoEconomico)
    {
        $grupoEconomico->delete();

        $this->updateGruposEconomicos();
    }

    protected function updateGruposEconomicos()
    {
        $this->gruposEconomicos = GrupoEconomico::all();
    }

    public function render()
    {
        return view('livewire.grupo-economico.index');
    }
}
