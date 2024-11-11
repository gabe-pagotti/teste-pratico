<?php

namespace App\Livewire\Bandeira;

use App\Models\Bandeira;
use Livewire\Component;

class Index extends Component
{
    public $bandeiras;

    public function mount()
    {
        $this->updateBandeiras();
    }

    public function delete(Bandeira $bandeira)
    {
        $bandeira->delete();

        $this->updateBandeiras();
    }

    protected function updateBandeiras()
    {
        $this->bandeiras = Bandeira::all();
    }

    public function render()
    {
        return view('livewire.bandeira.index');
    }
}
