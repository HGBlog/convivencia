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

        return view('convivencias.index')
            ->with('convivencias', $convivencias);
    }

    /**
     * Show the form for creating a new Convivencia.
     *
     * @return Response
     */
    public function create()
    {
        $convivencia = new CreateConvivenciaRequest;
        return view('convivencias.create')->with('convivencia', $convivencia);
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

        Flash::success('Convivencia saved successfully.');

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
            Flash::error('Convivencia not found');

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

        if (empty($convivencia)) {
            Flash::error('Convivencia not found');

            return redirect(route('convivencias.index'));
        }

        return view('convivencias.edit')->with('convivencia', $convivencia);
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
            Flash::error('Convivencia not found');

            return redirect(route('convivencias.index'));
        }

        $convivencia = $this->convivenciaRepository->update($request->all(), $id);

        Flash::success('Convivencia updated successfully.');

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
            Flash::error('Convivencia not found');

            return redirect(route('convivencias.index'));
        }

        $this->convivenciaRepository->delete($id);

        Flash::success('Convivencia deleted successfully.');

        return redirect(route('convivencias.index'));
    }
    
    public function inscricao($id)
    {
        $convivencia = $this->convivenciaRepository->findWithoutFail($id);
        $lista_membros = Membro::where('owner_id', auth()->user()->id)->get();
            foreach($lista_membros as $membro){
                    /* Comentei e coloquei esta chamada acima */
                    //$convivencia = $this->convivenciaRepository->findWithoutFail($id);
                    
                    /* Extraindo ao campo is_ativo do membro em analis para plotar na view */
                    $status_convivencia = ConvivenciaMembro::where('membro_id', $membro->id)->where('convivencia_id', $id)->pluck('is_ativo');


                    /* Verifico se existe a entrada do mebro na convivencia */
                    if (!count($convivencia->membros()->where('membro_id', $membro->id)->where('convivencia_id', $id)->first()))
                    /* Se não existe, faço a inclusao no primeiro acesso */    
                    $convivencia->membros()->attach($membro->id, array('is_ativo' => 0));
            }           
        
        

        if (empty($convivencia)) {
            Flash::error('Convivencia not found');

            return redirect(route('convivencias.index'));
        }

        return view('convivencias.inscricao')->with('convivencia', $convivencia)->with('membros', $lista_membros)->with('status_convivencia', $status_convivencia);
    }

}
