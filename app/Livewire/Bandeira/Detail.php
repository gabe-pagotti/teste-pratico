<?php

namespace App\Livewire\Bandeira;

use App\Models\Bandeira;
use Livewire\Component;

class Detail extends Component
{
    public Bandeira $bandeira;

    public function mount(Bandeira $bandeira)
    {
        $this->bandeira = $bandeira;
    }

    public function render()
    {
        return view('livewire.bandeira.detail');
    }
}
