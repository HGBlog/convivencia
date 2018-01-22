<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRemoverLocalConvivenciaRequest;
use App\Http\Requests\UpdateRemoverLocalConvivenciaRequest;
use App\Repositories\RemoverLocalConvivenciaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class RemoverLocalConvivenciaController extends AppBaseController
{
    /** @var  RemoverLocalConvivenciaRepository */
    private $removerLocalConvivenciaRepository;

    public function __construct(RemoverLocalConvivenciaRepository $removerLocalConvivenciaRepo)
    {
        $this->removerLocalConvivenciaRepository = $removerLocalConvivenciaRepo;
    }

    /**
     * Display a listing of the RemoverLocalConvivencia.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->removerLocalConvivenciaRepository->pushCriteria(new RequestCriteria($request));
        $removerLocalConvivencias = $this->removerLocalConvivenciaRepository->all();

        return view('remover_local_convivencias.index')
            ->with('removerLocalConvivencias', $removerLocalConvivencias);
    }

    /**
     * Show the form for creating a new RemoverLocalConvivencia.
     *
     * @return Response
     */
    public function create()
    {
        return view('remover_local_convivencias.create');
    }

    /**
     * Store a newly created RemoverLocalConvivencia in storage.
     *
     * @param CreateRemoverLocalConvivenciaRequest $request
     *
     * @return Response
     */
    public function store(CreateRemoverLocalConvivenciaRequest $request)
    {
        $input = $request->all();

        $removerLocalConvivencia = $this->removerLocalConvivenciaRepository->create($input);

        Flash::success('Remover Local Convivencia saved successfully.');

        return redirect(route('removerLocalConvivencias.index'));
    }

    /**
     * Display the specified RemoverLocalConvivencia.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $removerLocalConvivencia = $this->removerLocalConvivenciaRepository->findWithoutFail($id);

        if (empty($removerLocalConvivencia)) {
            Flash::error('Remover Local Convivencia not found');

            return redirect(route('removerLocalConvivencias.index'));
        }

        return view('remover_local_convivencias.show')->with('removerLocalConvivencia', $removerLocalConvivencia);
    }

    /**
     * Show the form for editing the specified RemoverLocalConvivencia.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $removerLocalConvivencia = $this->removerLocalConvivenciaRepository->findWithoutFail($id);

        if (empty($removerLocalConvivencia)) {
            Flash::error('Remover Local Convivencia not found');

            return redirect(route('removerLocalConvivencias.index'));
        }

        return view('remover_local_convivencias.edit')->with('removerLocalConvivencia', $removerLocalConvivencia);
    }

    /**
     * Update the specified RemoverLocalConvivencia in storage.
     *
     * @param  int              $id
     * @param UpdateRemoverLocalConvivenciaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRemoverLocalConvivenciaRequest $request)
    {
        $removerLocalConvivencia = $this->removerLocalConvivenciaRepository->findWithoutFail($id);

        if (empty($removerLocalConvivencia)) {
            Flash::error('Remover Local Convivencia not found');

            return redirect(route('removerLocalConvivencias.index'));
        }

        $removerLocalConvivencia = $this->removerLocalConvivenciaRepository->update($request->all(), $id);

        Flash::success('Remover Local Convivencia updated successfully.');

        return redirect(route('removerLocalConvivencias.index'));
    }

    /**
     * Remove the specified RemoverLocalConvivencia from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $removerLocalConvivencia = $this->removerLocalConvivenciaRepository->findWithoutFail($id);

        if (empty($removerLocalConvivencia)) {
            Flash::error('Remover Local Convivencia not found');

            return redirect(route('removerLocalConvivencias.index'));
        }

        $this->removerLocalConvivenciaRepository->delete($id);

        Flash::success('Remover Local Convivencia deleted successfully.');

        return redirect(route('removerLocalConvivencias.index'));
    }
}
