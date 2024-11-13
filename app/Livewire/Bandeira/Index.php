<?php

namespace App\Livewire\Bandeira;

use app\Repositorios\Auditoria;
use App\Models\Bandeira;
use Livewire\Component;

class Index extends Component
{
    public $bandeiras;
    protected $auditoria;

    public function mount()
    {
        $this->updateBandeiras();
    }

    public function boot(Auditoria $auditoria)
    {
        $this->auditoria = $auditoria;
    }

    public function delete(Bandeira $bandeira)
    {
        $this->auditoria->delete($bandeira);

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
