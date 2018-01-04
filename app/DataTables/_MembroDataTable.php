<?php

namespace App\DataTables;

use App\Models\Membro;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class MembroDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'membros.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Post $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Membro $model)
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
            'no_usuario' => ['name' => 'no_usuario', 'data' => 'no_usuario'],
            'no_pais' => ['name' => 'no_pais', 'data' => 'no_pais'],
            'no_email' => ['name' => 'no_email', 'data' => 'no_email'],
            'no_sexo' => ['name' => 'no_sexo', 'data' => 'no_sexo'],
            'co_telefone_pais' => ['name' => 'co_telefone_pais', 'data' => 'co_telefone_pais'],
            'nu_telefone' => ['name' => 'nu_telefone', 'data' => 'nu_telefone'],
            'no_diocese' => ['name' => 'no_diocese', 'data' => 'no_diocese'],
            'no_cidade' => ['name' => 'no_cidade', 'data' => 'no_cidade'],
            'no_paroquia' => ['name' => 'no_paroquia', 'data' => 'no_paroquia'],
            'nu_comunidade' => ['name' => 'nu_comunidade', 'data' => 'nu_comunidade'],
            'nu_ano_inicio_caminho' => ['name' => 'nu_ano_inicio_caminho', 'data' => 'nu_ano_inicio_caminho']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'membrosdatatable_' . time();
    }
}