<?php

namespace App\Livewire\Forms;

use App\Models\Colaborador;
use Livewire\Attributes\Validate;
use Illuminate\Validation\Rule;
use Livewire\Form;

class ColaboradorForm extends Form
{
    public ?Colaborador $colaborador;

    #[Validate('required|min:5')]
    public $nome = '';

    public $email = '';

    public $cpf = '';

    #[Validate('required|exists:unidades,id')]
    public $unidade = '';

    public function rules()
    {
        return [
            'cpf' => [
                'required',
                'size:14',
                'regex:/^\d{3}\.\d{3}\.\d{3}\-\d{2}$/',
                Rule::unique('colaboradores')->ignore($this->colaborador->cpf, 'cpf'),
            ],
            'email' => [
                'required',
                'email',
                Rule::unique('colaboradores')->ignore($this->colaborador->email, 'email'),
            ],
        ];
    }

    public function setColaborador(Colaborador $colaborador)
    {
        $this->colaborador = $colaborador;

        $this->nome = $colaborador->nome;
        $this->email = $colaborador->email;
        $this->cpf = $colaborador->cpf;

        $this->unidade = $colaborador->unidade_id;
    }

    public function update()
    {
        $this->validate();

        $this->colaborador->unidade_id = $this->unidade;

        $this->colaborador->fill($this->all())->save();
    }
}
