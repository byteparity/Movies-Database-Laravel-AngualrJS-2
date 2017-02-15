<?php

namespace App\Http\Controllers;

use App\DataTables\MovieReviewsDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateMovieReviewsRequest;
use App\Http\Requests\UpdateMovieReviewsRequest;
use App\Repositories\MovieReviewsRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class MovieReviewsController extends AppBaseController
{
    /** @var  MovieReviewsRepository */
    private $movieReviewsRepository;

    public function __construct(MovieReviewsRepository $movieReviewsRepo)
    {
		$this->middleware(['auth']);
        $this->movieReviewsRepository = $movieReviewsRepo;
    }

    /**
     * Display a listing of the MovieReviews.
     *
     * @param MovieReviewsDataTable $movieReviewsDataTable
     * @return Response
     */
    public function index(MovieReviewsDataTable $movieReviewsDataTable)
    {
        return $movieReviewsDataTable->render('movie_reviews.index');
    }

    /**
     * Show the form for creating a new MovieReviews.
     *
     * @return Response
     */
    public function create()
    {
        $moviesListing = $this->movieReviewsRepository->moviesListing();
        $usersListing = $this->movieReviewsRepository->usersListing();
        return view('movie_reviews.create')->with('moviesListing', $moviesListing)->with('usersListing', $usersListing);
    }

    /**
     * Store a newly created MovieReviews in storage.
     *
     * @param CreateMovieReviewsRequest $request
     *
     * @return Response
     */
    public function store(CreateMovieReviewsRequest $request)
    {
        $checkData['movie_id'] = $request->movie_id;
        $checkData['user_id'] = $request->user_id;
        $checkExistData = $this->movieReviewsRepository->checkExistData($checkData);
        if($checkExistData==0){
            $input = $request->all();
            $movieReviews = $this->movieReviewsRepository->create($input);
            Flash::success('Movie Reviews saved successfully.');
            return redirect(route('movieReviews.index'));
        }else{
            Flash::error('Movie Review already exist.');
            return redirect()->back();
        }  
    }

    /**
     * Display the specified MovieReviews.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $movieReviews = $this->movieReviewsRepository->with(['movie', 'user'])->findWithoutFail($id);

        if (empty($movieReviews)) {
            Flash::error('Movie Reviews not found');
            return redirect(route('movieReviews.index'));
        }

        return view('movie_reviews.show')->with('movieReviews', $movieReviews);
    }

    /**
     * Show the form for editing the specified MovieReviews.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $movieReviews = $this->movieReviewsRepository->findWithoutFail($id);
        if (empty($movieReviews)) {
            Flash::error('Movie Reviews not found');
            return redirect(route('movieReviews.index'));
        }

        $moviesListing = $this->movieReviewsRepository->moviesListing();
        $usersListing = $this->movieReviewsRepository->usersListing();
        return view('movie_reviews.edit')->with('movieReviews', $movieReviews)->with('moviesListing', $moviesListing)->with('usersListing', $usersListing);
    }

    /**
     * Update the specified MovieReviews in storage.
     *
     * @param  int              $id
     * @param UpdateMovieReviewsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMovieReviewsRequest $request)
    {
        $movieReviews = $this->movieReviewsRepository->findWithoutFail($id);

        if (empty($movieReviews)) {
            Flash::error('Movie Reviews not found');
            return redirect(route('movieReviews.index'));
        }

        $checkData['movie_id'] = $request->movie_id;
        $checkData['user_id'] = $request->user_id;
        $checkExistData = $this->movieReviewsRepository->checkExistData($checkData, $id);
        if($checkExistData==0){
            $movieReviews = $this->movieReviewsRepository->update($request->all(), $id);
            Flash::success('Movie Reviews updated successfully.');
            return redirect(route('movieReviews.index'));
        }else{
            Flash::error('Movie Review already exist.');
            return redirect()->back();
        }

        
    }

    /**
     * Remove the specified MovieReviews from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $movieReviews = $this->movieReviewsRepository->findWithoutFail($id);

        if (empty($movieReviews)) {
            Flash::error('Movie Reviews not found');
            return redirect(route('movieReviews.index'));
        }

        $this->movieReviewsRepository->delete($id);
        Flash::success('Movie Reviews deleted successfully.');
        return redirect(route('movieReviews.index'));
    }
}
