<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTipoTransladoRequest;
use App\Http\Requests\UpdateTipoTransladoRequest;
use App\Repositories\TipoTransladoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TipoTransladoController extends AppBaseController
{
    /** @var  TipoTransladoRepository */
    private $tipoTransladoRepository;

    public function __construct(TipoTransladoRepository $tipoTransladoRepo)
    {
        $this->tipoTransladoRepository = $tipoTransladoRepo;
    }

    /**
     * Display a listing of the TipoTranslado.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tipoTransladoRepository->pushCriteria(new RequestCriteria($request));
        $tipoTranslados = $this->tipoTransladoRepository->all();

        return view('tipo_translados.index')
            ->with('tipoTranslados', $tipoTranslados);
    }

    /**
     * Show the form for creating a new TipoTranslado.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipo_translados.create');
    }

    /**
     * Store a newly created TipoTranslado in storage.
     *
     * @param CreateTipoTransladoRequest $request
     *
     * @return Response
     */
    public function store(CreateTipoTransladoRequest $request)
    {
        $input = $request->all();

        $tipoTranslado = $this->tipoTransladoRepository->create($input);

        Flash::success('Tipo Translado saved successfully.');

        return redirect(route('tipoTranslados.index'));
    }

    /**
     * Display the specified TipoTranslado.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoTranslado = $this->tipoTransladoRepository->findWithoutFail($id);

        if (empty($tipoTranslado)) {
            Flash::error('Tipo Translado not found');

            return redirect(route('tipoTranslados.index'));
        }

        return view('tipo_translados.show')->with('tipoTranslado', $tipoTranslado);
    }

    /**
     * Show the form for editing the specified TipoTranslado.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoTranslado = $this->tipoTransladoRepository->findWithoutFail($id);

        if (empty($tipoTranslado)) {
            Flash::error('Tipo Translado not found');

            return redirect(route('tipoTranslados.index'));
        }

        return view('tipo_translados.edit')->with('tipoTranslado', $tipoTranslado);
    }

    /**
     * Update the specified TipoTranslado in storage.
     *
     * @param  int              $id
     * @param UpdateTipoTransladoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipoTransladoRequest $request)
    {
        $tipoTranslado = $this->tipoTransladoRepository->findWithoutFail($id);

        if (empty($tipoTranslado)) {
            Flash::error('Tipo Translado not found');

            return redirect(route('tipoTranslados.index'));
        }

        $tipoTranslado = $this->tipoTransladoRepository->update($request->all(), $id);

        Flash::success('Tipo Translado updated successfully.');

        return redirect(route('tipoTranslados.index'));
    }

    /**
     * Remove the specified TipoTranslado from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoTranslado = $this->tipoTransladoRepository->findWithoutFail($id);

        if (empty($tipoTranslado)) {
            Flash::error('Tipo Translado not found');

            return redirect(route('tipoTranslados.index'));
        }

        $this->tipoTransladoRepository->delete($id);

        Flash::success('Tipo Translado deleted successfully.');

        return redirect(route('tipoTranslados.index'));
    }
}
