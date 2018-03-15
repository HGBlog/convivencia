<?php

namespace App\Http\Controllers;

use App\DataTables\RelatorioAcolhidaDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateRelatorioAcolhidaRequest;
use App\Http\Requests\UpdateRelatorioAcolhidaRequest;
use App\Repositories\RelatorioAcolhidaRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class RelatorioAcolhidaController extends AppBaseController
{
    /** @var  RelatorioAcolhidaRepository */
    private $relatorioAcolhidaRepository;

    public function __construct(RelatorioAcolhidaRepository $relatorioAcolhidaRepo)
    {
        $this->relatorioAcolhidaRepository = $relatorioAcolhidaRepo;
    }

    /**
     * Display a listing of the RelatorioAcolhida.
     *
     * @param RelatorioAcolhidaDataTable $relatorioAcolhidaDataTable
     * @return Response
     */
    public function index(RelatorioAcolhidaDataTable $relatorioAcolhidaDataTable)
    {
        return $relatorioAcolhidaDataTable->render('relatorio_acolhidas.index');
    }

    /**
     * Show the form for creating a new RelatorioAcolhida.
     *
     * @return Response
     */
    public function create()
    {
        return view('relatorio_acolhidas.create');
    }

    /**
     * Store a newly created RelatorioAcolhida in storage.
     *
     * @param CreateRelatorioAcolhidaRequest $request
     *
     * @return Response
     */
    public function store(CreateRelatorioAcolhidaRequest $request)
    {
        $input = $request->all();

        $relatorioAcolhida = $this->relatorioAcolhidaRepository->create($input);

        Flash::success('Relatorio Acolhida saved successfully.');

        return redirect(route('relatorioAcolhidas.index'));
    }

    /**
     * Display the specified RelatorioAcolhida.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $relatorioAcolhida = $this->relatorioAcolhidaRepository->findWithoutFail($id);

        if (empty($relatorioAcolhida)) {
            Flash::error('Relatorio Acolhida not found');

            return redirect(route('relatorioAcolhidas.index'));
        }

        return view('relatorio_acolhidas.show')->with('relatorioAcolhida', $relatorioAcolhida);
    }

    /**
     * Show the form for editing the specified RelatorioAcolhida.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $relatorioAcolhida = $this->relatorioAcolhidaRepository->findWithoutFail($id);

        if (empty($relatorioAcolhida)) {
            Flash::error('Relatorio Acolhida not found');

            return redirect(route('relatorioAcolhidas.index'));
        }

        return view('relatorio_acolhidas.edit')->with('relatorioAcolhida', $relatorioAcolhida);
    }

    /**
     * Update the specified RelatorioAcolhida in storage.
     *
     * @param  int              $id
     * @param UpdateRelatorioAcolhidaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRelatorioAcolhidaRequest $request)
    {
        $relatorioAcolhida = $this->relatorioAcolhidaRepository->findWithoutFail($id);

        if (empty($relatorioAcolhida)) {
            Flash::error('Relatorio Acolhida not found');

            return redirect(route('relatorioAcolhidas.index'));
        }

        $relatorioAcolhida = $this->relatorioAcolhidaRepository->update($request->all(), $id);

        Flash::success('Relatorio Acolhida updated successfully.');

        return redirect(route('relatorioAcolhidas.index'));
    }

    /**
     * Remove the specified RelatorioAcolhida from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $relatorioAcolhida = $this->relatorioAcolhidaRepository->findWithoutFail($id);

        if (empty($relatorioAcolhida)) {
            Flash::error('Relatorio Acolhida not found');

            return redirect(route('relatorioAcolhidas.index'));
        }

        $this->relatorioAcolhidaRepository->delete($id);

        Flash::success('Relatorio Acolhida deleted successfully.');

        return redirect(route('relatorioAcolhidas.index'));
    }

    public function relatorio_acolhidas(Request $request)
        {
            //$this->acolhidaRepository->pushCriteria(new RequestCriteria($request));
            //$acolhidas = $this->acolhidaRepository->all();
            $convivencias = Convivencia::where('is_ativo', true)->get();
            //$convivencia_selecionada = $this->convivenciaRepository->findWithoutFail($id);
            if(empty($request->convivencia_id)) {
                return view('acolhidas.relatorio_acolhidas_branco')->with('convivencias', $convivencias);
            } else {
            //dd($convivencias);
                return view('acolhidas.relatorio_acolhidas')->with('convivencias', $convivencias)->with('acolhidas', $acolhidas); 
            }
        }
    public function gera_relatorio_acolhidas(AcolhidaDataTable $acolhidaDataTable, Request $request)
        {
            $convivencias = Convivencia::where('is_ativo', true)->get();
            $convivencia_id = $request->convivencia_id;
            $membro = new Membro;
            $acolhida_extra = new AcolhidaExtra;
            $tipo_translado = new TipoTranslado;
            $convivencia_id = $request->convivencia_id;
            //$conv = new Convivencia;
            //dd($convivencia_id);
            return $acolhidaDataTable->forConvivencia($convivencia_id)->render('acolhidas.index', ['convivencia', '$convivencia_id']);
        }
    public function seleciona_convivencia(Request $request)
        {
            //$this->convivenciaRepository->pushCriteria(new RequestCriteria($request));
            //$convivencias = $this->convivenciaRepository->all();
            //return view('convivencias.lista_ativas')
            //    ->with('convivencias', $convivencias);
            //$convivencia_id = $request->input('convivencia_id');
            $convivencia_id = $request->convivencia_id;
         
            return redirect(route('convivencia_inscricao', $convivencia_id));    
        }
}
