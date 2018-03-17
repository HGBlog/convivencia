<?php

namespace App\Http\Controllers;

use App\DataTables\RelatorioInscricoesDataTable;
use Illuminate\Http\Request;
use App\Http\Requests\CreateRelatorioInscricoesRequest;
use App\Http\Requests\UpdateRelatorioInscricoesRequest;
use App\Repositories\RelatorioInscricoesRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use App\Models\Convivencia;
use Prettus\Repository\Criteria\RequestCriteria;



class RelatorioInscricoesController extends AppBaseController
{
    /** @var  RelatorioInscricoesRepository */
    private $relatorioInscricoesRepository;

    public function __construct(RelatorioInscricoesRepository $relatorioInscricoesRepo)
    {
        $this->relatorioInscricoesRepository = $relatorioInscricoesRepo;
    }

    /**
     * Display a listing of the RelatorioInscricoes.
     *
     * @param RelatorioInscricoesDataTable $relatorioInscricoesDataTable
     * @return Response
     */
    public function index(RelatorioInscricoesDataTable $relatorioInscricoesDataTable)
    {
            $convivencias = Convivencia::where('is_ativo', true)->orderBy('dt_inicio')->get();
            return view('relatorio_inscricoes.relatorio_inscricoes')->with('convivencias', $convivencias);
    }

    /**
     * Show the form for creating a new RelatorioInscricoes.
     *
     * @return Response
     */
    public function create()
    {
        return view('relatorio_inscricoes.create');
    }

    /**
     * Store a newly created RelatorioInscricoes in storage.
     *
     * @param CreateRelatorioInscricoesRequest $request
     *
     * @return Response
     */
    public function store(CreateRelatorioInscricoesRequest $request)
    {
        $input = $request->all();

        $relatorioInscricoes = $this->relatorioInscricoesRepository->create($input);

        Flash::success('Relatorio Inscricoes saved successfully.');

        return redirect(route('relatorioInscricoes.index'));
    }

    /**
     * Display the specified RelatorioInscricoes.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $relatorioInscricoes = $this->relatorioInscricoesRepository->findWithoutFail($id);

        if (empty($relatorioInscricoes)) {
            Flash::error('Relatorio Inscricoes not found');

            return redirect(route('relatorioInscricoes.index'));
        }

        return view('relatorio_inscricoes.show')->with('relatorioInscricoes', $relatorioInscricoes);
    }

    /**
     * Show the form for editing the specified RelatorioInscricoes.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $relatorioInscricoes = $this->relatorioInscricoesRepository->findWithoutFail($id);

        if (empty($relatorioInscricoes)) {
            Flash::error('Relatorio Inscricoes not found');

            return redirect(route('relatorioInscricoes.index'));
        }

        return view('relatorio_inscricoes.edit')->with('relatorioInscricoes', $relatorioInscricoes);
    }

    /**
     * Update the specified RelatorioInscricoes in storage.
     *
     * @param  int              $id
     * @param UpdateRelatorioInscricoesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRelatorioInscricoesRequest $request)
    {
        $relatorioInscricoes = $this->relatorioInscricoesRepository->findWithoutFail($id);

        if (empty($relatorioInscricoes)) {
            Flash::error('Relatorio Inscricoes not found');

            return redirect(route('relatorioInscricoes.index'));
        }

        $relatorioInscricoes = $this->relatorioInscricoesRepository->update($request->all(), $id);

        Flash::success('Relatorio Inscricoes updated successfully.');

        return redirect(route('relatorioInscricoes.index'));
    }

    /**
     * Remove the specified RelatorioInscricoes from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $relatorioInscricoes = $this->relatorioInscricoesRepository->findWithoutFail($id);

        if (empty($relatorioInscricoes)) {
            Flash::error('Relatorio Inscricoes not found');

            return redirect(route('relatorioInscricoes.index'));
        }

        $this->relatorioInscricoesRepository->delete($id);

        Flash::success('Relatorio Inscricoes deleted successfully.');

        return redirect(route('relatorioInscricoes.index'));
    }

    public function gera_relatorio_inscricoes(RelatorioInscricoesDataTable $relatorioInscricoesDataTable, Request $request)
    {
        $convivencia_id = $request->convivencia_id;
        return $relatorioInscricoesDataTable->forConvivencia($convivencia_id)->render('relatorio_inscricoes.index');
    }

}
