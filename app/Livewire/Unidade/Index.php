<?php

namespace App\Livewire\Unidade;

use App\Models\Unidade;
use app\Repositorios\Auditoria;
use Livewire\Component;

class Index extends Component
{
    public $unidades;
    protected $auditoria;

    public function mount()
    {
        $this->updateUnidades();
    }

    public function boot(Auditoria $auditoria)
    {
        $this->auditoria = $auditoria;
    }

    public function delete(Unidade $unidade)
    {
        $this->auditoria->delete($unidade);

        $unidade->delete();

        $this->updateUnidades();
    }

    protected function updateUnidades()
    {
        $this->unidades = Unidade::all();
    }

    public function render()
    {
        return view('livewire.unidade.index');
    }
}
