<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTipoEquipeRequest;
use App\Http\Requests\UpdateTipoEquipeRequest;
use App\Repositories\TipoEquipeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TipoEquipeController extends AppBaseController
{
    /** @var  TipoEquipeRepository */
    private $tipoEquipeRepository;

    public function __construct(TipoEquipeRepository $tipoEquipeRepo)
    {
        $this->tipoEquipeRepository = $tipoEquipeRepo;
    }

    /**
     * Display a listing of the TipoEquipe.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tipoEquipeRepository->pushCriteria(new RequestCriteria($request));
        $tipoEquipes = $this->tipoEquipeRepository->all();

        return view('tipo_equipes.index')
            ->with('tipoEquipes', $tipoEquipes);
    }

    /**
     * Show the form for creating a new TipoEquipe.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipo_equipes.create');
    }

    /**
     * Store a newly created TipoEquipe in storage.
     *
     * @param CreateTipoEquipeRequest $request
     *
     * @return Response
     */
    public function store(CreateTipoEquipeRequest $request)
    {
        $input = $request->all();

        $tipoEquipe = $this->tipoEquipeRepository->create($input);

        Flash::success('Tipo Equipe saved successfully.');

        return redirect(route('tipoEquipes.index'));
    }

    /**
     * Display the specified TipoEquipe.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoEquipe = $this->tipoEquipeRepository->findWithoutFail($id);

        if (empty($tipoEquipe)) {
            Flash::error('Tipo Equipe not found');

            return redirect(route('tipoEquipes.index'));
        }

        return view('tipo_equipes.show')->with('tipoEquipe', $tipoEquipe);
    }

    /**
     * Show the form for editing the specified TipoEquipe.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoEquipe = $this->tipoEquipeRepository->findWithoutFail($id);

        if (empty($tipoEquipe)) {
            Flash::error('Tipo Equipe not found');

            return redirect(route('tipoEquipes.index'));
        }

        return view('tipo_equipes.edit')->with('tipoEquipe', $tipoEquipe);
    }

    /**
     * Update the specified TipoEquipe in storage.
     *
     * @param  int              $id
     * @param UpdateTipoEquipeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipoEquipeRequest $request)
    {
        $tipoEquipe = $this->tipoEquipeRepository->findWithoutFail($id);

        if (empty($tipoEquipe)) {
            Flash::error('Tipo Equipe not found');

            return redirect(route('tipoEquipes.index'));
        }

        $tipoEquipe = $this->tipoEquipeRepository->update($request->all(), $id);

        Flash::success('Tipo Equipe updated successfully.');

        return redirect(route('tipoEquipes.index'));
    }

    /**
     * Remove the specified TipoEquipe from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoEquipe = $this->tipoEquipeRepository->findWithoutFail($id);

        if (empty($tipoEquipe)) {
            Flash::error('Tipo Equipe not found');

            return redirect(route('tipoEquipes.index'));
        }

        $this->tipoEquipeRepository->delete($id);

        Flash::success('Tipo Equipe deleted successfully.');

        return redirect(route('tipoEquipes.index'));
    }
}
