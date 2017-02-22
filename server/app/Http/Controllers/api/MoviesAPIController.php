<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateMoviesAPIRequest;
use App\Http\Requests\API\UpdateMoviesAPIRequest;
use App\Models\Movies;
use App\Repositories\MoviesRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Illuminate\Support\Facades\Input;

/**
 * Class MoviesController
 * @package App\Http\Controllers\API
 */

class MoviesAPIController extends AppBaseController
{
    /** @var  MoviesRepository */
    private $moviesRepository;

    public function __construct(MoviesRepository $moviesRepo)
    {
        $this->moviesRepository = $moviesRepo;
    }

    /**
     * Display a listing of the Movies.
     * GET|HEAD /movies
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
		$searchstr = Input::get('search');
		if($searchstr!=='undefined'){
			$this->moviesRepository->pushCriteria(new RequestCriteria($request));
			$this->moviesRepository->pushCriteria(new LimitOffsetCriteria($request));
			$movies = $this->moviesRepository->moviesDataApiOnSearch($searchstr);
		}else{
			
			$this->moviesRepository->pushCriteria(new RequestCriteria($request));
			$this->moviesRepository->pushCriteria(new LimitOffsetCriteria($request));
			$movies = $this->moviesRepository->moviesDataApi();
		}
       
        return $this->sendResponse($movies->toArray(), 'Movies retrieved successfully');
    }

    /**
     * Store a newly created Movies in storage.
     * POST /movies
     *
     * @param CreateMoviesAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateMoviesAPIRequest $request)
    {
        $input = $request->all();

        $movies = $this->moviesRepository->create($input);

        return $this->sendResponse($movies->toArray(), 'Movies saved successfully');
    }

    /**
     * Display the specified Movies.
     * GET|HEAD /movies/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Movies $movies */
        //$movies = $this->moviesRepository->findWithoutFail($id);
        $movies = $this->moviesRepository->moviesDataOnIdApi($id);

        if (empty($movies)) {
            return $this->sendError('Movies not found');
        }

        return $this->sendResponse($movies->toArray(), 'Movies retrieved successfully');
    }

    /**
     * Update the specified Movies in storage.
     * PUT/PATCH /movies/{id}
     *
     * @param  int $id
     * @param UpdateMoviesAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMoviesAPIRequest $request)
    {
        $input = $request->all();

        /** @var Movies $movies */
        $movies = $this->moviesRepository->moviesDataOnIdApi($id);

        if (empty($movies)) {
            return $this->sendError('Movies not found');
        }

        $movies = $this->moviesRepository->update($input, $id);

        return $this->sendResponse($movies->toArray(), 'Movies updated successfully');
    }

    /**
     * Remove the specified Movies from storage.
     * DELETE /movies/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $movies = $this->moviesRepository->moviesDataOnIdApi($id);

        if (empty($movies)) {
            return $this->sendError('Movies not found');
        }

        $movies->delete();

        return $this->sendResponse($id, 'Movies deleted successfully');
    }
}
