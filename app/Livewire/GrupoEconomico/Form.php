<?php

namespace App\Livewire\GrupoEconomico;

use App\Livewire\Forms\GrupoEconomicoForm;
use App\Models\GrupoEconomico;
use Livewire\Component;

class Form extends Component
{
    public GrupoEconomicoForm $form;

    public function mount(GrupoEconomico $grupoEconomico)
    {
        $this->form->setGrupoEconomico($grupoEconomico);
    }

    public function save()
    {
        $this->form->update();

        return $this->redirect('/grupos_economicos');
    }

    public function render()
    {
        return view('livewire.grupo-economico.form');
    }
}
