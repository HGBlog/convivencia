<?php

namespace App\DataTables;

use App\Models\RelatorioMembros;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class RelatorioMembrosDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);

        return $dataTable->addColumn('action', 'relatorio_membros.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Post $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(RelatorioMembros $model)
    {
        return $model->newQuery();
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
            ->minifiedAjax()
            //->addAction(['width' => '80px'])
            ->parameters([
                'dom'     => 'Bfrtip',
                'order'   => [[0, 'asc']],
                'buttons' => [
                    //'create',
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
            'no_usuario' => ['name' => 'no_usuario', 'data' => 'no_usuario', 'title'=>'Nome'],
            'nu_cpf_membro' => ['name' => 'nu_cpf_membro', 'data' => 'nu_cpf_membro', 'title'=>'CPF'],
            'nu_rg_membro' => ['name' => 'nu_rg_membro', 'data' => 'nu_rg_membro', 'title'=>'RG'],
            'no_conjuge' => ['name' => 'no_conjuge', 'data' => 'no_conjuge', 'title'=>'Cônjuge'],
            'nu_cpf_conjuge' => ['name' => 'nu_cpf_conjuge', 'data' => 'nu_cpf_conjuge', 'title'=>'CPF'],
            'nu_rg_conjuge' => ['name' => 'nu_rg_conjuge', 'data' => 'nu_rg_conjuge', 'title'=>'RG'],
            'no_email' => ['name' => 'no_email', 'data' => 'no_email', 'title'=>'Email'],
            'telefone' => ['name' => 'telefone', 'data' => 'telefone', 'title'=>'Telefone'],
            'telefone2' => ['name' => 'telefone2', 'data' => 'telefone2', 'title'=>'Telefone2'],
            'regiao' => ['name' => 'regiao', 'data' => 'regiao', 'title'=>'Região'],
            'cidade' => ['name' => 'cidade', 'data' => 'cidade', 'title'=>'Cidade'],
            'no_diocese' => ['name' => 'no_diocese', 'data' => 'no_diocese', 'title'=>'Diocese'],
            'no_paroquia' => ['name' => 'no_paroquia', 'data' => 'no_paroquia', 'title'=>'Paróquia'],
            'cmd' => ['name' => 'cmd', 'data' => 'cmd', 'title'=>'Com'],
            'no_etapa' => ['name' => 'no_etapa', 'data' => 'no_etapa', 'title'=>'Etapa'],
            'no_equipe' => ['name' => 'no_equipe', 'data' => 'no_equipe', 'title'=>'Equipe'],
            'no_responsavel' => ['name' => 'no_responsavel', 'data' => 'no_responsavel', 'title'=>'Responsável'],
            'no_carisma' => ['name' => 'no_carisma', 'data' => 'no_carisma', 'title'=>'Carisma'],
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'relatorio_membrosdatatable_' . time();
    }
}