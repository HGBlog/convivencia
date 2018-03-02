<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateConvivenciaRequest;
use App\Http\Requests\UpdateConvivenciaRequest;
use App\Repositories\ConvivenciaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Prettus\Repository\Contracts;
use Prettus\Repository\Eloquent;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\Membro;
use App\Models\Convivencia;
use App\Models\ConvivenciaMembro;
use App\Models\LocalConvivencia;
use App\Models\Acolhida;


class ConvivenciaController extends AppBaseController
{
    /** @var  ConvivenciaRepository */
    private $convivenciaRepository;

    public function __construct(ConvivenciaRepository $convivenciaRepo)
    {
        $this->convivenciaRepository = $convivenciaRepo;
    }

    /**
     * Display a listing of the Convivencia.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->convivenciaRepository->pushCriteria(new RequestCriteria($request));
        $convivencias = $this->convivenciaRepository->all();

        $local = new LocalConvivencia;

        return view('convivencias.index')
            ->with('convivencias', $convivencias)
            ->with('local', $local);
    }

    /**
     * Show the form for creating a new Convivencia.
     *
     * @return Response
     */
    public function create()
    {
        $convivencia = new CreateConvivenciaRequest;
        $locais = LocalConvivencia::pluck('no_local', 'id')->all();
        return view('convivencias.create')->with('convivencia', $convivencia)->with('locais', $locais);
    }

    /**
     * Store a newly created Convivencia in storage.
     *
     * @param CreateConvivenciaRequest $request
     *
     * @return Response
     */
    public function store(CreateConvivenciaRequest $request)
    {
        $input = $request->all();

        $convivencia = $this->convivenciaRepository->create($input);

        Flash::success('Convivência criada com sucesso!.');

        return redirect(route('convivencias.index'));
    }

    /**
     * Display the specified Convivencia.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $convivencia = $this->convivenciaRepository->findWithoutFail($id);

        if (empty($convivencia)) {
            Flash::error('Convivência não encontrada!');

            return redirect(route('convivencias.index'));
        }

        return view('convivencias.show')->with('convivencia', $convivencia);
    }

    /**
     * Show the form for editing the specified Convivencia.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $convivencia = $this->convivenciaRepository->findWithoutFail($id);
        $locais = LocalConvivencia::pluck('no_local', 'id')->all();

        if (empty($convivencia)) {
            Flash::error('Convivência não encontrada!');

            return redirect(route('convivencias.index'));
        }

        return view('convivencias.edit')->with('convivencia', $convivencia)->with('locais', $locais);
    }

    /**
     * Update the specified Convivencia in storage.
     *
     * @param  int              $id
     * @param UpdateConvivenciaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateConvivenciaRequest $request)
    {
        $convivencia = $this->convivenciaRepository->findWithoutFail($id);

        if (empty($convivencia)) {
            Flash::error('Convivência não encontrada!');

            return redirect(route('convivencias.index'));
        }

        $convivencia = $this->convivenciaRepository->update($request->all(), $id);

        Flash::success('Convivência atualizada com sucesso!');

        return redirect(route('convivencias.index'));
    }

    /**
     * Remove the specified Convivencia from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $convivencia = $this->convivenciaRepository->findWithoutFail($id);

        if (empty($convivencia)) {
            Flash::error('Convivência não encontrada.');

            return redirect(route('convivencias.index'));
        }

        $this->convivenciaRepository->delete($id);

        Flash::success('Convivência excluída com sucesso!');

        return redirect(route('convivencias.index'));
    }
    
    public function inscricao($id)
    {
        $convivencia = $this->convivenciaRepository->findWithoutFail($id);

        $casados = Membro::where('owner_id', auth()->user()->id)->get()->where('no_conjuge','<>', '');

        $membros = Membro::where('owner_id', auth()->user()->id)->get()->where('no_conjuge', 'IS NULL', null);
            //print_r($lista_membros);

            foreach($membros as $membro) {
                    /* Verifico se existe a entrada do mebro na convivencia */
                    if (!count($convivencia->membros()->where('membro_id', $membro->id)->where('convivencia_id', $id)->first())){
                            $convivencia->membros()->attach($membro->id);
                        }
                    //$acolhida = Acolhida::where('membro_id', $membro->id)->where('convivencia_id', $convivencia_id);
            };           
        
        $acolhida = new Acolhida;            
        

        if (empty($convivencia)) {
            Flash::error('Convivencia not found');

            return redirect(route('convivencias.index'));
        }


        return view('convivencias.inscricao')->with('convivencia', $convivencia)->with('membros', $membros)->with('acolhida', $acolhida)->with('casados', $casados);
    }

    public function lista_ativas(Request $request)
    {
        //$this->convivenciaRepository->pushCriteria(new RequestCriteria($request));
        //$convivencias = $this->convivenciaRepository->all();

        //return view('convivencias.lista_ativas')
        //    ->with('convivencias', $convivencias);

        $convivencias = Convivencia::where('is_ativo', true)->get();
 
        //Prepend adicionado para colocar a primeira da lista em branco. Retirado a pedido do Fabio
        //$convivencias->prepend('None');
;
        
        return view('convivencias.lista_ativas',compact('convivencias'));    
    }

    public function seleciona_convivencia(Request $request)
    {
        //$this->convivenciaRepository->pushCriteria(new RequestCriteria($request));
        //$convivencias = $this->convivenciaRepository->all();

        //return view('convivencias.lista_ativas')
        //    ->with('convivencias', $convivencias);
        //$convivencia_id = $request->input('convivencia_id');
        $convivencia_id = $request->convivencia_id;
     
        return redirect(route('convivencia_inscricao', $convivencia_id));    
    }
}
