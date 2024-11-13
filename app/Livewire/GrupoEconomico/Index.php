<?php

namespace App\Livewire\GrupoEconomico;

use app\Repositorios\Auditoria;
use App\Models\GrupoEconomico;
use Livewire\Component;

class Index extends Component
{
    public $gruposEconomicos;
    protected $auditoria;

    public function mount()
    {
        $this->updateGruposEconomicos();
    }

    public function boot(Auditoria $auditoria)
    {
        $this->auditoria = $auditoria;
    }

    public function delete(GrupoEconomico $grupoEconomico)
    {
        $this->auditoria->delete($grupoEconomico);

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
