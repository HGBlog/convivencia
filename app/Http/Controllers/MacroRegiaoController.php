<?php

namespace App\Http\Controllers;

use App\DataTables\MacroRegiaoDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateMacroRegiaoRequest;
use App\Http\Requests\UpdateMacroRegiaoRequest;
use App\Repositories\MacroRegiaoRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class MacroRegiaoController extends AppBaseController
{
    /** @var  MacroRegiaoRepository */
    private $macroRegiaoRepository;

    public function __construct(MacroRegiaoRepository $macroRegiaoRepo)
    {
        $this->macroRegiaoRepository = $macroRegiaoRepo;
    }

    /**
     * Display a listing of the MacroRegiao.
     *
     * @param MacroRegiaoDataTable $macroRegiaoDataTable
     * @return Response
     */
    public function index(MacroRegiaoDataTable $macroRegiaoDataTable)
    {
        return $macroRegiaoDataTable->render('macro_regiaos.index');
    }

    /**
     * Show the form for creating a new MacroRegiao.
     *
     * @return Response
     */
    public function create()
    {
        return view('macro_regiaos.create');
    }

    /**
     * Store a newly created MacroRegiao in storage.
     *
     * @param CreateMacroRegiaoRequest $request
     *
     * @return Response
     */
    public function store(CreateMacroRegiaoRequest $request)
    {
        $input = $request->all();

        $macroRegiao = $this->macroRegiaoRepository->create($input);

        Flash::success('Macro Regiao saved successfully.');

        return redirect(route('macroRegiaos.index'));
    }

    /**
     * Display the specified MacroRegiao.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $macroRegiao = $this->macroRegiaoRepository->findWithoutFail($id);

        if (empty($macroRegiao)) {
            Flash::error('Macro Regiao not found');

            return redirect(route('macroRegiaos.index'));
        }

        return view('macro_regiaos.show')->with('macroRegiao', $macroRegiao);
    }

    /**
     * Show the form for editing the specified MacroRegiao.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $macroRegiao = $this->macroRegiaoRepository->findWithoutFail($id);

        if (empty($macroRegiao)) {
            Flash::error('Macro Regiao not found');

            return redirect(route('macroRegiaos.index'));
        }

        return view('macro_regiaos.edit')->with('macroRegiao', $macroRegiao);
    }

    /**
     * Update the specified MacroRegiao in storage.
     *
     * @param  int              $id
     * @param UpdateMacroRegiaoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMacroRegiaoRequest $request)
    {
        $macroRegiao = $this->macroRegiaoRepository->findWithoutFail($id);

        if (empty($macroRegiao)) {
            Flash::error('Macro Regiao not found');

            return redirect(route('macroRegiaos.index'));
        }

        $macroRegiao = $this->macroRegiaoRepository->update($request->all(), $id);

        Flash::success('Macro Regiao updated successfully.');

        return redirect(route('macroRegiaos.index'));
    }

    /**
     * Remove the specified MacroRegiao from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $macroRegiao = $this->macroRegiaoRepository->findWithoutFail($id);

        if (empty($macroRegiao)) {
            Flash::error('Macro Regiao not found');

            return redirect(route('macroRegiaos.index'));
        }

        $this->macroRegiaoRepository->delete($id);

        Flash::success('Macro Regiao deleted successfully.');

        return redirect(route('macroRegiaos.index'));
    }
}
