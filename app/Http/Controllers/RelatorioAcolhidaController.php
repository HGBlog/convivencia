<?php

namespace App\Http\Controllers;

use App\DataTables\RelatorioAcolhidaDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateRelatorioAcolhidaRequest;
use App\Http\Requests\UpdateRelatorioAcolhidaRequest;
use App\Repositories\RelatorioAcolhidaRepository;
use Illuminate\Http\Request;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use App\Models\Convivencia;
use Prettus\Repository\Criteria\RequestCriteria;

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
            $convivencias = Convivencia::where('is_ativo', true)->orderBy('dt_inicio')->get();
            return view('relatorio_acolhidas.relatorio_acolhidas')->with('convivencias', $convivencias);
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

    public function gera_relatorio_acolhidas(RelatorioAcolhidaDataTable $relatorioAcolhidaDataTable, Request $request)
        {
            $convivencia_id = $request->convivencia_id;
            return $relatorioAcolhidaDataTable->forConvivencia($convivencia_id)->render('relatorio_acolhidas.index');
        }
}
