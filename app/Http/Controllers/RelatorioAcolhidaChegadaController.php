<?php

namespace App\Http\Controllers;

use App\DataTables\RelatorioAcolhidaChegadaDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateRelatorioAcolhidaChegadaRequest;
use App\Http\Requests\UpdateRelatorioAcolhidaChegadaRequest;
use App\Repositories\RelatorioAcolhidaChegadaRepository;
use Illuminate\Http\Request;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use App\Models\Convivencia;
use Prettus\Repository\Criteria\RequestCriteria;

class RelatorioAcolhidaChegadaController extends AppBaseController
{
    /** @var  RelatorioAcolhidaRepository */
    private $relatorioAcolhidaChegadaRepository;

    public function __construct(RelatorioAcolhidaChegadaRepository $relatorioAcolhidaChegadaRepo)
    {
        $this->relatorioAcolhidaChegadaRepository = $relatorioAcolhidaChegadaRepo;
    }

    /**
     * Display a listing of the RelatorioAcolhida.
     *
     * @param RelatorioAcolhidaDataTable $relatorioAcolhidaDataTable
     * @return Response
     */
    public function index(RelatorioAcolhidaChegadaDataTable $relatorioAcolhidaChegadaDataTable)
    {
            $convivencias = Convivencia::where('is_ativo', true)->orderBy('dt_inicio')->get();
            return view('relatorio_acolhidas_chegada.relatorio_acolhidas_chegada')->with('convivencias', $convivencias);
    }

    public function gera_relatorio_acolhidas_chegada(RelatorioAcolhidaChegadaDataTable $relatorioAcolhidaChegadaDataTable, Request $request)
        {
            $convivencia_id = $request->convivencia_id;
            return $relatorioAcolhidaChegadaDataTable->forConvivencia($convivencia_id)->render('relatorio_acolhidas_chegada.index');
        }
}
