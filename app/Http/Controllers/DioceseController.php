<?php

namespace App\Http\Controllers;

use App\DataTables\DioceseDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateDioceseRequest;
use App\Http\Requests\UpdateDioceseRequest;
use App\Repositories\DioceseRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class DioceseController extends AppBaseController
{
    /** @var  DioceseRepository */
    private $dioceseRepository;

    public function __construct(DioceseRepository $dioceseRepo)
    {
        $this->dioceseRepository = $dioceseRepo;
    }

    /**
     * Display a listing of the Diocese.
     *
     * @param DioceseDataTable $dioceseDataTable
     * @return Response
     */
    public function index(DioceseDataTable $dioceseDataTable)
    {
        return $dioceseDataTable->render('dioceses.index');
    }

    /**
     * Show the form for creating a new Diocese.
     *
     * @return Response
     */
    public function create()
    {
        return view('dioceses.create');
    }

    /**
     * Store a newly created Diocese in storage.
     *
     * @param CreateDioceseRequest $request
     *
     * @return Response
     */
    public function store(CreateDioceseRequest $request)
    {
        $input = $request->all();

        $diocese = $this->dioceseRepository->create($input);

        Flash::success('Diocese saved successfully.');

        return redirect(route('dioceses.index'));
    }

    /**
     * Display the specified Diocese.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $diocese = $this->dioceseRepository->findWithoutFail($id);

        if (empty($diocese)) {
            Flash::error('Diocese not found');

            return redirect(route('dioceses.index'));
        }

        return view('dioceses.show')->with('diocese', $diocese);
    }

    /**
     * Show the form for editing the specified Diocese.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $diocese = $this->dioceseRepository->findWithoutFail($id);

        if (empty($diocese)) {
            Flash::error('Diocese not found');

            return redirect(route('dioceses.index'));
        }

        return view('dioceses.edit')->with('diocese', $diocese);
    }

    /**
     * Update the specified Diocese in storage.
     *
     * @param  int              $id
     * @param UpdateDioceseRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDioceseRequest $request)
    {
        $diocese = $this->dioceseRepository->findWithoutFail($id);

        if (empty($diocese)) {
            Flash::error('Diocese not found');

            return redirect(route('dioceses.index'));
        }

        $diocese = $this->dioceseRepository->update($request->all(), $id);

        Flash::success('Diocese updated successfully.');

        return redirect(route('dioceses.index'));
    }

    /**
     * Remove the specified Diocese from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $diocese = $this->dioceseRepository->findWithoutFail($id);

        if (empty($diocese)) {
            Flash::error('Diocese not found');

            return redirect(route('dioceses.index'));
        }

        $this->dioceseRepository->delete($id);

        Flash::success('Diocese deleted successfully.');

        return redirect(route('dioceses.index'));
    }
}
