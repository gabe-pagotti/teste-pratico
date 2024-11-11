<?php

namespace App\Livewire\Forms;

use App\Models\Unidade;
use Livewire\Attributes\Validate;
use Livewire\Form;

class UnidadeForm extends Form
{
    public ?Unidade $unidade;

    #[Validate('required|min:5')]
    public $nome_fantasia = '';

    #[Validate('required|min:5')]
    public $razao_social = '';

    #[Validate('required|min:5')]
    public $cnpj = '';

    #[Validate('required|exists:bandeiras,id')]
    public $bandeira = '';

    public function setUnidade(Unidade $unidade)
    {
        $this->unidade = $unidade;

        $this->nome_fantasia = $unidade->nome_fantasia;
        $this->razao_social = $unidade->razao_social;
        $this->cnpj = $unidade->cnpj;
        $this->bandeira = $unidade->bandeira_id;
    }

    public function update()
    {
        $this->validate();

        $this->unidade->bandeira_id = $this->bandeira;

        $this->unidade->fill($this->all())->save();
    }
}
