<?php

namespace App\Http\Controllers;

use App\DataTables\RelatorioMembrosDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateRelatorioMembrosRequest;
use App\Http\Requests\UpdateRelatorioMembrosRequest;
use App\Repositories\RelatorioMembrosRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class RelatorioMembrosController extends AppBaseController
{
    /** @var  RelatorioMembrosRepository */
    private $relatorioMembrosRepository;

    public function __construct(RelatorioMembrosRepository $relatorioMembrosRepo)
    {
        $this->relatorioMembrosRepository = $relatorioMembrosRepo;
    }

    /**
     * Display a listing of the RelatorioMembros.
     *
     * @param RelatorioMembrosDataTable $relatorioMembrosDataTable
     * @return Response
     */
    public function index(RelatorioMembrosDataTable $relatorioMembrosDataTable)
    {
        return $relatorioMembrosDataTable->render('relatorio_membros.index');
    }

    /**
     * Show the form for creating a new RelatorioMembros.
     *
     * @return Response
     */
    public function create()
    {
        return view('relatorio_membros.create');
    }

    /**
     * Store a newly created RelatorioMembros in storage.
     *
     * @param CreateRelatorioMembrosRequest $request
     *
     * @return Response
     */
    public function store(CreateRelatorioMembrosRequest $request)
    {
        $input = $request->all();

        $relatorioMembros = $this->relatorioMembrosRepository->create($input);

        Flash::success('Relatorio Membros saved successfully.');

        return redirect(route('relatorioMembros.index'));
    }

    /**
     * Display the specified RelatorioMembros.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $relatorioMembros = $this->relatorioMembrosRepository->findWithoutFail($id);

        if (empty($relatorioMembros)) {
            Flash::error('Relatorio Membros not found');

            return redirect(route('relatorioMembros.index'));
        }

        return view('relatorio_membros.show')->with('relatorioMembros', $relatorioMembros);
    }

    /**
     * Show the form for editing the specified RelatorioMembros.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $relatorioMembros = $this->relatorioMembrosRepository->findWithoutFail($id);

        if (empty($relatorioMembros)) {
            Flash::error('Relatorio Membros not found');

            return redirect(route('relatorioMembros.index'));
        }

        return view('relatorio_membros.edit')->with('relatorioMembros', $relatorioMembros);
    }

    /**
     * Update the specified RelatorioMembros in storage.
     *
     * @param  int              $id
     * @param UpdateRelatorioMembrosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRelatorioMembrosRequest $request)
    {
        $relatorioMembros = $this->relatorioMembrosRepository->findWithoutFail($id);

        if (empty($relatorioMembros)) {
            Flash::error('Relatorio Membros not found');

            return redirect(route('relatorioMembros.index'));
        }

        $relatorioMembros = $this->relatorioMembrosRepository->update($request->all(), $id);

        Flash::success('Relatorio Membros updated successfully.');

        return redirect(route('relatorioMembros.index'));
    }

    /**
     * Remove the specified RelatorioMembros from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $relatorioMembros = $this->relatorioMembrosRepository->findWithoutFail($id);

        if (empty($relatorioMembros)) {
            Flash::error('Relatorio Membros not found');

            return redirect(route('relatorioMembros.index'));
        }

        $this->relatorioMembrosRepository->delete($id);

        Flash::success('Relatorio Membros deleted successfully.');

        return redirect(route('relatorioMembros.index'));
    }
}
