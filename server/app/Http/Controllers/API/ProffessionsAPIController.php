<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateProffessionsAPIRequest;
use App\Http\Requests\API\UpdateProffessionsAPIRequest;
use App\Models\Proffessions;
use App\Repositories\ProffessionsRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Illuminate\Support\Facades\Input;

/**
 * Class ProffessionsController
 * @package App\Http\Controllers\API
 */

class ProffessionsAPIController extends AppBaseController
{
    /** @var  ProffessionsRepository */
    private $proffessionsRepository;

    public function __construct(ProffessionsRepository $proffessionsRepo)
    {
        $this->proffessionsRepository = $proffessionsRepo;
    }

    /**
     * Display a listing of the Proffessions.
     * GET|HEAD /proffessions
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
		$searchstr = Input::get('search');
		if($searchstr!=='undefined'){ 
			$this->proffessionsRepository->pushCriteria(new RequestCriteria($request));
			$this->proffessionsRepository->pushCriteria(new LimitOffsetCriteria($request));
			$proffessions = $this->proffessionsRepository->proffessionDataOnApiSearch($searchstr);
		}else{
			$this->proffessionsRepository->pushCriteria(new RequestCriteria($request));
			$this->proffessionsRepository->pushCriteria(new LimitOffsetCriteria($request));
			$proffessions = $this->proffessionsRepository->proffessionDataApi();
		}

        return $this->sendResponse($proffessions->toArray(), 'Proffessions retrieved successfully');
    }

    /**
     * Store a newly created Proffessions in storage.
     * POST /proffessions
     *
     * @param CreateProffessionsAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateProffessionsAPIRequest $request)
    {
        $input = $request->all();

        $proffessions = $this->proffessionsRepository->create($input);

        return $this->sendResponse($proffessions->toArray(), 'Proffessions saved successfully');
    }

    /**
     * Display the specified Proffessions.
     * GET|HEAD /proffessions/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Proffessions $proffessions */
        //$proffessions = $this->proffessionsRepository->findWithoutFail($id);
		$proffessions = $this->proffessionsRepository->proffessionDataOnIdApi($id);

        if (empty($proffessions)) {
            return $this->sendError('Proffessions not found');
        }

        return $this->sendResponse($proffessions->toArray(), 'Proffessions retrieved successfully');
    }

    /**
     * Update the specified Proffessions in storage.
     * PUT/PATCH /proffessions/{id}
     *
     * @param  int $id
     * @param UpdateProffessionsAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProffessionsAPIRequest $request)
    {
        $input = $request->all();

        /** @var Proffessions $proffessions */
        $proffessions = $this->proffessionsRepository->findWithoutFail($id);

        if (empty($proffessions)) {
            return $this->sendError('Proffessions not found');
        }

        $proffessions = $this->proffessionsRepository->update($input, $id);

        return $this->sendResponse($proffessions->toArray(), 'Proffessions updated successfully');
    }

    /**
     * Remove the specified Proffessions from storage.
     * DELETE /proffessions/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Proffessions $proffessions */
        $proffessions = $this->proffessionsRepository->findWithoutFail($id);

        if (empty($proffessions)) {
            return $this->sendError('Proffessions not found');
        }

        $proffessions->delete();

        return $this->sendResponse($id, 'Proffessions deleted successfully');
    }
}
