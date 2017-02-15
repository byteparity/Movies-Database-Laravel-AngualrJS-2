<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateMoviePeoplesAPIRequest;
use App\Http\Requests\API\UpdateMoviePeoplesAPIRequest;
use App\Models\MoviePeoples;
use App\Repositories\MoviePeoplesRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class MoviePeoplesController
 * @package App\Http\Controllers\API
 */

class MoviePeoplesAPIController extends AppBaseController
{
    /** @var  MoviePeoplesRepository */
    private $moviePeoplesRepository;

    public function __construct(MoviePeoplesRepository $moviePeoplesRepo)
    {
        $this->moviePeoplesRepository = $moviePeoplesRepo;
    }

    /**
     * Display a listing of the MoviePeoples.
     * GET|HEAD /moviePeoples
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->moviePeoplesRepository->pushCriteria(new RequestCriteria($request));
        $this->moviePeoplesRepository->pushCriteria(new LimitOffsetCriteria($request));
        $moviePeoples = $this->moviePeoplesRepository->all();

        return $this->sendResponse($moviePeoples->toArray(), 'Movie Peoples retrieved successfully');
    }

    /**
     * Store a newly created MoviePeoples in storage.
     * POST /moviePeoples
     *
     * @param CreateMoviePeoplesAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateMoviePeoplesAPIRequest $request)
    {
        $input = $request->all();

        $moviePeoples = $this->moviePeoplesRepository->create($input);

        return $this->sendResponse($moviePeoples->toArray(), 'Movie Peoples saved successfully');
    }

    /**
     * Display the specified MoviePeoples.
     * GET|HEAD /moviePeoples/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var MoviePeoples $moviePeoples */
        $moviePeoples = $this->moviePeoplesRepository->findWithoutFail($id);

        if (empty($moviePeoples)) {
            return $this->sendError('Movie Peoples not found');
        }

        return $this->sendResponse($moviePeoples->toArray(), 'Movie Peoples retrieved successfully');
    }

    /**
     * Update the specified MoviePeoples in storage.
     * PUT/PATCH /moviePeoples/{id}
     *
     * @param  int $id
     * @param UpdateMoviePeoplesAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMoviePeoplesAPIRequest $request)
    {
        $input = $request->all();

        /** @var MoviePeoples $moviePeoples */
        $moviePeoples = $this->moviePeoplesRepository->findWithoutFail($id);

        if (empty($moviePeoples)) {
            return $this->sendError('Movie Peoples not found');
        }

        $moviePeoples = $this->moviePeoplesRepository->update($input, $id);

        return $this->sendResponse($moviePeoples->toArray(), 'MoviePeoples updated successfully');
    }

    /**
     * Remove the specified MoviePeoples from storage.
     * DELETE /moviePeoples/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var MoviePeoples $moviePeoples */
        $moviePeoples = $this->moviePeoplesRepository->findWithoutFail($id);

        if (empty($moviePeoples)) {
            return $this->sendError('Movie Peoples not found');
        }

        $moviePeoples->delete();

        return $this->sendResponse($id, 'Movie Peoples deleted successfully');
    }
}
