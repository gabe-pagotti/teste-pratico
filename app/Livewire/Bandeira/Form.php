<?php

namespace App\Livewire\Bandeira;

use App\Livewire\Forms\BandeiraForm;
use App\Models\Bandeira;
use App\Models\GrupoEconomico;
use Livewire\Component;

class Form extends Component
{
    public BandeiraForm $form;
    public $gruposEconomicos;

    public function mount(Bandeira $bandeira)
    {
        $this->form->setBandeira($bandeira);
        $this->gruposEconomicos = GrupoEconomico::all();
    }

    public function save()
    {
        $this->form->update();

        return $this->redirect('/bandeiras');
    }

    public function render()
    {
        return view('livewire.bandeira.form');
    }
}
