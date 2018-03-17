<?php

namespace App\Http\Controllers;

use App\DataTables\RelatorioAcolhidaTerminoDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateRelatorioAcolhidaTerminoRequest;
use App\Http\Requests\UpdateRelatorioAcolhidaTerminoRequest;
use App\Repositories\RelatorioAcolhidaTerminoRepository;
use Illuminate\Http\Request;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use App\Models\Convivencia;
use Prettus\Repository\Criteria\RequestCriteria;

class RelatorioAcolhidaTerminoController extends AppBaseController
{
    /** @var  RelatorioAcolhidaRepository */
    private $relatorioAcolhidaTerminoRepository;

    public function __construct(RelatorioAcolhidaTerminoRepository $relatorioAcolhidaTerminoRepo)
    {
        $this->relatorioAcolhidaTerminoRepository = $relatorioAcolhidaTerminoRepo;
    }

    /**
     * Display a listing of the RelatorioAcolhida.
     *
     * @param RelatorioAcolhidaDataTable $relatorioAcolhidaDataTable
     * @return Response
     */
    public function index(RelatorioAcolhidaTerminoDataTable $relatorioAcolhidaTerminoDataTable)
    {
            $convivencias = Convivencia::where('is_ativo', true)->orderBy('dt_inicio')->get();
            return view('relatorio_acolhidas_termino.relatorio_acolhidas_termino')->with('convivencias', $convivencias);
    }

    public function gera_relatorio_acolhidas_termino(RelatorioAcolhidaTerminoDataTable $relatorioAcolhidaTerminoDataTable, Request $request)
        {
            $convivencia_id = $request->convivencia_id;
            return $relatorioAcolhidaTerminoDataTable->forConvivencia($convivencia_id)->render('relatorio_acolhidas_termino.index');
        }
}
