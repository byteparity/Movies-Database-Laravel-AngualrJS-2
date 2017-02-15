<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateMovieReviewsAPIRequest;
use App\Http\Requests\API\UpdateMovieReviewsAPIRequest;
use App\Models\MovieReviews;
use App\Repositories\MovieReviewsRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class MovieReviewsController
 * @package App\Http\Controllers\API
 */

class MovieReviewsAPIController extends AppBaseController
{
    /** @var  MovieReviewsRepository */
    private $movieReviewsRepository;

    public function __construct(MovieReviewsRepository $movieReviewsRepo)
    {
        $this->movieReviewsRepository = $movieReviewsRepo;
    }

    /**
     * Display a listing of the MovieReviews.
     * GET|HEAD /movieReviews
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->movieReviewsRepository->pushCriteria(new RequestCriteria($request));
        $this->movieReviewsRepository->pushCriteria(new LimitOffsetCriteria($request));
        $movieReviews = $this->movieReviewsRepository->all();

        return $this->sendResponse($movieReviews->toArray(), 'Movie Reviews retrieved successfully');
    }

    /**
     * Store a newly created MovieReviews in storage.
     * POST /movieReviews
     *
     * @param CreateMovieReviewsAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateMovieReviewsAPIRequest $request)
    {
        $input = $request->all();

        $movieReviews = $this->movieReviewsRepository->create($input);

        return $this->sendResponse($movieReviews->toArray(), 'Movie Reviews saved successfully');
    }

    /**
     * Display the specified MovieReviews.
     * GET|HEAD /movieReviews/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var MovieReviews $movieReviews */
        $movieReviews = $this->movieReviewsRepository->findWithoutFail($id);

        if (empty($movieReviews)) {
            return $this->sendError('Movie Reviews not found');
        }

        return $this->sendResponse($movieReviews->toArray(), 'Movie Reviews retrieved successfully');
    }

    /**
     * Update the specified MovieReviews in storage.
     * PUT/PATCH /movieReviews/{id}
     *
     * @param  int $id
     * @param UpdateMovieReviewsAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMovieReviewsAPIRequest $request)
    {
        $input = $request->all();

        /** @var MovieReviews $movieReviews */
        $movieReviews = $this->movieReviewsRepository->findWithoutFail($id);

        if (empty($movieReviews)) {
            return $this->sendError('Movie Reviews not found');
        }

        $movieReviews = $this->movieReviewsRepository->update($input, $id);

        return $this->sendResponse($movieReviews->toArray(), 'MovieReviews updated successfully');
    }

    /**
     * Remove the specified MovieReviews from storage.
     * DELETE /movieReviews/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var MovieReviews $movieReviews */
        $movieReviews = $this->movieReviewsRepository->findWithoutFail($id);

        if (empty($movieReviews)) {
            return $this->sendError('Movie Reviews not found');
        }

        $movieReviews->delete();

        return $this->sendResponse($id, 'Movie Reviews deleted successfully');
    }
}
