<?php

namespace App\Livewire\Forms;

use App\Models\GrupoEconomico;
use Livewire\Attributes\Validate;
use Livewire\Form;

class GrupoEconomicoForm extends Form
{
    public ?GrupoEconomico $grupoEconomico;

    #[Validate('required|min:5')]
    public $nome = '';

    public function setGrupoEconomico(GrupoEconomico $grupoEconomico)
    {
        $this->grupoEconomico = $grupoEconomico;

        $this->nome = $grupoEconomico->nome;
    }

    public function store()
    {
        $this->validate();

        GrupoEconomico::create($this->only(['form.nome']));
    }

    public function update()
    {
        $this->validate();

        $this->grupoEconomico->fill($this->all());
    }

    public function save()
    {
        $this->grupoEconomico->save();
    }
}
