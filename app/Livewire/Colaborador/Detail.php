<?php

namespace App\Livewire\Colaborador;

use app\Repositorios\Auditoria;
use App\Models\Colaborador;
use Livewire\Component;

class Detail extends Component
{
    public Colaborador $colaborador;
    protected $auditoria;

    public function mount(Colaborador $colaborador)
    {
        $this->colaborador = $colaborador;
    }

    public function boot(Auditoria $auditoria)
    {
        $this->auditoria = $auditoria;
    }

    public function delete(Colaborador $colaborador)
    {
        $this->auditoria->delete($colaborador);

        $colaborador->delete();

        return $this->redirect('/colaboradores');
    }

    public function render()
    {
        return view('livewire.colaborador.detail');
    }
}
