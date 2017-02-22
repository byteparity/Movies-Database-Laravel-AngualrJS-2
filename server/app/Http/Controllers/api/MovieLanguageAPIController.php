<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateMovieLanguageAPIRequest;
use App\Http\Requests\API\UpdateMovieLanguageAPIRequest;
use App\Models\MovieLanguage;
use App\Repositories\MovieLanguageRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class MovieLanguageController
 * @package App\Http\Controllers\API
 */

class MovieLanguageAPIController extends AppBaseController
{
    /** @var  MovieLanguageRepository */
    private $movieLanguageRepository;

    public function __construct(MovieLanguageRepository $movieLanguageRepo)
    {
        $this->movieLanguageRepository = $movieLanguageRepo;
    }

    /**
     * Display a listing of the MovieLanguage.
     * GET|HEAD /movieLanguages
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->movieLanguageRepository->pushCriteria(new RequestCriteria($request));
        $this->movieLanguageRepository->pushCriteria(new LimitOffsetCriteria($request));
        $movieLanguages = $this->movieLanguageRepository->all();

        return $this->sendResponse($movieLanguages->toArray(), 'Movie Languages retrieved successfully');
    }

    /**
     * Store a newly created MovieLanguage in storage.
     * POST /movieLanguages
     *
     * @param CreateMovieLanguageAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateMovieLanguageAPIRequest $request)
    {
        $input = $request->all();

        $movieLanguages = $this->movieLanguageRepository->create($input);

        return $this->sendResponse($movieLanguages->toArray(), 'Movie Language saved successfully');
    }

    /**
     * Display the specified MovieLanguage.
     * GET|HEAD /movieLanguages/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var MovieLanguage $movieLanguage */
        $movieLanguage = $this->movieLanguageRepository->findWithoutFail($id);

        if (empty($movieLanguage)) {
            return $this->sendError('Movie Language not found');
        }

        return $this->sendResponse($movieLanguage->toArray(), 'Movie Language retrieved successfully');
    }

    /**
     * Update the specified MovieLanguage in storage.
     * PUT/PATCH /movieLanguages/{id}
     *
     * @param  int $id
     * @param UpdateMovieLanguageAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMovieLanguageAPIRequest $request)
    {
        $input = $request->all();

        /** @var MovieLanguage $movieLanguage */
        $movieLanguage = $this->movieLanguageRepository->findWithoutFail($id);

        if (empty($movieLanguage)) {
            return $this->sendError('Movie Language not found');
        }

        $movieLanguage = $this->movieLanguageRepository->update($input, $id);

        return $this->sendResponse($movieLanguage->toArray(), 'MovieLanguage updated successfully');
    }

    /**
     * Remove the specified MovieLanguage from storage.
     * DELETE /movieLanguages/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var MovieLanguage $movieLanguage */
        $movieLanguage = $this->movieLanguageRepository->findWithoutFail($id);

        if (empty($movieLanguage)) {
            return $this->sendError('Movie Language not found');
        }

        $movieLanguage->delete();

        return $this->sendResponse($id, 'Movie Language deleted successfully');
    }
}
