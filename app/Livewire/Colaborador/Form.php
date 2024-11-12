<?php

namespace App\Livewire\Colaborador;

use App\Livewire\Forms\ColaboradorForm;
use App\Models\Colaborador;
use App\Models\Unidade;
use Livewire\Component;

class Form extends Component
{
    public ColaboradorForm $form;
    public $unidades;

    public function mount(Colaborador $colaborador)
    {
        $this->form->setColaborador($colaborador);
        $this->unidades = Unidade::all();
    }

    public function save()
    {
        $this->form->update();

        return $this->redirect('/colaboradores');
    }

    public function render()
    {
        return view('livewire.colaborador.form');
    }
}
