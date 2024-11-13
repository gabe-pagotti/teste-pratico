<?php

namespace App\Livewire\Colaborador;

use App\Models\Bandeira;
use App\Models\Colaborador;
use App\Models\GrupoEconomico;
use App\Models\Unidade;
use Livewire\Component;

use function Laravel\Prompts\search;

class Relatorio extends Component
{
    public $busca;
    public $unidades;
    public $bandeiras;
    public $gruposEconomicos;
    public $unidade;
    public $bandeira;
    public $grupoEconomico;

    public function mount()
    {
        $this->unidades = Unidade::all();
        $this->bandeiras = Bandeira::all();
        $this->gruposEconomicos = GrupoEconomico::all();
    }

    public function render()
    {
        return view('livewire.colaborador.relatorio',[
            'colaboradores' => $this->getColaboradores(),
        ]);
    }

    protected function getColaboradores()
    {
        $colaboradoresQuery = Colaborador::select('colaboradores.nome', 'colaboradores.email', 'colaboradores.id', 'colaboradores.cpf', 'unidades.nome_fantasia as unidade', 'bandeiras.nome as bandeira', 'grupos_economicos.nome as grupo_economico')
                                    ->join('unidades', 'unidades.id', '=', 'colaboradores.unidade_id')
                                    ->join('bandeiras', 'bandeiras.id', '=', 'unidades.bandeira_id')
                                    ->join('grupos_economicos', 'grupos_economicos.id', '=', 'bandeiras.grupo_economico_id')
                                    ->search('unidades.nome_fantasia', $this->busca)
                                    ->search('bandeiras.nome', $this->busca)
                                    ->search('grupos_economicos.nome', $this->busca)
                                    ->search('colaboradores.nome', $this->busca)
                                    ->search('colaboradores.email', $this->busca)
                                    ->search('colaboradores.id', $this->busca)
                                    ->search('colaboradores.cpf', $this->busca);

        if ($this->unidade) {
            $colaboradoresQuery = $colaboradoresQuery->where('unidades.id', $this->unidade);
        }

        if ($this->bandeira) {
            $colaboradoresQuery = $colaboradoresQuery->where('bandeiras.id', $this->bandeira);
        }

        if ($this->grupoEconomico) {
            $colaboradoresQuery = $colaboradoresQuery->where('grupos_economicos.id', $this->grupoEconomico);
        }

        return $colaboradoresQuery->get();
    }
}
