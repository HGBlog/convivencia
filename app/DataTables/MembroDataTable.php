<?php

namespace App\DataTables;

use App\Models\Membro;
use App\Models\MacroRegiao;
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
        return $model
            ->select('membros.*', 'macro_regiaos.no_macro_regiao' )
            ->join('macro_regiaos', 'membros.mregiao_id', '=', 'macro_regiaos.id');
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
            ->addAction(['width' => '80px', 'title'=>'Ação'])
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
        $macroregiao = MacroRegiao::where('id', 'mregiao_id');

        return [
            'no_usuario' => ['name' => 'no_usuario', 'data' => 'no_usuario', 'title'=>'Nome'],
            'no_conjuge' => ['name' => 'no_conjuge', 'data' => 'no_conjuge', 'title'=>'Cônjuge'],
            'no_macro_regiao' => ['name' => 'no_macro_regiao', 'data' => 'no_macro_regiao', 'title'=>'Macro-região'],
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