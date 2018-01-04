<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateConvivenciaMembroRequest;
use App\Http\Requests\UpdateConvivenciaMembroRequest;
use App\Repositories\ConvivenciaMembroRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\Membro;
use App\Models\ConvivenciaMembro;

class ConvivenciaMembroController extends AppBaseController
{
    /** @var  ConvivenciaMembroRepository */
    private $convivenciaMembroRepository;

    public function __construct(ConvivenciaMembroRepository $convivenciaMembroRepo)
    {
        $this->convivenciaMembroRepository = $convivenciaMembroRepo;
    }

    /**
     * Display a listing of the ConvivenciaMembro.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        //$this->convivenciaMembroRepository->pushCriteria(new RequestCriteria($request));
        //$convivenciaMembros = $this->convivenciaMembroRepository->all();

        
        $membros = Membro::where('owner_id', auth()->user()->id)->get();
        $membros->convivencias()->attach($convivencia_id);
        
        $convivenciaMembro = new ConvivenciaMembro();
        //$vai_convivencia = new ConvivenciaMembro;
        //::where($membros->$convivencia_id->get());
        
        return view('convivencia_membros.index',compact('membros'))->with('convivencias');

        //return view('convivencia_membros.index')
        //    ->with('convivenciaMembros', $convivenciaMembros);
    }

    /**
     * Show the form for creating a new ConvivenciaMembro.
     *
     * @return Response
     */
    public function create()
    {
        return view('convivencia_membros.create');
    }

    /**
     * Store a newly created ConvivenciaMembro in storage.
     *
     * @param CreateConvivenciaMembroRequest $request
     *
     * @return Response
     */
    public function store(CreateConvivenciaMembroRequest $request)
    {
        $input = $request->all();

        $convivenciaMembro = $this->convivenciaMembroRepository->create($input);

        Flash::success('Convivencia Membro saved successfully.');

        return redirect(route('convivenciaMembros.index'));
    }

    /**
     * Display the specified ConvivenciaMembro.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $convivenciaMembro = $this->convivenciaMembroRepository->findWithoutFail($id);

        if (empty($convivenciaMembro)) {
            Flash::error('Convivencia Membro not found');

            return redirect(route('convivenciaMembros.index'));
        }

        return view('convivencia_membros.show')->with('convivenciaMembro', $convivenciaMembro);
    }

    /**
     * Show the form for editing the specified ConvivenciaMembro.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $convivenciaMembro = $this->convivenciaMembroRepository->findWithoutFail($id);

        if (empty($convivenciaMembro)) {
            Flash::error('Convivencia Membro not found');

            return redirect(route('convivenciaMembros.index'));
        }

        return view('convivencia_membros.edit')->with('convivenciaMembro', $convivenciaMembro);
    }

    /**
     * Update the specified ConvivenciaMembro in storage.
     *
     * @param  int              $id
     * @param UpdateConvivenciaMembroRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateConvivenciaMembroRequest $request)
    {
        $convivenciaMembro = $this->convivenciaMembroRepository->findWithoutFail($id);

        if (empty($convivenciaMembro)) {
            Flash::error('Convivencia Membro not found');

            return redirect(route('convivenciaMembros.index'));
        }

        $convivenciaMembro = $this->convivenciaMembroRepository->update($request->all(), $id);

        Flash::success('Convivencia Membro updated successfully.');

        return redirect(route('convivenciaMembros.index'));
    }

    /**
     * Remove the specified ConvivenciaMembro from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $convivenciaMembro = $this->convivenciaMembroRepository->findWithoutFail($id);

        if (empty($convivenciaMembro)) {
            Flash::error('Convivencia Membro not found');

            return redirect(route('convivenciaMembros.index'));
        }

        $this->convivenciaMembroRepository->delete($id);

        Flash::success('Convivencia Membro deleted successfully.');

        return redirect(route('convivenciaMembros.index'));
    }

    public function vai_convivencia($membro_id, $convivencia_id)
    {
        

        $users = DB::table('convivencias')
            ->join('convivencia_membros', 'convivencia.id', '=', 'convivencia_membros.convivencia_id')
            ->join('membros', 'convivencia_membros.membros_id', '=', 'membros.id')
            ->where('convivencia_membros.membros_id',Auth::user()->id)-‌​>get();
        
        return view('convivenciaMembros.index');
    }

    public function desmarca_convivencia($membro_id, $convivencia_id)
    {
        
        $convivenciaMembro = $this->convivenciaMembroRepository->findWithoutFail($id);

        if (empty($convivenciaMembro)) {
            Flash::error('Convivencia Membro not found');

            return redirect(route('convivenciaMembros.index'));
        }

        $this->convivenciaMembroRepository->delete($id);

        Flash::success('Convivencia Membro deleted successfully.');

        return redirect(route('convivenciaMembros.index'));
    }    

}
