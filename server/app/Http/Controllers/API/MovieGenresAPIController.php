<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateMovieGenresAPIRequest;
use App\Http\Requests\API\UpdateMovieGenresAPIRequest;
use App\Models\MovieGenres;
use App\Repositories\MovieGenresRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class MovieGenresController
 * @package App\Http\Controllers\API
 */

class MovieGenresAPIController extends AppBaseController
{
    /** @var  MovieGenresRepository */
    private $movieGenresRepository;

    public function __construct(MovieGenresRepository $movieGenresRepo)
    {
        $this->movieGenresRepository = $movieGenresRepo;
    }

    /**
     * Display a listing of the MovieGenres.
     * GET|HEAD /movieGenres
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->movieGenresRepository->pushCriteria(new RequestCriteria($request));
        $this->movieGenresRepository->pushCriteria(new LimitOffsetCriteria($request));
        $movieGenres = $this->movieGenresRepository->all();

        return $this->sendResponse($movieGenres->toArray(), 'Movie Genres retrieved successfully');
    }

    /**
     * Store a newly created MovieGenres in storage.
     * POST /movieGenres
     *
     * @param CreateMovieGenresAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateMovieGenresAPIRequest $request)
    {
        $input = $request->all();

        $movieGenres = $this->movieGenresRepository->create($input);

        return $this->sendResponse($movieGenres->toArray(), 'Movie Genres saved successfully');
    }

    /**
     * Display the specified MovieGenres.
     * GET|HEAD /movieGenres/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var MovieGenres $movieGenres */
        $movieGenres = $this->movieGenresRepository->findWithoutFail($id);

        if (empty($movieGenres)) {
            return $this->sendError('Movie Genres not found');
        }

        return $this->sendResponse($movieGenres->toArray(), 'Movie Genres retrieved successfully');
    }

    /**
     * Update the specified MovieGenres in storage.
     * PUT/PATCH /movieGenres/{id}
     *
     * @param  int $id
     * @param UpdateMovieGenresAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMovieGenresAPIRequest $request)
    {
        $input = $request->all();

        /** @var MovieGenres $movieGenres */
        $movieGenres = $this->movieGenresRepository->findWithoutFail($id);

        if (empty($movieGenres)) {
            return $this->sendError('Movie Genres not found');
        }

        $movieGenres = $this->movieGenresRepository->update($input, $id);

        return $this->sendResponse($movieGenres->toArray(), 'MovieGenres updated successfully');
    }

    /**
     * Remove the specified MovieGenres from storage.
     * DELETE /movieGenres/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var MovieGenres $movieGenres */
        $movieGenres = $this->movieGenresRepository->findWithoutFail($id);

        if (empty($movieGenres)) {
            return $this->sendError('Movie Genres not found');
        }

        $movieGenres->delete();

        return $this->sendResponse($id, 'Movie Genres deleted successfully');
    }
}
