<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTipoCarismaRequest;
use App\Http\Requests\UpdateTipoCarismaRequest;
use App\Repositories\TipoCarismaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TipoCarismaController extends AppBaseController
{
    /** @var  TipoCarismaRepository */
    private $tipoCarismaRepository;

    public function __construct(TipoCarismaRepository $tipoCarismaRepo)
    {
        $this->tipoCarismaRepository = $tipoCarismaRepo;
    }

    /**
     * Display a listing of the TipoCarisma.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tipoCarismaRepository->pushCriteria(new RequestCriteria($request));
        $tipoCarismas = $this->tipoCarismaRepository->all();

        return view('tipo_carismas.index')
            ->with('tipoCarismas', $tipoCarismas);
    }

    /**
     * Show the form for creating a new TipoCarisma.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipo_carismas.create');
    }

    /**
     * Store a newly created TipoCarisma in storage.
     *
     * @param CreateTipoCarismaRequest $request
     *
     * @return Response
     */
    public function store(CreateTipoCarismaRequest $request)
    {
        $input = $request->all();

        $tipoCarisma = $this->tipoCarismaRepository->create($input);

        Flash::success('Tipo Carisma saved successfully.');

        return redirect(route('tipoCarismas.index'));
    }

    /**
     * Display the specified TipoCarisma.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoCarisma = $this->tipoCarismaRepository->findWithoutFail($id);

        if (empty($tipoCarisma)) {
            Flash::error('Tipo Carisma not found');

            return redirect(route('tipoCarismas.index'));
        }

        return view('tipo_carismas.show')->with('tipoCarisma', $tipoCarisma);
    }

    /**
     * Show the form for editing the specified TipoCarisma.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoCarisma = $this->tipoCarismaRepository->findWithoutFail($id);

        if (empty($tipoCarisma)) {
            Flash::error('Tipo Carisma not found');

            return redirect(route('tipoCarismas.index'));
        }

        return view('tipo_carismas.edit')->with('tipoCarisma', $tipoCarisma);
    }

    /**
     * Update the specified TipoCarisma in storage.
     *
     * @param  int              $id
     * @param UpdateTipoCarismaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipoCarismaRequest $request)
    {
        $tipoCarisma = $this->tipoCarismaRepository->findWithoutFail($id);

        if (empty($tipoCarisma)) {
            Flash::error('Tipo Carisma not found');

            return redirect(route('tipoCarismas.index'));
        }

        $tipoCarisma = $this->tipoCarismaRepository->update($request->all(), $id);

        Flash::success('Tipo Carisma updated successfully.');

        return redirect(route('tipoCarismas.index'));
    }

    /**
     * Remove the specified TipoCarisma from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoCarisma = $this->tipoCarismaRepository->findWithoutFail($id);

        if (empty($tipoCarisma)) {
            Flash::error('Tipo Carisma not found');

            return redirect(route('tipoCarismas.index'));
        }

        $this->tipoCarismaRepository->delete($id);

        Flash::success('Tipo Carisma deleted successfully.');

        return redirect(route('tipoCarismas.index'));
    }
}
