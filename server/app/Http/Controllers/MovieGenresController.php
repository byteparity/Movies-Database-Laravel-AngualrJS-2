<?php

namespace App\Http\Controllers;

use App\DataTables\MovieGenresDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateMovieGenresRequest;
use App\Http\Requests\UpdateMovieGenresRequest;
use App\Repositories\MovieGenresRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class MovieGenresController extends AppBaseController
{
    /** @var  MovieGenresRepository */
    private $movieGenresRepository;

    public function __construct(MovieGenresRepository $movieGenresRepo)
    {
		$this->middleware(['auth']);
        $this->movieGenresRepository = $movieGenresRepo;
    }

    /**
     * Display a listing of the MovieGenres.
     *
     * @param MovieGenresDataTable $movieGenresDataTable
     * @return Response
     */
    public function index(MovieGenresDataTable $movieGenresDataTable)
    {
        return $movieGenresDataTable->render('movie_genres.index');
    }

    /**
     * Show the form for creating a new MovieGenres.
     *
     * @return Response
     */
    public function create()
    {
        $moviesListing = $this->movieGenresRepository->moviesListing();
        $genresListing = $this->movieGenresRepository->genresListing();
        return view('movie_genres.create')->with('moviesListing', $moviesListing)->with('genresListing', $genresListing);
    }

    /**
     * Store a newly created MovieGenres in storage.
     *
     * @param CreateMovieGenresRequest $request
     *
     * @return Response
     */
    public function store(CreateMovieGenresRequest $request)
    {
        $checkData['movie_id'] = $request->movie_id;
        $checkData['genre_id'] = $request->genre_id;
        $checkExistData = $this->movieGenresRepository->checkExistData($checkData);
        if($checkExistData==0){
            $input = $request->all();
            $movieGenres = $this->movieGenresRepository->create($input);
            Flash::success('Movie Genres saved successfully.');
            return redirect(route('movieGenres.index'));
        }else{
            Flash::error('Movie Genres already exist.');
            return redirect()->back();
        }  
    }

    /**
     * Display the specified MovieGenres.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $movieGenres = $this->movieGenresRepository->with(['movie', 'genre'])->findWithoutFail($id);

        if (empty($movieGenres)) {
            Flash::error('Movie Genres not found');
            return redirect(route('movieGenres.index'));
        }

        return view('movie_genres.show')->with('movieGenres', $movieGenres);
    }

    /**
     * Show the form for editing the specified MovieGenres.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $movieGenres = $this->movieGenresRepository->findWithoutFail($id);

        if (empty($movieGenres)) {
            Flash::error('Movie Genres not found');
            return redirect(route('movieGenres.index'));
        }

        $moviesListing = $this->movieGenresRepository->moviesListing();
        $genresListing = $this->movieGenresRepository->genresListing();
        return view('movie_genres.edit')->with('movieGenres', $movieGenres)->with('moviesListing', $moviesListing)->with('genresListing', $genresListing);
    }

    /**
     * Update the specified MovieGenres in storage.
     *
     * @param  int              $id
     * @param UpdateMovieGenresRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMovieGenresRequest $request)
    {
        $movieGenres = $this->movieGenresRepository->findWithoutFail($id);

        if (empty($movieGenres)) {
            Flash::error('Movie Genres not found');
            return redirect(route('movieGenres.index'));
        }

        $checkData['movie_id'] = $request->movie_id;
        $checkData['genre_id'] = $request->genre_id;
        $checkExistData = $this->movieGenresRepository->checkExistData($checkData, $id);
        if($checkExistData==0){
            $movieGenres = $this->movieGenresRepository->update($request->all(), $id);
            Flash::success('Movie Genres updated successfully.');
            return redirect(route('movieGenres.index'));
        }else{
            Flash::error('Movie people already exist.');
            return redirect()->back();
        }  
   
    }

    /**
     * Remove the specified MovieGenres from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $movieGenres = $this->movieGenresRepository->findWithoutFail($id);

        if (empty($movieGenres)) {
            Flash::error('Movie Genres not found');
            return redirect(route('movieGenres.index'));
        }

        $this->movieGenresRepository->delete($id);
        Flash::success('Movie Genres deleted successfully.');
        return redirect(route('movieGenres.index'));
    }
}
