<?php

namespace App\Livewire\Auditoria;

use App\Models\Auditoria;
use Livewire\Component;

class Index extends Component
{
    public $logs;

    public function mount()
    {
        $this->logs = Auditoria::all();
    }

    public function render()
    {
        return view('livewire.auditoria.index');
    }
}
