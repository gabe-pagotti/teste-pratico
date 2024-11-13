<?php

namespace App\Livewire\Bandeira;

use App\Livewire\Forms\BandeiraForm;
use App\Models\Bandeira;
use App\Models\GrupoEconomico;
use app\Repositorios\Auditoria;
use Livewire\Component;

class Form extends Component
{
    public BandeiraForm $form;
    public $gruposEconomicos;
    protected $auditoria;

    public function mount(Bandeira $bandeira)
    {
        $this->form->setBandeira($bandeira);
        $this->gruposEconomicos = GrupoEconomico::all();
    }

    public function boot(Auditoria $auditoria)
    {
        $this->auditoria = $auditoria;
    }

    public function save()
    {
        $this->form->update();

        $this->auditoria->logForm($this->form->bandeira);

        $this->form->save();

        return $this->redirect('/bandeiras');
    }

    public function render()
    {
        return view('livewire.bandeira.form');
    }
}
