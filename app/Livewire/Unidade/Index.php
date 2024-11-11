<?php

namespace App\Livewire\Unidade;

use App\Models\Unidade;
use Livewire\Component;

class Index extends Component
{
    public $unidades;

    public function mount()
    {
        $this->updateUnidades();
    }

    public function delete(Unidade $unidade)
    {
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
