<?php


namespace App\Http\Controllers;

use App\Http\Requests\CreateMembroRequest;
use App\Http\Requests\UpdateMembroRequest;
use App\Repositories\MembroRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Contracts;
use Prettus\Repository\Eloquent;
use Prettus\Repository\Criteria\RequestCriteria;
use Illuminate\Contracts\Session;
use Response;
use View;
use App\Models\Membro;
use App\Models\Etapa;
use App\Models\TipoCarisma;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;


class MembroController extends AppBaseController
{
    /** @var  MembroRepository */
    private $membroRepository;

    public function __construct(MembroRepository $membroRepo)
    {
        $this->membroRepository = $membroRepo;
    }

    /**
     * Display a listing of the Membro.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        //$this->membroRepository->pushCriteria(new RequestCriteria($request));
        //$membros = $this->membroRepository->all();

        //return view('membros.index')
        //    ->with('membros', $membros);

        $membros = Membro::where('owner_id', auth()->user()->id)->get();
        
        return view('membros.index',compact('membros'));
    }

    /**
     * Show the form for creating a new Membro.
     *
     * @return Response
     */
    public function create()
    {
        //$etapas = Etapa::pluck('no_etapa', 'id');
        //$etapas = Etapa::all(['id', 'no_etapa'])->pluck('no_etapa', 'id');
        $membro = new Membro;
        $etapas = Etapa::pluck('no_etapa', 'id')->all();
        $carismas = TipoCarisma::pluck('no_carisma', 'id')->all();
        
        ///$thing = Etapa::pluck('id');
        //return view('membros.create');
        //return View::make('membros.create', $etapas);
        return view('membros.create')->with('etapas',$etapas)->with('membro',$membro)->with('carismas', $carismas);



    }

    /**
     * Store a newly created Membro in storage.
     *
     * @param CreateMembroRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        //$input = $request->all();

        //$membro = $this->membroRepository->create($input);

        //Flash::success('Membro saved successfully.');

        //return redirect(route('membros.index'));

        //$membro = new Membro();
        //$data = $this->validate($request, [
        //    'no_usuario'=>'required'
        //]);
        
        //$membro->saveMembro($data);
        //return redirect('membros.index')->with('success', 'Novo membro da Equipe criado com sucesso!');
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'no_usuario'       => 'required',
            'no_email'      => 'required|email'
        );
       $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('membros/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $membro = new Membro;
            $membro->no_usuario = $request->input('no_usuario');
            
            $membro->owner_id = auth()->user()->id;
            $membro->no_pais = $request->input('no_pais');
            $membro->no_email = $request->input('no_email');
            $membro->no_sexo = $request->input('no_sexo');
            $membro->co_telefone_pais = $request->input('co_telefone_pais');
            $membro->nu_telefone = $request->input('nu_telefone');
            $membro->no_diocese = $request->input('no_diocese');
            $membro->no_cidade = $request->input('no_cidade');
            $membro->no_paroquia = $request->input('no_paroquia');
            $membro->nu_comunidade = $request->input('nu_comunidade');
            $membro->nu_ano_inicio_caminho = $request->input('nu_ano_inicio_caminho');
            $membro->etapa_id = $request->input('etapa_id');
            $membro->tipo_carisma_id = $request->input('tipo_carisma_id');
            $membro->save();
            //$membro->etapas()->sync($request->get('etapas'));
            // redirect
            Flash::success('Membro criado com sucesso!');
            return redirect(route('membros.index'));
        };
    }


    

    /**
     * Display the specified Membro.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $membro = $this->membroRepository->findWithoutFail($id);

        if (empty($membro)) {
            Flash::error('Membro not found');

            return redirect(route('membros.index'));
        }

        return view('membros.show')->with('membro', $membro);
    }

    /**
     * Show the form for editing the specified Membro.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $membro = $this->membroRepository->findWithoutFail($id);
        $etapas = Etapa::pluck('no_etapa', 'id');
        $carismas = TipoCarisma::pluck('no_carisma', 'id')->all();

        //$etapa_marcada = Etapa::where('active', true)->orderBy('name')->lists('name', 'id');

        if (empty($membro)) {
            Flash::error('Membro não encontrado.');

            return redirect(route('membros.index'));
        }
        return view('membros.edit')->with('membro', $membro)->with('etapas',$etapas)->with('carismas', $carismas);
    }

    /**
     * Update the specified Membro in storage.
     *
     * @param  int              $id
     * @param UpdateMembroRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMembroRequest $request)
    {
        $membro = $this->membroRepository->findWithoutFail($id);

        if (empty($membro)) {
            Flash::error('Membro not found');

            return redirect(route('membros.index'));
        }

        $membro = $this->membroRepository->update($request->all(), $id);

        Flash::success('Membro da Equipe atualizado com sucesso!');

        return redirect(route('membros.index'));
    }

    /**
     * Remove the specified Membro from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $membro = $this->membroRepository->findWithoutFail($id);

        if (empty($membro)) {
            Flash::error('Membro não encontrado.');

            return redirect(route('membros.index'));
        }

        $this->membroRepository->delete($id);

        Flash::success('Membro da Equipe excluído com sucesso!');

        return redirect(route('membros.index'));
    }
}
