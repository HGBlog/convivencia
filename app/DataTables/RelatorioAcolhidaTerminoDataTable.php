<?php

namespace App\DataTables;

use App\Models\RelatorioAcolhidaTermino;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class RelatorioAcolhidaTerminoDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'relatorio_acolhidas_termino.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Post $model
     * @return \Illuminate\Database\Eloquent\Builder
     */

    public function query(RelatorioAcolhidaTermino $model)
    {
        return $model->where('convivencia_id',$this->convivencia )->select('conv.vw_rel_acolhida_termino.*');
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
            'tipo_pessoa' => ['name' => 'tipo_pessoa', 'data' => 'tipo_pessoa', 'title'=>'Tipo Pessoa'],
            'telefone' => ['name' => 'telefone', 'data' => 'telefone', 'title'=>'Telefone'],
            'carisma' => ['name' => 'carisma', 'data' => 'carisma', 'title'=>'Carisma'],
            'equipe' => ['name' => 'equipe', 'data' => 'equipe', 'title'=>'Equipe'],
            //'no_acolhida_extra' => ['name' => 'no_acolhida_extra', 'data' => 'no_acolhida_extra', 'title'=>'Acolhida'],
            //'tipo_translado' => ['name' => 'tipo_translado', 'data' => 'tipo_translado', 'title'=>'Translado'],
            'dt_saida' => ['name' => 'dt_saida', 'data' => 'dt_saida', 'title'=>'Saída'],
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
        return 'relatorio_acolhidas_terminodatatable_' . time();
    }
}