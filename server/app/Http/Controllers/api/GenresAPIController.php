<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateGenresAPIRequest;
use App\Http\Requests\API\UpdateGenresAPIRequest;
use App\Models\Genres;
use App\Repositories\GenresRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Illuminate\Support\Facades\Input;

/**
 * Class GenresController
 * @package App\Http\Controllers\API
 */

class GenresAPIController extends AppBaseController
{
    /** @var  GenresRepository */
    private $genresRepository;

    public function __construct(GenresRepository $genresRepo)
    {
        $this->genresRepository = $genresRepo;
    }

    /**
     * Display a listing of the Genres.
     * GET|HEAD /genres
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
		$searchstr = Input::get('search');
		if($searchstr!=='undefined'){
			$this->genresRepository->pushCriteria(new RequestCriteria($request));
			$this->genresRepository->pushCriteria(new LimitOffsetCriteria($request));
			$genres = $this->genresRepository->genresDataApiOnSearch($searchstr);
		}else{
			$this->genresRepository->pushCriteria(new RequestCriteria($request));
			$this->genresRepository->pushCriteria(new LimitOffsetCriteria($request));
			$genres = $this->genresRepository->genresDataApi();
		}
		
        

        return $this->sendResponse($genres->toArray(), 'Genres retrieved successfully');
    }

    /**
     * Store a newly created Genres in storage.
     * POST /genres
     *
     * @param CreateGenresAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateGenresAPIRequest $request)
    {
        $input = $request->all();

        $genres = $this->genresRepository->create($input);

        return $this->sendResponse($genres->toArray(), 'Genres saved successfully');
    }

    /**
     * Display the specified Genres.
     * GET|HEAD /genres/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Genres $genres */
        //$genres = $this->genresRepository->findWithoutFail($id);
		$genres = $this->genresRepository->genresDataOnIdApi($id);

        if (empty($genres)) {
            return $this->sendError('Genres not found');
        }

        return $this->sendResponse($genres->toArray(), 'Genres retrieved successfully');
    }

    /**
     * Update the specified Genres in storage.
     * PUT/PATCH /genres/{id}
     *
     * @param  int $id
     * @param UpdateGenresAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGenresAPIRequest $request)
    {
        $input = $request->all();

        /** @var Genres $genres */
        $genres = $this->genresRepository->findWithoutFail($id);

        if (empty($genres)) {
            return $this->sendError('Genres not found');
        }

        $genres = $this->genresRepository->update($input, $id);

        return $this->sendResponse($genres->toArray(), 'Genres updated successfully');
    }

    /**
     * Remove the specified Genres from storage.
     * DELETE /genres/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Genres $genres */
        $genres = $this->genresRepository->findWithoutFail($id);

        if (empty($genres)) {
            return $this->sendError('Genres not found');
        }

        $genres->delete();

        return $this->sendResponse($id, 'Genres deleted successfully');
    }
}
