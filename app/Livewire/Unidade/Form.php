<?php

namespace App\Livewire\Unidade;

use App\Livewire\Forms\UnidadeForm;
use App\Models\Bandeira;
use App\Models\Unidade;
use Livewire\Component;

class Form extends Component
{
    public UnidadeForm $form;
    public $bandeiras;

    public function mount(Unidade $unidade)
    {
        $this->form->setUnidade($unidade);
        $this->bandeiras = Bandeira::all();
    }

    public function save()
    {
        $this->form->update();

        return $this->redirect('/unidades');
    }
    public function render()
    {
        return view('livewire.unidade.form');
    }
}
