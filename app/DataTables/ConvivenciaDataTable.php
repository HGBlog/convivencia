<?php

namespace App\DataTables;

use App\Models\Convivencia;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class ConvivenciaDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'convivencias.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Post $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Convivencia $model)
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
            ->addAction(['width' => '80px'])
            ->parameters([
                'dom'     => 'Bfrtip',
                'order'   => [[0, 'desc']],
                'buttons' => [
                    'create',
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
            'is_ativo' => ['name' => 'is_ativo', 'data' => 'is_ativo'],
            'no_nome' => ['name' => 'no_nome', 'data' => 'no_nome'],
            'no_local' => ['name' => 'no_local', 'data' => 'no_local'],
            'nu_telefone' => ['name' => 'nu_telefone', 'data' => 'nu_telefone'],
            'no_observacoes' => ['name' => 'no_observacoes', 'data' => 'no_observacoes'],
            'dt_inicio' => ['name' => 'dt_inicio', 'data' => 'dt_inicio'],
            'dt_fim' => ['name' => 'dt_fim', 'data' => 'dt_fim'],
            'dt_inicio_inscricao' => ['name' => 'dt_inicio_inscricao', 'data' => 'dt_inicio_inscricao'],
            'dt_fim_inscricao' => ['name' => 'dt_fim_inscricao', 'data' => 'dt_fim_inscricao']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'convivenciasdatatable_' . time();
    }
}