<?php

namespace App\Livewire\Unidade;

use App\Livewire\Forms\UnidadeForm;
use App\Models\Bandeira;
use App\Models\Unidade;
use Livewire\Component;
use app\Repositorios\Auditoria;

class Form extends Component
{
    public UnidadeForm $form;
    public $bandeiras;
    protected $auditoria;

    public function mount(Unidade $unidade)
    {
        $this->form->setUnidade($unidade);
        $this->bandeiras = Bandeira::all();
    }

    public function boot(Auditoria $auditoria)
    {
        $this->auditoria = $auditoria;
    }

    public function save()
    {
        $this->form->update();

        $this->auditoria->logForm($this->form->unidade);

        $this->form->save();

        return $this->redirect('/unidades');
    }

    public function render()
    {
        return view('livewire.unidade.form');
    }
}
