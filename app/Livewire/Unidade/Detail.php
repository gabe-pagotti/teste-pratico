<?php

namespace App\Livewire\Unidade;

use App\Models\Unidade;
use Livewire\Component;
use app\Repositorios\Auditoria;

class Detail extends Component
{
    public Unidade $unidade;
    protected $auditoria;

    public function mount(Unidade $unidade)
    {
        $this->unidade = $unidade;
    }

    public function boot(Auditoria $auditoria)
    {
        $this->auditoria = $auditoria;
    }

    public function delete(Unidade $unidade)
    {
        $this->auditoria->delete($unidade);

        $unidade->delete();

        return $this->redirect('/unidades');
    }

    public function render()
    {
        return view('livewire.unidade.detail');
    }
}
