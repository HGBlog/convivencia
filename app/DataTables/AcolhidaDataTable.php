<?php

namespace App\DataTables;

use App\Models\Acolhida;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class AcolhidaDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'acolhidas.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Post $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Acolhida $model)
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
            'is_conjuge' => ['name' => 'is_conjuge', 'data' => 'is_conjuge'],
            'membro_id' => ['name' => 'membro_id', 'data' => 'membro_id'],
            'convivencia_id' => ['name' => 'convivencia_id', 'data' => 'convivencia_id'],
            'tipo_translado_id' => ['name' => 'tipo_translado_id', 'data' => 'tipo_translado_id'],
            'acolhida_extra_id' => ['name' => 'acolhida_extra_id', 'data' => 'acolhida_extra_id'],
            'dt_chegada' => ['name' => 'dt_chegada', 'data' => 'dt_chegada'],
            'nu_hora_chegada' => ['name' => 'nu_hora_chegada', 'data' => 'nu_hora_chegada'],
            'nu_voo_chegada' => ['name' => 'nu_voo_chegada', 'data' => 'nu_voo_chegada'],
            'dt_saida' => ['name' => 'dt_saida', 'data' => 'dt_saida'],
            'nu_hora_saida' => ['name' => 'nu_hora_saida', 'data' => 'nu_hora_saida'],
            'nu_voo_saida' => ['name' => 'nu_voo_saida', 'data' => 'nu_voo_saida'],
            'no_local_chegada' => ['name' => 'no_local_chegada', 'data' => 'no_local_chegada'],
            'no_local_saida' => ['name' => 'no_local_saida', 'data' => 'no_local_saida'],
            'no_observacoes' => ['name' => 'no_observacoes', 'data' => 'no_observacoes']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'acolhidasdatatable_' . time();
    }
}