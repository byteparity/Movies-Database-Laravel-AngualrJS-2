<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatePeoplesAPIRequest;
use App\Http\Requests\API\UpdatePeoplesAPIRequest;
use App\Models\Peoples;
use App\Repositories\PeoplesRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Illuminate\Support\Facades\Input;

/**
 * Class PeoplesController
 * @package App\Http\Controllers\API
 */

class PeoplesAPIController extends AppBaseController
{
    /** @var  PeoplesRepository */
    private $peoplesRepository;

    public function __construct(PeoplesRepository $peoplesRepo)
    {
        $this->peoplesRepository = $peoplesRepo;
    }

    /**
     * Display a listing of the Peoples.
     * GET|HEAD /peoples
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
		$searchstr = Input::get('search');
		if($searchstr!=='undefined'){
			$this->peoplesRepository->pushCriteria(new RequestCriteria($request));
			$this->peoplesRepository->pushCriteria(new LimitOffsetCriteria($request));
			$peoples = $this->peoplesRepository->peopleDataApiOnSearch($searchstr);
		}else{
			$this->peoplesRepository->pushCriteria(new RequestCriteria($request));
			$this->peoplesRepository->pushCriteria(new LimitOffsetCriteria($request));
			$peoples = $this->peoplesRepository->peopleDataApi();
		}
		
		return $this->sendResponse($peoples->toArray(), 'Peoples retrieved successfully');
    }

    /**
     * Store a newly created Peoples in storage.
     * POST /peoples
     *
     * @param CreatePeoplesAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatePeoplesAPIRequest $request)
    {
        $input = $request->all();

        $peoples = $this->peoplesRepository->create($input);

        return $this->sendResponse($peoples->toArray(), 'Peoples saved successfully');
    }

    /**
     * Display the specified Peoples.
     * GET|HEAD /peoples/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Peoples $peoples */
        //$peoples = $this->peoplesRepository->findWithoutFail($id);
		$peoples = $this->peoplesRepository->peopleDataOnIdApi($id);

        if (empty($peoples)) {
            return $this->sendError('Peoples not found');
        }

        return $this->sendResponse($peoples->toArray(), 'Peoples retrieved successfully');
    }

    /**
     * Update the specified Peoples in storage.
     * PUT/PATCH /peoples/{id}
     *
     * @param  int $id
     * @param UpdatePeoplesAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePeoplesAPIRequest $request)
    {
        $input = $request->all();

        /** @var Peoples $peoples */
        $peoples = $this->peoplesRepository->findWithoutFail($id);

        if (empty($peoples)) {
            return $this->sendError('Peoples not found');
        }

        $peoples = $this->peoplesRepository->update($input, $id);

        return $this->sendResponse($peoples->toArray(), 'Peoples updated successfully');
    }

    /**
     * Remove the specified Peoples from storage.
     * DELETE /peoples/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Peoples $peoples */
        $peoples = $this->peoplesRepository->findWithoutFail($id);

        if (empty($peoples)) {
            return $this->sendError('Peoples not found');
        }

        $peoples->delete();

        return $this->sendResponse($id, 'Peoples deleted successfully');
    }
}
