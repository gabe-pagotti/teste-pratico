<?php

namespace App\Livewire\GrupoEconomico;

use App\Livewire\Forms\GrupoEconomicoForm;
use App\Models\GrupoEconomico;
use app\Repositorios\Auditoria;
use Livewire\Component;

class Form extends Component
{
    public GrupoEconomicoForm $form;
    protected $auditoria;

    public function mount(GrupoEconomico $grupoEconomico)
    {
        $this->form->setGrupoEconomico($grupoEconomico);
    }

    public function boot(Auditoria $auditoria)
    {
        $this->auditoria = $auditoria;
    }

    public function save()
    {
        $this->form->update();

        $this->auditoria->logForm($this->form->grupoEconomico);

        $this->form->save();

        return $this->redirect('/grupos_economicos');
    }

    public function render()
    {
        return view('livewire.grupo-economico.form');
    }
}
