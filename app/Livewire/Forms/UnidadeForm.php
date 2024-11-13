<?php

namespace App\Livewire\Forms;

use App\Models\Unidade;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class UnidadeForm extends Form
{
    public ?Unidade $unidade;

    #[Validate('required|min:5')]
    public $nome_fantasia = '';

    #[Validate('required|min:5')]
    public $razao_social = '';

    public $cnpj = '';

    #[Validate('required|exists:bandeiras,id')]
    public $bandeira = '';

    public function rules()
    {
        return [
            'cnpj' => [
                'required',
                'size:18',
                'regex:/^\d{2}\.\d{3}\.\d{3}\/\d{4}\-\d{2}$/',
                Rule::unique('unidades')->ignore($this->unidade->cnpj, 'cnpj'),
            ],
        ];
    }

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

        $this->unidade->fill($this->all());
    }

    public function save()
    {
        $this->unidade->save();
    }
}
