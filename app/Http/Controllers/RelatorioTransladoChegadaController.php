<?php

namespace App\Http\Controllers;

use App\DataTables\RelatorioTransladoChegadaDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateRelatorioTransladoChegadaRequest;
use App\Http\Requests\UpdateRelatorioTransladoChegadaRequest;
use App\Repositories\RelatorioTransladoChegadaRepository;
use Illuminate\Http\Request;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use App\Models\Convivencia;
use Prettus\Repository\Criteria\RequestCriteria;

class RelatorioTransladoChegadaController extends AppBaseController
{
    /** @var  RelatorioTransladoRepository */
    private $relatorioTransladoChegadaRepository;

    public function __construct(RelatorioTransladoChegadaRepository $relatorioTransladoChegadaRepo)
    {
        $this->relatorioTransladoChegadaRepository = $relatorioTransladoChegadaRepo;
    }

    /**
     * Display a listing of the RelatorioTranslado.
     *
     * @param RelatorioTransladoDataTable $relatorioTransladoDataTable
     * @return Response
     */
    public function index(RelatorioTransladoChegadaDataTable $relatorioTransladoChegadaDataTable)
    {
            $convivencias = Convivencia::where('is_ativo', true)->orderBy('dt_inicio')->get();
            return view('relatorio_translados_chegada.relatorio_translados_chegada')->with('convivencias', $convivencias);
    }

    public function gera_relatorio_translados_chegada(RelatorioTransladoChegadaDataTable $relatorioTransladoChegadaDataTable, Request $request)
        {
            $convivencia_id = $request->convivencia_id;
            return $relatorioTransladoChegadaDataTable->forConvivencia($convivencia_id)->render('relatorio_translados_chegada.index');
        }
}
