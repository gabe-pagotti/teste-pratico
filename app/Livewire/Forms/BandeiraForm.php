<?php

namespace App\Livewire\Forms;

use App\Models\Bandeira;
use Livewire\Attributes\Validate;
use Livewire\Form;

class BandeiraForm extends Form
{
    public ?Bandeira $bandeira;

    #[Validate('required|min:5')]
    public $nome = '';

    #[Validate('required|exists:grupos_economicos,id')]
    public $grupoEconomico = '';

    public function setBandeira(Bandeira $bandeira)
    {
        $this->bandeira = $bandeira;

        $this->nome = $bandeira->nome;
        $this->grupoEconomico = $bandeira->grupo_economico_id;
    }

    public function store()
    {
        $this->validate();

        Bandeira::create($this->only(['form.nome']));
    }

    public function update()
    {
        $this->validate();

        $this->bandeira->grupo_economico_id = $this->grupoEconomico;

        $this->bandeira->fill($this->all());
    }

    public function save()
    {
        $this->bandeira->save();
    }
}
