<?php

namespace App\Http\Controllers;

use App\DataTables\RelatorioTransladoTerminoDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateRelatorioTransladoTerminoRequest;
use App\Http\Requests\UpdateRelatorioTransladoTerminoRequest;
use App\Repositories\RelatorioTransladoTerminoRepository;
use Illuminate\Http\Request;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use App\Models\Convivencia;
use Prettus\Repository\Criteria\RequestCriteria;

class RelatorioTransladoTerminoController extends AppBaseController
{
    /** @var  RelatorioTransladoRepository */
    private $relatorioTransladoTerminoRepository;

    public function __construct(RelatorioTransladoTerminoRepository $relatorioTransladoTerminoRepo)
    {
        $this->relatorioTransladoTerminoRepository = $relatorioTransladoTerminoRepo;
    }

    /**
     * Display a listing of the RelatorioTranslado.
     *
     * @param RelatorioTransladoDataTable $relatorioTransladoDataTable
     * @return Response
     */
    public function index(RelatorioTransladoTerminoDataTable $relatorioTransladoTerminoDataTable)
    {
            $convivencias = Convivencia::where('is_ativo', true)->orderBy('dt_inicio')->get();
            return view('relatorio_translados_termino.relatorio_translados_termino')->with('convivencias', $convivencias);
    }

    public function gera_relatorio_translados_termino(RelatorioTransladoTerminoDataTable $relatorioTransladoTerminoDataTable, Request $request)
        {
            $convivencia_id = $request->convivencia_id;
            return $relatorioTransladoTerminoDataTable->forConvivencia($convivencia_id)->render('relatorio_translados_termino.index');
        }
}
