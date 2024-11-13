<?php

namespace App\Livewire\GrupoEconomico;

use app\Repositorios\Auditoria;
use App\Models\GrupoEconomico;
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

    public function delete(GrupoEconomico $grupoEconomico)
    {
        $this->auditoria->delete($grupoEconomico);

        $grupoEconomico->delete();
    }

    public function render()
    {
        return view('livewire.grupo-economico.index', ['gruposEconomicos' => GrupoEconomico::paginate(5)]);
    }
}
