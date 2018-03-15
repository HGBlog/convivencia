<?php

namespace App\DataTables;

use App\Models\RelatorioAcolhida;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class RelatorioAcolhidaDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'relatorio_acolhidas.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Post $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(RelatorioAcolhida $model)
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
                'order'   => [[0, 'desc']],
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
            'convivencia_id' => ['name' => 'convivencia_id', 'data' => 'convivencia_id', 'title'=>'Conv'],
            'no_usuario' => ['name' => 'no_usuario', 'data' => 'no_usuario', 'title'=>'Nome'],
            'no_conjuge' => ['name' => 'no_conjuge', 'data' => 'no_conjuge', 'title'=>'Cônjuge'],
            
            'no_acolhida_extra' => ['name' => 'no_acolhida_extra', 'data' => 'no_acolhida_extra', 'title'=>'Acolhida'],
            'tipo_translado' => ['name' => 'tipo_translado', 'data' => 'tipo_translado', 'title'=>'Translado'],
            'dt_chegada' => ['name' => 'dt_chegada', 'data' => 'dt_chegada', 'title'=>'Chegada'],
            'nu_hora_chegada' => ['name' => 'nu_hora_chegada', 'data' => 'nu_hora_chegada', 'title'=>'Hora Chegada'],
            'nu_voo_chegada' => ['name' => 'nu_voo_chegada', 'data' => 'nu_voo_chegada', 'title'=>'Vôo chegada'],
            'no_local_chegada' => ['name' => 'no_local_chegada', 'data' => 'no_local_chegada', 'title'=>'Local'],
            'dt_saida' => ['name' => 'dt_saida', 'data' => 'dt_saida', 'title'=>'Saída'],
            'nu_hora_saida' => ['name' => 'nu_hora_saida', 'data' => 'nu_hora_saida', 'title'=>'Hora saída'],
            'nu_voo_saida' => ['name' => 'nu_voo_saida', 'data' => 'nu_voo_saida', 'title'=>'Vôo saída'],
            'no_local_saida' => ['name' => 'no_local_saida', 'data' => 'no_local_saida', 'title'=>'Local Saída'],
            'no_observacoes' => ['name' => 'no_observacoes', 'data' => 'no_observacoes', 'title'=>'Observações']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'relatorio_acolhidasdatatable_' . time();
    }
}