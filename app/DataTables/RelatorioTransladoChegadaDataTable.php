<?php

namespace App\DataTables;

use App\Models\RelatorioTransladoChegada;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class RelatorioTransladoChegadaDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'relatorio_translados_chegada.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Post $model
     * @return \Illuminate\Database\Eloquent\Builder
     */

    public function query(RelatorioTransladoChegada $model)
    {
        return $model->where('convivencia_id',$this->convivencia )->select('conv.vw_rel_translado_chegada.*');
    }



    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        //$url = 'teste';
        //dd($this->request());
        //if ($this->request()->has("convivencia_id")) {
        //    $url = $url."?convivencia_id=".$this->request()->get("convivencia_id");
        // }
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
            'nu_voo_chegada' => ['name' => 'nu_voo_chegada', 'data' => 'nu_voo_chegada', 'title'=>'Vôo chegada'],
            'no_local_chegada' => ['name' => 'no_local_chegada', 'data' => 'no_local_chegada', 'title'=>'Local'],
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
        return 'relatorio_translados_chegadadatatable_' . time();
    }
}