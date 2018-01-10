<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAcolhidaExtraRequest;
use App\Http\Requests\UpdateAcolhidaExtraRequest;
use App\Repositories\AcolhidaExtraRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class AcolhidaExtraController extends AppBaseController
{
    /** @var  AcolhidaExtraRepository */
    private $acolhidaExtraRepository;

    public function __construct(AcolhidaExtraRepository $acolhidaExtraRepo)
    {
        $this->acolhidaExtraRepository = $acolhidaExtraRepo;
    }

    /**
     * Display a listing of the AcolhidaExtra.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->acolhidaExtraRepository->pushCriteria(new RequestCriteria($request));
        $acolhidaExtras = $this->acolhidaExtraRepository->all();

        return view('acolhida_extras.index')
            ->with('acolhidaExtras', $acolhidaExtras);
    }

    /**
     * Show the form for creating a new AcolhidaExtra.
     *
     * @return Response
     */
    public function create()
    {
        return view('acolhida_extras.create');
    }

    /**
     * Store a newly created AcolhidaExtra in storage.
     *
     * @param CreateAcolhidaExtraRequest $request
     *
     * @return Response
     */
    public function store(CreateAcolhidaExtraRequest $request)
    {
        $input = $request->all();

        $acolhidaExtra = $this->acolhidaExtraRepository->create($input);

        Flash::success('Acolhida Extra saved successfully.');

        return redirect(route('acolhidaExtras.index'));
    }

    /**
     * Display the specified AcolhidaExtra.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $acolhidaExtra = $this->acolhidaExtraRepository->findWithoutFail($id);

        if (empty($acolhidaExtra)) {
            Flash::error('Acolhida Extra not found');

            return redirect(route('acolhidaExtras.index'));
        }

        return view('acolhida_extras.show')->with('acolhidaExtra', $acolhidaExtra);
    }

    /**
     * Show the form for editing the specified AcolhidaExtra.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $acolhidaExtra = $this->acolhidaExtraRepository->findWithoutFail($id);

        if (empty($acolhidaExtra)) {
            Flash::error('Acolhida Extra not found');

            return redirect(route('acolhidaExtras.index'));
        }

        return view('acolhida_extras.edit')->with('acolhidaExtra', $acolhidaExtra);
    }

    /**
     * Update the specified AcolhidaExtra in storage.
     *
     * @param  int              $id
     * @param UpdateAcolhidaExtraRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAcolhidaExtraRequest $request)
    {
        $acolhidaExtra = $this->acolhidaExtraRepository->findWithoutFail($id);

        if (empty($acolhidaExtra)) {
            Flash::error('Acolhida Extra not found');

            return redirect(route('acolhidaExtras.index'));
        }

        $acolhidaExtra = $this->acolhidaExtraRepository->update($request->all(), $id);

        Flash::success('Acolhida Extra updated successfully.');

        return redirect(route('acolhidaExtras.index'));
    }

    /**
     * Remove the specified AcolhidaExtra from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $acolhidaExtra = $this->acolhidaExtraRepository->findWithoutFail($id);

        if (empty($acolhidaExtra)) {
            Flash::error('Acolhida Extra not found');

            return redirect(route('acolhidaExtras.index'));
        }

        $this->acolhidaExtraRepository->delete($id);

        Flash::success('Acolhida Extra deleted successfully.');

        return redirect(route('acolhidaExtras.index'));
    }
}
