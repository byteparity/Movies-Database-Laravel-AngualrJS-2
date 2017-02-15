<?php

namespace App\Http\Controllers;

use App\DataTables\MoviePeoplesDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateMoviePeoplesRequest;
use App\Http\Requests\UpdateMoviePeoplesRequest;
use App\Repositories\MoviePeoplesRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class MoviePeoplesController extends AppBaseController
{
    /** @var  MoviePeoplesRepository */
    private $moviePeoplesRepository;

    public function __construct(MoviePeoplesRepository $moviePeoplesRepo)
    {
		$this->middleware(['auth']);
        $this->moviePeoplesRepository = $moviePeoplesRepo;
    }

    /**
     * Display a listing of the MoviePeoples.
     *
     * @param MoviePeoplesDataTable $moviePeoplesDataTable
     * @return Response
     */
    public function index(MoviePeoplesDataTable $moviePeoplesDataTable)
    {
        return $moviePeoplesDataTable->render('movie_peoples.index');
    }

    /**
     * Show the form for creating a new MoviePeoples.
     *
     * @return Response
     */
    public function create()
    {
        $moviesListing = $this->moviePeoplesRepository->moviesListing();
        $peoplesListing = $this->moviePeoplesRepository->peoplesListing();
        $proffessionListing = $this->moviePeoplesRepository->proffessionListing();
        return view('movie_peoples.create')->with('moviesListing', $moviesListing)->with('peoplesListing', $peoplesListing)->with('proffessionListing', $proffessionListing);
    }

    /**
     * Store a newly created MoviePeoples in storage.
     *
     * @param CreateMoviePeoplesRequest $request
     *
     * @return Response
     */
    public function store(CreateMoviePeoplesRequest $request)
    {
        $checkData['movie_id'] = $request->movie_id;
        $checkData['people_id'] = $request->people_id;
        $checkData['proffession_id'] = $request->proffession_id;
        $checkData['name_in_movie'] = $request->name_in_movie;
        $checkExistData = $this->moviePeoplesRepository->checkExistData($checkData);
        if($checkExistData==0){
            $input = $request->all();
            $moviePeoples = $this->moviePeoplesRepository->create($input);
            Flash::success('Movie Peoples saved successfully.');
            return redirect(route('moviePeoples.index'));
        }else{
            Flash::error('Movie people already exist.');
            return redirect()->back();
        }
    }

    /**
     * Display the specified MoviePeoples.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $moviePeoples = $this->moviePeoplesRepository->with(['movie', 'people', 'proffession'])->findWithoutFail($id);
        if (empty($moviePeoples)) {
            Flash::error('Movie Peoples not found');
            return redirect(route('moviePeoples.index'));
        }
        return view('movie_peoples.show')->with('moviePeoples', $moviePeoples);
    }

    /**
     * Show the form for editing the specified MoviePeoples.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $moviePeoples = $this->moviePeoplesRepository->findWithoutFail($id);
        if (empty($moviePeoples)) {
            Flash::error('Movie Peoples not found');
            return redirect(route('moviePeoples.index'));
        }

        $moviesListing = $this->moviePeoplesRepository->moviesListing();
        $peoplesListing = $this->moviePeoplesRepository->peoplesListing();
        $proffessionListing = $this->moviePeoplesRepository->proffessionListing();
        return view('movie_peoples.edit')->with('moviePeoples', $moviePeoples)->with('moviesListing', $moviesListing)->with('peoplesListing', $peoplesListing)->with('proffessionListing', $proffessionListing);
    }

    /**
     * Update the specified MoviePeoples in storage.
     *
     * @param  int              $id
     * @param UpdateMoviePeoplesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMoviePeoplesRequest $request)
    {
        $moviePeoples = $this->moviePeoplesRepository->findWithoutFail($id);
        if (empty($moviePeoples)) {
            Flash::error('Movie Peoples not found');
            return redirect(route('moviePeoples.index'));
        }

        $checkData['movie_id'] = $request->movie_id;
        $checkData['people_id'] = $request->people_id;
        $checkData['proffession_id'] = $request->proffession_id;
        $checkData['name_in_movie'] = $request->name_in_movie;
        $checkExistData = $this->moviePeoplesRepository->checkExistData($checkData, $id);
        if($checkExistData==0){
            $moviePeoples = $this->moviePeoplesRepository->update($request->all(), $id);
            Flash::success('Movie Peoples updated successfully.');
            return redirect(route('moviePeoples.index'));
        }else{
            Flash::error('Movie people already exist.');
            return redirect()->back();
        }  
    }

    /**
     * Remove the specified MoviePeoples from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $moviePeoples = $this->moviePeoplesRepository->findWithoutFail($id);

        if (empty($moviePeoples)) {
            Flash::error('Movie Peoples not found');
            return redirect(route('moviePeoples.index'));
        }

        $this->moviePeoplesRepository->delete($id);
        Flash::success('Movie Peoples deleted successfully.');
        return redirect(route('moviePeoples.index'));
    }
}
