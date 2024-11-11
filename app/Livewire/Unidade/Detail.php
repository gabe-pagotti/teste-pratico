<?php

namespace App\Livewire\Unidade;

use App\Models\Unidade;
use Livewire\Component;

class Detail extends Component
{
    public Unidade $unidade;

    public function mount(Unidade $unidade)
    {
        $this->unidade = $unidade;
    }

    public function render()
    {
        return view('livewire.unidade.detail');
    }
}
