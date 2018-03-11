<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUsuarioRequest;
use App\Http\Requests\UpdateUsuarioRequest;
use App\Repositories\UsuarioRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Illuminate\Support\Facades\Redirect;
use Response;
use Auth;
use App\Models\MacroRegiao;

class UsuarioController extends AppBaseController
{
    /** @var  UsuarioRepository */
    private $usuarioRepository;

    public function __construct(UsuarioRepository $usuarioRepo)
    {
        $this->usuarioRepository = $usuarioRepo;
    }

    /**
     * Display a listing of the Usuario.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->usuarioRepository->pushCriteria(new RequestCriteria($request));
        $usuarios = $this->usuarioRepository->lista_ordenado();
        $macroregiao = new MacroRegiao;
        return view('usuarios.index')
            ->with('usuarios', $usuarios)
            ->with('macroregiao', $macroregiao);
    }

    /**
     * Show the form for creating a new Usuario.
     *
     * @return Response
     */
    public function create()
    {
        return view('usuarios.create');
    }

    /**
     * Store a newly created Usuario in storage.
     *
     * @param CreateUsuarioRequest $request
     *
     * @return Response
     */
    public function store(CreateUsuarioRequest $request)
    {
        $input = $request->all();

        $usuario = $this->usuarioRepository->create($input);
        $usuario->name->$data['name'];
        $usuario->email->$data['email'];
        $usuario->password->bcrypt($data['password']);

        Flash::success('Usuario saved successfully.');

        return redirect(route('usuarios.index'));
    }

    /**
     * Display the specified Usuario.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $usuario = $this->usuarioRepository->findWithoutFail($id);

        if (empty($usuario)) {
            Flash::error('Usuario not found');

            return redirect(route('usuarios.index'));
        }

        return view('usuarios.show')->with('usuario', $usuario);
    }

    /**
     * Show the form for editing the specified Usuario.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $usuario = $this->usuarioRepository->findWithoutFail($id);
        $macroregiaos = MacroRegiao::orderBy('no_macro_regiao')->pluck('no_macro_regiao', 'id');

        if (empty($usuario)) {
            Flash::error('Usuario not found');

            return redirect(route('usuarios.index'));
        }

        return view('usuarios.edit')->with('usuario', $usuario)->with('macroregiaos', $macroregiaos);
    }

    /**
     * Update the specified Usuario in storage.
     *
     * @param  int              $id
     * @param UpdateUsuarioRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUsuarioRequest $request)
    {
        $usuario = $this->usuarioRepository->findWithoutFail($id);

        if (empty($usuario)) {
            Flash::error('Usuario not found');

            return redirect(route('usuarios.index'));
        }

        //$usuario->name = $request->input('name');
        //$usuario->email = $request->input('email');
        //$usuario->password = bcrypt($request->input('password'));
        $usuario->mregiao_id = $request->input('mregiao_id');
        $usuario->save();
        //$usuario = $this->usuarioRepository->update($request->all(), $id);


        Flash::success('Usuário atualizado com sucesso!');

        return redirect(route('usuarios.index'));
    }

    /**
     * Remove the specified Usuario from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $usuario = $this->usuarioRepository->findWithoutFail($id);

        if (empty($usuario)) {
            Flash::error('Usuario not found');

            return redirect(route('usuarios.index'));
        }

        $this->usuarioRepository->delete($id);

        Flash::success('Usuario deleted successfully.');

        return redirect(route('usuarios.index'));
    }

    public function perfil($id, Request $request)
    {
        $usuario = $this->usuarioRepository->findWithoutFail($id);
        //$usuario = Usuario::where('id', Auth::user());

        if (($id != Auth::user()->id )) {
            Flash::error('Você só pode editar o seu perfil!!');

            //return redirect(route('home'));
            return Redirect::to('home');
        }

        return view('usuarios.perfil')->with('usuario', $usuario);
    }

    public function perfil_update($id, UpdateUsuarioRequest $request)
    {
        $usuario = $this->usuarioRepository->findWithoutFail($id);

        if (empty($usuario)) {
            Flash::error('Usuário não encontrado!!');

            return redirect(route('usuarios.index'));
        }

        $usuario->name = $request->input('name');
        $usuario->email = $request->input('email');
        //$usuario->password = bcrypt($request->input('password'));
        //$usuario = $request->except(['password']);
        $usuario->save();
        //$usuario = $this->usuarioRepository->update($request->all(), $id);


        Flash::success('Perfil de Usuário atualizado com sucesso!');

        //return redirect(route('usuarios.index'));
        return Redirect::to('home');


        /**
        if ($request->has('password')){
            $this->validate($request, [
                'password' => 'required|confirmed|min:6',
            ]);
            $request->request->set('password',bcrypt($request->password));
            $request = $request->all();
        }
        else{
            $request = $request->except(['password']);
        }
        $usuario->update($request);
        **/
    }
}
