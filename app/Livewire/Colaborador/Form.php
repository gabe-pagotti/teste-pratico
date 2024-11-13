<?php

namespace App\Livewire\Colaborador;

use App\Livewire\Forms\ColaboradorForm;
use App\Models\Colaborador;
use App\Models\Unidade;
use app\Repositorios\Auditoria;
use Livewire\Component;

class Form extends Component
{
    public ColaboradorForm $form;
    public $unidades;
    protected $auditoria;

    public function mount(Colaborador $colaborador)
    {
        $this->form->setColaborador($colaborador);
        $this->unidades = Unidade::all();
    }

    public function boot(Auditoria $auditoria)
    {
        $this->auditoria = $auditoria;
    }

    public function save()
    {
        $this->form->update();

        $this->auditoria->logForm($this->form->colaborador);

        $this->form->save();

        return $this->redirect('/colaboradores');
    }

    public function render()
    {
        return view('livewire.colaborador.form');
    }
}
