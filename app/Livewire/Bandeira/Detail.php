<?php

namespace App\Livewire\Bandeira;

use App\Models\Bandeira;
use app\Repositorios\Auditoria;
use Livewire\Component;

class Detail extends Component
{
    public Bandeira $bandeira;
    protected $auditoria;

    public function mount(Bandeira $bandeira)
    {
        $this->bandeira = $bandeira;
    }

    public function boot(Auditoria $auditoria)
    {
        $this->auditoria = $auditoria;
    }

    public function delete(Bandeira $bandeira)
    {
        $this->auditoria->delete($bandeira);

        $bandeira->delete();

        return $this->redirect('/bandeiras');
    }

    public function render()
    {
        return view('livewire.bandeira.detail');
    }
}
