<?php

namespace App\Http\Controllers;

use App\DataTables\ProffessionsDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateProffessionsRequest;
use App\Http\Requests\UpdateProffessionsRequest;
use App\Repositories\ProffessionsRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class ProffessionsController extends AppBaseController
{
    /** @var  ProffessionsRepository */
    private $proffessionsRepository;

    public function __construct(ProffessionsRepository $proffessionsRepo)
    {
		$this->middleware(['auth']);
        $this->proffessionsRepository = $proffessionsRepo;
    }

    /**
     * Display a listing of the Proffessions.
     *
     * @param ProffessionsDataTable $proffessionsDataTable
     * @return Response
     */
    public function index(ProffessionsDataTable $proffessionsDataTable)
    {
        return $proffessionsDataTable->render('proffessions.index');
    }

    /**
     * Show the form for creating a new Proffessions.
     *
     * @return Response
     */
    public function create()
    {
        return view('proffessions.create');
    }

    /**
     * Store a newly created Proffessions in storage.
     *
     * @param CreateProffessionsRequest $request
     *
     * @return Response
     */
    public function store(CreateProffessionsRequest $request)
    {
        $p_type = $request->proffession_type;
        $checkExistData = $this->proffessionsRepository->checkExistData($p_type);
        if($checkExistData==0){
           
            $input = $request->all();
            $proffessions = $this->proffessionsRepository->create($input);
            Flash::success('Proffessions saved successfully.');
            return redirect(route('proffessions.index'));
           
        }else{
             Flash::error('proffessions already exist.');
             return redirect()->back();
        }
    }

    /**
     * Display the specified Proffessions.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $proffessions = $this->proffessionsRepository->findWithoutFail($id);

        if (empty($proffessions)) {
            Flash::error('Proffessions not found');

            return redirect(route('proffessions.index'));
        }

        return view('proffessions.show')->with('proffessions', $proffessions);
    }

    /**
     * Show the form for editing the specified Proffessions.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $proffessions = $this->proffessionsRepository->findWithoutFail($id);

        if (empty($proffessions)) {
            Flash::error('Proffessions not found');

            return redirect(route('proffessions.index'));
        }

        return view('proffessions.edit')->with('proffessions', $proffessions);
    }

    /**
     * Update the specified Proffessions in storage.
     *
     * @param  int              $id
     * @param UpdateProffessionsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProffessionsRequest $request)
    {
        $proffessions = $this->proffessionsRepository->findWithoutFail($id);
        if (empty($proffessions)) {
            Flash::error('Proffessions not found');
            return redirect(route('proffessions.index'));
        }

        $p_type = $request->proffession_type;
        $checkExistData = $this->proffessionsRepository->checkExistData($p_type, $id);
        if($checkExistData==0){

            $proffessions = $this->proffessionsRepository->update($request->all(), $id);
            Flash::success('Proffessions updated successfully.');
            return redirect(route('proffessions.index'));

        }else{
            Flash::error('proffessions already exist.');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified Proffessions from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $proffessions = $this->proffessionsRepository->findWithoutFail($id);

        if (empty($proffessions)) {
            Flash::error('Proffessions not found');

            return redirect(route('proffessions.index'));
        }

        $this->proffessionsRepository->delete($id);

        Flash::success('Proffessions deleted successfully.');

        return redirect(route('proffessions.index'));
    }
}
