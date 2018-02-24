<?php

namespace App\DataTables;

use App\Models\Acolhida;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class AcolhidaDataTable extends DataTable
{
    
protected $convivencia;

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
        
        //return $model->newQuery();
        return $model->where('convivencia_id',$this->convivencia )->select('acolhidas.*');

        //$query = Acolhida::where('convivencia_id',$this->convivencia )->select('acolhidas.*');
        //return $this->applyScopes($query);

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
            'is_ativo' => ['name' => 'is_ativo', 'data' => 'is_ativo', 'title'=>'Ativo'],
            'is_conjuge' => ['name' => 'is_conjuge', 'data' => 'is_conjuge', 'title'=>'Conjuge'],
            'membro_id' => ['name' => 'membro_id', 'data' => 'membro_id', 'title'=>'Membro'],
            'convivencia_id' => ['name' => 'convivencia_id', 'data' => 'convivencia_id', 'title'=>'Convivencia'],
            'tipo_translado_id' => ['name' => 'tipo_translado_id', 'data' => 'tipo_translado_id', 'title'=>'Translado'],
            'acolhida_extra_id' => ['name' => 'acolhida_extra_id', 'data' => 'acolhida_extra_id', 'title'=>'Acolhida'],
            'dt_chegada' => ['name' => 'dt_chegada', 'data' => 'dt_chegada', 'title'=>'Data Chegada'],
            'nu_hora_chegada' => ['name' => 'nu_hora_chegada', 'data' => 'nu_hora_chegada', 'title'=>'Hora Chegada'],
            'nu_voo_chegada' => ['name' => 'nu_voo_chegada', 'data' => 'nu_voo_chegada', 'title'=>'Vôo chegada'],
            'dt_saida' => ['name' => 'dt_saida', 'data' => 'dt_saida', 'title'=>'Data saída'],
            'nu_hora_saida' => ['name' => 'nu_hora_saida', 'data' => 'nu_hora_saida', 'title'=>'Hora saída'],
            'nu_voo_saida' => ['name' => 'nu_voo_saida', 'data' => 'nu_voo_saida', 'title'=>'Vôo saída'],
            'no_local_chegada' => ['name' => 'no_local_chegada', 'data' => 'no_local_chegada', 'title'=>'Local Chegada'],
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
        return 'acolhidasdatatable_' . time();
    }
}