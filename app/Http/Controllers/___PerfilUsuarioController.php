<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePerfilUsuarioRequest;
use App\Http\Requests\UpdatePerfilUsuarioRequest;
use App\Repositories\PerfilUsuarioRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PerfilUsuarioController extends AppBaseController
{
    /** @var  PerfilUsuarioRepository */
    private $perfilUsuarioRepository;

    public function __construct(PerfilUsuarioRepository $perfilUsuarioRepo)
    {
        $this->perfilUsuarioRepository = $perfilUsuarioRepo;
    }

    /**
     * Display a listing of the PerfilUsuario.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->perfilUsuarioRepository->pushCriteria(new RequestCriteria($request));
        $perfilUsuarios = $this->perfilUsuarioRepository->all();

        return view('perfil_usuarios.index')
            ->with('perfilUsuarios', $perfilUsuarios);
    }

    /**
     * Show the form for creating a new PerfilUsuario.
     *
     * @return Response
     */
    public function create()
    {
        return view('perfil_usuarios.create');
    }

    /**
     * Store a newly created PerfilUsuario in storage.
     *
     * @param CreatePerfilUsuarioRequest $request
     *
     * @return Response
     */
    public function store(CreatePerfilUsuarioRequest $request)
    {
        $input = $request->all();

        $perfilUsuario = $this->perfilUsuarioRepository->create($input);

        Flash::success('Perfil Usuario saved successfully.');

        return redirect(route('perfilUsuarios.index'));
    }

    /**
     * Display the specified PerfilUsuario.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $perfilUsuario = $this->perfilUsuarioRepository->findWithoutFail($id);

        if (empty($perfilUsuario)) {
            Flash::error('Perfil Usuario not found');

            return redirect(route('perfilUsuarios.index'));
        }

        return view('perfil_usuarios.show')->with('perfilUsuario', $perfilUsuario);
    }

    /**
     * Show the form for editing the specified PerfilUsuario.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $perfilUsuario = $this->perfilUsuarioRepository->findWithoutFail($id);

        if (empty($perfilUsuario)) {
            Flash::error('Perfil Usuario not found');

            return redirect(route('perfilUsuarios.index'));
        }

        return view('perfil_usuarios.edit')->with('perfilUsuario', $perfilUsuario);
    }

    /**
     * Update the specified PerfilUsuario in storage.
     *
     * @param  int              $id
     * @param UpdatePerfilUsuarioRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePerfilUsuarioRequest $request)
    {
        $perfilUsuario = $this->perfilUsuarioRepository->findWithoutFail($id);

        if (empty($perfilUsuario)) {
            Flash::error('Perfil Usuario not found');

            return redirect(route('perfilUsuarios.index'));
        }

        $perfilUsuario = $this->perfilUsuarioRepository->update($request->all(), $id);

        Flash::success('Perfil Usuario updated successfully.');

        return redirect(route('perfilUsuarios.index'));
    }

    /**
     * Remove the specified PerfilUsuario from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $perfilUsuario = $this->perfilUsuarioRepository->findWithoutFail($id);

        if (empty($perfilUsuario)) {
            Flash::error('Perfil Usuario not found');

            return redirect(route('perfilUsuarios.index'));
        }

        $this->perfilUsuarioRepository->delete($id);

        Flash::success('Perfil Usuario deleted successfully.');

        return redirect(route('perfilUsuarios.index'));
    }
}
