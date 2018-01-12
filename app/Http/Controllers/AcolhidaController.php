<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAcolhidaRequest;
use App\Http\Requests\UpdateAcolhidaRequest;
use App\Repositories\AcolhidaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\TipoQuarto;
use App\Models\Acolhida;
use App\Models\Convivencia;
use App\Models\AcolhidaExtra;
use App\Models\Membro;
use App\Models\TipoTranslado;

class AcolhidaController extends AppBaseController
{
    /** @var  AcolhidaRepository */
    private $acolhidaRepository;

    public function __construct(AcolhidaRepository $acolhidaRepo)
    {
        $this->acolhidaRepository = $acolhidaRepo;
    }

    /**
     * Display a listing of the Acolhida.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->acolhidaRepository->pushCriteria(new RequestCriteria($request));
        $acolhidas = $this->acolhidaRepository->all();

        return view('acolhidas.index')
            ->with('acolhidas', $acolhidas);
    }

    /**
     * Show the form for creating a new Acolhida.
     *
     * @return Response
     */
    public function create($convivencia_id, $membro_id)
    {
        $acolhida = new Acolhida;
        $quartos = TipoQuarto::pluck('no_quarto', 'id')->all();
        $acolhida_extra = AcolhidaExtra::pluck('no_acolhida_extra', 'id')->all();
        $translado = TipoTranslado::pluck('no_translado', 'id')->all();

        return view('acolhidas.create')->with('convivencia_id',$convivencia_id)->with('membro_id',$membro_id)->with('quartos',$quartos)->with('acolhida', $acolhida)->with('acolhida_extra', $acolhida_extra)->with('translado', $translado);
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
        $quartos = TipoQuarto::pluck('no_quarto', 'id')->all();
        $acolhida_extra = AcolhidaExtra::pluck('no_acolhida_extra', 'id')->all();
        //$acolhida = Membro::where('owner_id', auth()->user()->id)->get();
        $acolhida = Acolhida::where('convivencia_id', $convivencia_id)->where('membro_id', $membro_id)->first();
        $translado = TipoTranslado::pluck('no_translado', 'id')->all();

        if (empty($acolhida)) {
            Flash::error('Nenhum dado de acolhimento encontrado. Criando dados novos...');


            //return redirect(route('acolhidas.index'));
            return redirect(route('create_inscricao',[$convivencia_id, $membro_id]));
        }

        return view('acolhidas.edit')->with('acolhida', $acolhida)->with('convivencia_id', $convivencia_id)->with('membro_id', $membro_id)->with('quartos', $quartos)->with('acolhida_extra', $acolhida_extra)->with('translado', $translado);
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
        $request->offsetUnset('_method');
        $request->offsetUnset('_token');
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
}
