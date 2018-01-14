<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLocalConvivenciaRequest;
use App\Http\Requests\UpdateLocalConvivenciaRequest;
use App\Repositories\LocalConvivenciaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class LocalConvivenciaController extends AppBaseController
{
    /** @var  LocalConvivenciaRepository */
    private $localConvivenciaRepository;

    public function __construct(LocalConvivenciaRepository $localConvivenciaRepo)
    {
        $this->localConvivenciaRepository = $localConvivenciaRepo;
    }

    /**
     * Display a listing of the LocalConvivencia.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->localConvivenciaRepository->pushCriteria(new RequestCriteria($request));
        $localConvivencias = $this->localConvivenciaRepository->all();

        return view('local_convivencias.index')
            ->with('localConvivencias', $localConvivencias);
    }

    /**
     * Show the form for creating a new LocalConvivencia.
     *
     * @return Response
     */
    public function create()
    {
        return view('local_convivencias.create');
    }

    /**
     * Store a newly created LocalConvivencia in storage.
     *
     * @param CreateLocalConvivenciaRequest $request
     *
     * @return Response
     */
    public function store(CreateLocalConvivenciaRequest $request)
    {
        $input = $request->all();

        $localConvivencia = $this->localConvivenciaRepository->create($input);

        Flash::success('Local Convivencia saved successfully.');

        return redirect(route('localConvivencias.index'));
    }

    /**
     * Display the specified LocalConvivencia.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $localConvivencia = $this->localConvivenciaRepository->findWithoutFail($id);

        if (empty($localConvivencia)) {
            Flash::error('Local Convivencia not found');

            return redirect(route('localConvivencias.index'));
        }

        return view('local_convivencias.show')->with('localConvivencia', $localConvivencia);
    }

    /**
     * Show the form for editing the specified LocalConvivencia.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $localConvivencia = $this->localConvivenciaRepository->findWithoutFail($id);

        if (empty($localConvivencia)) {
            Flash::error('Local Convivencia not found');

            return redirect(route('localConvivencias.index'));
        }

        return view('local_convivencias.edit')->with('localConvivencia', $localConvivencia);
    }

    /**
     * Update the specified LocalConvivencia in storage.
     *
     * @param  int              $id
     * @param UpdateLocalConvivenciaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLocalConvivenciaRequest $request)
    {
        $localConvivencia = $this->localConvivenciaRepository->findWithoutFail($id);

        if (empty($localConvivencia)) {
            Flash::error('Local Convivencia not found');

            return redirect(route('localConvivencias.index'));
        }

        $localConvivencia = $this->localConvivenciaRepository->update($request->all(), $id);

        Flash::success('Local Convivencia updated successfully.');

        return redirect(route('localConvivencias.index'));
    }

    /**
     * Remove the specified LocalConvivencia from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $localConvivencia = $this->localConvivenciaRepository->findWithoutFail($id);

        if (empty($localConvivencia)) {
            Flash::error('Local Convivencia not found');

            return redirect(route('localConvivencias.index'));
        }

        $this->localConvivenciaRepository->delete($id);

        Flash::success('Local Convivencia deleted successfully.');

        return redirect(route('localConvivencias.index'));
    }
}
