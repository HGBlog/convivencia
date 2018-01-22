<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRemoverConvivenciaRequest;
use App\Http\Requests\UpdateRemoverConvivenciaRequest;
use App\Repositories\RemoverConvivenciaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class RemoverConvivenciaController extends AppBaseController
{
    /** @var  RemoverConvivenciaRepository */
    private $removerConvivenciaRepository;

    public function __construct(RemoverConvivenciaRepository $removerConvivenciaRepo)
    {
        $this->removerConvivenciaRepository = $removerConvivenciaRepo;
    }

    /**
     * Display a listing of the RemoverConvivencia.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->removerConvivenciaRepository->pushCriteria(new RequestCriteria($request));
        $removerConvivencias = $this->removerConvivenciaRepository->all();

        return view('remover_convivencias.index')
            ->with('removerConvivencias', $removerConvivencias);
    }

    /**
     * Show the form for creating a new RemoverConvivencia.
     *
     * @return Response
     */
    public function create()
    {
        return view('remover_convivencias.create');
    }

    /**
     * Store a newly created RemoverConvivencia in storage.
     *
     * @param CreateRemoverConvivenciaRequest $request
     *
     * @return Response
     */
    public function store(CreateRemoverConvivenciaRequest $request)
    {
        $input = $request->all();

        $removerConvivencia = $this->removerConvivenciaRepository->create($input);

        Flash::success('Remover Convivencia saved successfully.');

        return redirect(route('removerConvivencias.index'));
    }

    /**
     * Display the specified RemoverConvivencia.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $removerConvivencia = $this->removerConvivenciaRepository->findWithoutFail($id);

        if (empty($removerConvivencia)) {
            Flash::error('Remover Convivencia not found');

            return redirect(route('removerConvivencias.index'));
        }

        return view('remover_convivencias.show')->with('removerConvivencia', $removerConvivencia);
    }

    /**
     * Show the form for editing the specified RemoverConvivencia.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $removerConvivencia = $this->removerConvivenciaRepository->findWithoutFail($id);

        if (empty($removerConvivencia)) {
            Flash::error('Remover Convivencia not found');

            return redirect(route('removerConvivencias.index'));
        }

        return view('remover_convivencias.edit')->with('removerConvivencia', $removerConvivencia);
    }

    /**
     * Update the specified RemoverConvivencia in storage.
     *
     * @param  int              $id
     * @param UpdateRemoverConvivenciaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRemoverConvivenciaRequest $request)
    {
        $removerConvivencia = $this->removerConvivenciaRepository->findWithoutFail($id);

        if (empty($removerConvivencia)) {
            Flash::error('Remover Convivencia not found');

            return redirect(route('removerConvivencias.index'));
        }

        $removerConvivencia = $this->removerConvivenciaRepository->update($request->all(), $id);

        Flash::success('Remover Convivencia updated successfully.');

        return redirect(route('removerConvivencias.index'));
    }

    /**
     * Remove the specified RemoverConvivencia from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $removerConvivencia = $this->removerConvivenciaRepository->findWithoutFail($id);

        if (empty($removerConvivencia)) {
            Flash::error('Remover Convivencia not found');

            return redirect(route('removerConvivencias.index'));
        }

        $this->removerConvivenciaRepository->delete($id);

        Flash::success('Remover Convivencia deleted successfully.');

        return redirect(route('removerConvivencias.index'));
    }
}
