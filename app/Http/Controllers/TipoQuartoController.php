<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTipoQuartoRequest;
use App\Http\Requests\UpdateTipoQuartoRequest;
use App\Repositories\TipoQuartoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TipoQuartoController extends AppBaseController
{
    /** @var  TipoQuartoRepository */
    private $tipoQuartoRepository;

    public function __construct(TipoQuartoRepository $tipoQuartoRepo)
    {
        $this->tipoQuartoRepository = $tipoQuartoRepo;
    }

    /**
     * Display a listing of the TipoQuarto.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tipoQuartoRepository->pushCriteria(new RequestCriteria($request));
        $tipoQuartos = $this->tipoQuartoRepository->all();

        return view('tipo_quartos.index')
            ->with('tipoQuartos', $tipoQuartos);
    }

    /**
     * Show the form for creating a new TipoQuarto.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipo_quartos.create');
    }

    /**
     * Store a newly created TipoQuarto in storage.
     *
     * @param CreateTipoQuartoRequest $request
     *
     * @return Response
     */
    public function store(CreateTipoQuartoRequest $request)
    {
        $input = $request->all();

        $tipoQuarto = $this->tipoQuartoRepository->create($input);

        Flash::success('Tipo Quarto saved successfully.');

        return redirect(route('tipoQuartos.index'));
    }

    /**
     * Display the specified TipoQuarto.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoQuarto = $this->tipoQuartoRepository->findWithoutFail($id);

        if (empty($tipoQuarto)) {
            Flash::error('Tipo Quarto not found');

            return redirect(route('tipoQuartos.index'));
        }

        return view('tipo_quartos.show')->with('tipoQuarto', $tipoQuarto);
    }

    /**
     * Show the form for editing the specified TipoQuarto.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoQuarto = $this->tipoQuartoRepository->findWithoutFail($id);

        if (empty($tipoQuarto)) {
            Flash::error('Tipo Quarto not found');

            return redirect(route('tipoQuartos.index'));
        }

        return view('tipo_quartos.edit')->with('tipoQuarto', $tipoQuarto);
    }

    /**
     * Update the specified TipoQuarto in storage.
     *
     * @param  int              $id
     * @param UpdateTipoQuartoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipoQuartoRequest $request)
    {
        $tipoQuarto = $this->tipoQuartoRepository->findWithoutFail($id);

        if (empty($tipoQuarto)) {
            Flash::error('Tipo Quarto not found');

            return redirect(route('tipoQuartos.index'));
        }

        $tipoQuarto = $this->tipoQuartoRepository->update($request->all(), $id);

        Flash::success('Tipo Quarto updated successfully.');

        return redirect(route('tipoQuartos.index'));
    }

    /**
     * Remove the specified TipoQuarto from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoQuarto = $this->tipoQuartoRepository->findWithoutFail($id);

        if (empty($tipoQuarto)) {
            Flash::error('Tipo Quarto not found');

            return redirect(route('tipoQuartos.index'));
        }

        $this->tipoQuartoRepository->delete($id);

        Flash::success('Tipo Quarto deleted successfully.');

        return redirect(route('tipoQuartos.index'));
    }
}
