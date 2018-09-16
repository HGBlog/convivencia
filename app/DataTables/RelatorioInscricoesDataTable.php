<?php

namespace App\DataTables;

use App\Models\RelatorioInscricoes;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class RelatorioInscricoesDataTable extends DataTable
{
    private $convivencia;

    public function forConvivencia($convivencia_id) {
    $this->convivencia = $convivencia_id;
    return $this;
    }


    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);

        return $dataTable->addColumn('action', 'relatorio_inscricoes.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Post $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(RelatorioInscricoes $model)
    {
        return $model->where('convivencia_id',$this->convivencia )->select('conv.vw_rel_inscricoes.*');
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->ajax([
                'url'  => \Request::url().'?convivencia_id='.$this->request()->get("convivencia_id"),
            ])
            //->minifiedAjax()
            //->addAction(['width' => '80px'])
            ->parameters([
                'dom'     => 'Bfrtip',
                'order'   => [[1, 'asc']],
                'buttons' => [
                    'export',
                    'print',
                    'reset',
                    'reload',
                ],
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            
            'convivencia_id' => ['name' => 'convivencia_id', 'data' => 'convivencia_id', 'title'=>'Conv'],
            'participante' => ['name' => 'participante', 'data' => 'participante', 'title'=>'Participante'],
            'nu_cpf_membro' => ['name' => 'nu_cpf_membro', 'data' => 'nu_cpf_membro', 'title'=>'CPF'],
            'nu_rg_membro' => ['name' => 'nu_rg_membro', 'data' => 'nu_rg_membro', 'title'=>'RG'],
            'conjuge' => ['name' => 'conjuge', 'data' => 'conjuge', 'title'=>'Cônjuge'],
            'nu_cpf_conjuge' => ['name' => 'nu_cpf_conjuge', 'data' => 'nu_cpf_conjuge', 'title'=>'CPF'],
            'nu_rg_conjuge' => ['name' => 'nu_rg_conjuge', 'data' => 'nu_rg_conjuge', 'title'=>'RG'],
            'tipo_pessoa' => ['name' => 'tipo_pessoa', 'data' => 'tipo_pessoa', 'title'=>'Tipo Pessoa'],
            'telefone' => ['name' => 'telefone', 'data' => 'telefone', 'title'=>'Telefone'],
            'telefone2' => ['name' => 'telefone2', 'data' => 'telefone2', 'title'=>'Telefone2'],
            'carisma' => ['name' => 'carisma', 'data' => 'carisma', 'title'=>'Carisma'],
            'equipe' => ['name' => 'equipe', 'data' => 'equipe', 'title'=>'Equipe'],
            'data_chegada' => ['name' => 'data_chegada', 'data' => 'data_chegada', 'title'=>'Data Chegada'],
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'relatorio_inscricoesdatatable_' . time();
    }
}