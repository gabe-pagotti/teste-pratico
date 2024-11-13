<?php

namespace App\Livewire\Unidade;

use App\Models\Unidade;
use app\Repositorios\Auditoria;
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

    public function delete(Unidade $unidade)
    {
        $this->auditoria->delete($unidade);

        $unidade->delete();
    }

    public function render()
    {
        return view('livewire.unidade.index', ['unidades' => Unidade::paginate(5)]);
    }
}
