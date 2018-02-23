<?php

namespace App\Http\Controllers;

use App\DataTables\AcolhidaDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateAcolhidaRequest;
use App\Http\Requests\UpdateAcolhidaRequest;
use App\Repositories\AcolhidaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Contracts;
use Prettus\Repository\Eloquent;
use Illuminate\Contracts\Session;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use View;
use App\Models\TipoQuarto;
use App\Models\Acolhida;
use App\Models\Convivencia;
use App\Models\AcolhidaExtra;
use App\Models\Membro;
use App\Models\TipoTranslado;
use App\Models\ConvivenciaMembro;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class AcolhidaController extends AppBaseController
{
    /** @var  AcolhidaRepository */
    private $acolhidaRepository;

    public function __construct(AcolhidaRepository $acolhidaRepo)
    {
        $this->acolhidaRepository = $acolhidaRepo;
    }

    /**
     * Display a listing of the Diocese.
     *
     * @param AcolhidaDataTable $acolhidaDataTable
     * @return Response
     */
    public function index(AcolhidaDataTable $acolhidaDataTable)
    {
        return $acolhidaDataTable->render('acolhidas.index');
    }

    /**
     * Display a listing of the Acolhida.
     *
     * @param Request $request
     * @return Response
     
    public function index(Request $request)
    {
        $this->acolhidaRepository->pushCriteria(new RequestCriteria($request));
        $acolhidas = $this->acolhidaRepository->all();

        return view('acolhidas.index')
            ->with('acolhidas', $acolhidas);
    }
    **/

    /**
     * Show the form for creating a new Acolhida.
     *
     * @return Response
     */
    public function create($convivencia_id, $membro_id)
    {
        $acolhida = new Acolhida;
        $acolhida_extra = AcolhidaExtra::pluck('no_acolhida_extra', 'id')->all();
        $translado = TipoTranslado::pluck('no_translado', 'id')->all();
        $status_convivencia = ConvivenciaMembro::where('membro_id', $membro_id)->where('convivencia_id', $convivencia_id)->first();
        $membro = new Membro;

        return view('acolhidas.create')->with('convivencia_id',$convivencia_id)->with('membro_id',$membro_id)->with('acolhida', $acolhida)->with('acolhida_extra', $acolhida_extra)->with('translado', $translado)->with('status_convivencia', $status_convivencia)->with('membro', $membro);
    }

    /**
     * Store a newly created Acolhida in storage.
     *
     * @param CreateAcolhidaRequest $request
     *
     * @return Response
     */
    public function store(CreateAcolhidaRequest $request)
    {
        $input = $request->all();

        $convivencia = $request->convivencia_id;

        $acolhida = $this->acolhidaRepository->create($input);



        Flash::success('Dados de Acolhimento salvos com sucesso!!!');

        //return redirect(route('acolhidas.index'));

        return redirect(route('convivencia_inscricao',$convivencia));
    }

    /**
     * Display the specified Acolhida.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $acolhida = $this->acolhidaRepository->findWithoutFail($id);

        if (empty($acolhida)) {
            Flash::error('Acolhida not found');

            return redirect(route('acolhidas.index'));
        }

        return view('acolhidas.show')->with('acolhida', $acolhida);
    }

    /**
     * Show the form for editing the specified Acolhida.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($convivencia_id, $membro_id)
    {
        $acolhida_extra = AcolhidaExtra::pluck('no_acolhida_extra', 'id')->all();
        $acolhida = Acolhida::where('convivencia_id', $convivencia_id)->where('membro_id', $membro_id)->first();
        $translado = TipoTranslado::pluck('no_translado', 'id')->all();
        $convivencia = new Convivencia; //Para a view 
        $casados = Membro::where('owner_id', auth()->user()->id)->get()->where('no_conjuge','<>', ''); //notnull
        $membro = new Membro;

        //$status_convivencia = ConvivenciaMembro::where('membro_id', $membro_id)->where('convivencia_id', $convivencia_id)->first();

        if (empty($acolhida)) {
            Flash::error('Nenhum dado de acolhimento encontrado. Criando dados novos...');


            //return redirect(route('acolhidas.index'));
            return redirect(route('create_inscricao',[$convivencia_id, $membro_id]));
        }

        return view('acolhidas.edit')->with('acolhida', $acolhida)->with('convivencia_id', $convivencia_id)->with('membro_id', $membro_id)->with('acolhida_extra', $acolhida_extra)->with('translado', $translado)->with('convivencia', $convivencia)->with('casados', $casados)->with('membro',$membro);
    }

    /**
     * Update the specified Acolhida in storage.
     *
     * @param  int              $id
     * @param UpdateAcolhidaRequest $request
     *
     * @return Response
     */
    public function update(UpdateAcolhidaRequest $request)
    {
        //print_r($convivencia_id);
        //$convivencia_id->convivencia()->$convivencia_id;
        //$membro_id->membro()->$membro_id;

        $convivencia_id = $request->convivencia_id;
        $membro_id = $request->membro_id;
        $acolhida = Acolhida::where('convivencia_id', $convivencia_id)->where('membro_id', $membro_id)->first();
        //$acolhida = $this->acolhidaRepository->findWithoutFail($membro_id);

        if (empty($acolhida)) {
            Flash::error('Acolhida nao encontrada!!!');

            return redirect(route('acolhidas.index'));
        }

        //$id = Acolhida::where('convivencia_id', $convivencia_id)->where('membro_id', $membro_id)->first();
        
        //$acolhida = $this->acolhidaRepository->update($request->all(), null);

        //$status_convivencia = new ConvivenciaMembro;                
        //$status_convivencia = ConvivenciaMembro::where('membro_id', $membro_id)->where('convivencia_id', $convivencia_id)->first();


        //print_r($status_convivencia);
        //$status_convivencia->membros()->select('*')->where('membro_id', $membro_id)->where('convivencia_id', $convivencia_id)->first();
        //$status_convivencia->is_ativo = $request->input('is_ativo');
        //$status_convivencia->convivencia_id = $convivencia_id;
        //$status_convivencia->membro_id = $membro_id;
        //$status_convivencia->membros()->sync($membro_id, array($convivencia_id, $membro_id));
        //, array(
        //$status_convivencia->membros()->attach($membro_id, array(
        //        'is_ativo' => $status_convivencia->is_ativo,
        //        'convivencia_id' => $convivencia_id
        //    ));

        //$status_convivencia->update($status_convivencia->toArray());


        $request->offsetUnset('_method');
        $request->offsetUnset('_token');
        //$request->offsetUnset('is_ativo');
        //print_r($acolhida);
        //return $request;
        $acolhida = Acolhida::where(['convivencia_id' => $convivencia_id, 'membro_id' => $membro_id])->update($request->all());

        Flash::success('Dados de Acolhimento salvos com sucesso!!!');

        return redirect(route('convivencia_inscricao',$convivencia_id));
    }

    /**
     * Remove the specified Acolhida from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $acolhida = $this->acolhidaRepository->findWithoutFail($id);

        if (empty($acolhida)) {
            Flash::error('Acolhida not found');

            return redirect(route('acolhidas.index'));
        }

        $this->acolhidaRepository->delete($id);

        Flash::success('Acolhida deleted successfully.');

        return redirect(route('acolhidas.index'));
    }


    public function relatorio_acolhidas(Request $request)
    {
        //$this->acolhidaRepository->pushCriteria(new RequestCriteria($request));
        //$acolhidas = $this->acolhidaRepository->all();

        $convivencias = Convivencia::where('is_ativo', true)->get();
        //$convivencia_selecionada = $this->convivenciaRepository->findWithoutFail($id);
        if(empty($request->convivencia_id)) {
            return view('acolhidas.relatorio_acolhidas_branco')->with('convivencias', $convivencias);
        } else {
        //dd($convivencias);
            return view('acolhidas.relatorio_acolhidas')->with('convivencias', $convivencias)->with('acolhidas', $acolhidas); 
        }
    }

    public function gera_relatorio_acolhidas(AcolhidaDataTable $acolhidaDataTable, Request $request)
    {
        $convivencias = Convivencia::where('is_ativo', true)->get();
        $convivencia_id = $request->convivencia_id;
        $membro = new Membro;
        $acolhida_extra = new AcolhidaExtra;
        $tipo_translado = new TipoTranslado;
        //dd($convivencia_id);

        //return $acolhidaDataTable->render('acolhidas.index');
        
        //$convivencia = $this->convivenciaRepository->findWithoutFail($id);
        //$acolhidaDataTable = AcolhidaDataTable::where('convivencia_id', $convivencia_id)->get();

        //$acolhidaDataTable = new AcolhidaDataTable;

        //return $acolhidaDataTable->render('acolhidas.relatorio_acolhidas')->with('acolhidas', $acolhidas)->with('convivencias', $convivencias)->with('membro', $membro)->with('acolhida_extra', $acolhida_extra)->with('tipo_translado', $tipo_translado);
        return $acolhidaDataTable->render('acolhidas.relatorio_acolhidas')->with('convivencias', $convivencias)->with('membro', $membro)->with('acolhida_extra', $acolhida_extra)->with('tipo_translado', $tipo_translado);
        //dd($acolhidas->id);
        
        //return view('acolhidas.relatorio_acolhidas')->with('acolhidas', $acolhidas)->with('convivencias', $convivencias)->with('membro', $membro)->with('acolhida_extra', $acolhida_extra)->with('tipo_translado', $tipo_translado);
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