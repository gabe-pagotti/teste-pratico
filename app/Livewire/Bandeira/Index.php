<?php

namespace App\Livewire\Bandeira;

use app\Repositorios\Auditoria;
use App\Models\Bandeira;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    protected $auditoria;

    public function boot(Auditoria $auditoria)
    {
        $this->auditoria = $auditoria;
    }

    public function delete(Bandeira $bandeira)
    {
        $this->auditoria->delete($bandeira);

        $bandeira->delete();
    }

    public function render()
    {
        return view('livewire.bandeira.index', ['bandeiras' => Bandeira::paginate(5)]);
    }
}
