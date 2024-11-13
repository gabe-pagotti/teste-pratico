<?php

namespace App\Livewire\Auditoria;

use App\Models\Auditoria;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.auditoria.index', ['logs' => Auditoria::paginate(5)]);
    }
}
