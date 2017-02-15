<?php

namespace App\Http\Controllers;

use App\DataTables\GenresDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateGenresRequest;
use App\Http\Requests\UpdateGenresRequest;
use App\Repositories\GenresRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class GenresController extends AppBaseController
{
    /** @var  GenresRepository */
    private $genresRepository;

    public function __construct(GenresRepository $genresRepo)
    {
        $this->middleware(['auth']);
        $this->genresRepository = $genresRepo;
    }

    /**
     * Display a listing of the Genres.
     *
     * @param GenresDataTable $genresDataTable
     * @return Response
     */
    public function index(GenresDataTable $genresDataTable)
    {
        return $genresDataTable->render('genres.index');
    }

    /**
     * Show the form for creating a new Genres.
     *
     * @return Response
     */
    public function create()
    {
        return view('genres.create');
    }

    /**
     * Store a newly created Genres in storage.
     *
     * @param CreateGenresRequest $request
     *
     * @return Response
     */
    public function store(CreateGenresRequest $request)
    {
        $g_type = $request->genre_type;
        $checkExistData = $this->genresRepository->checkExistData($g_type);
        if($checkExistData==0){
           
            $input = $request->all();
            $genres = $this->genresRepository->create($input);
            Flash::success('Genres saved successfully.');
            return redirect(route('genres.index'));
           
        }else{
             Flash::error('Genres already exist.');
             return redirect()->back();
        }
    }

    /**
     * Display the specified Genres.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $genres = $this->genresRepository->findWithoutFail($id);

        if (empty($genres)) {
            Flash::error('Genres not found');

            return redirect(route('genres.index'));
        }

        return view('genres.show')->with('genres', $genres);
    }

    /**
     * Show the form for editing the specified Genres.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $genres = $this->genresRepository->findWithoutFail($id);

        if (empty($genres)) {
            Flash::error('Genres not found');

            return redirect(route('genres.index'));
        }

        return view('genres.edit')->with('genres', $genres);
    }

    /**
     * Update the specified Genres in storage.
     *
     * @param  int              $id
     * @param UpdateGenresRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGenresRequest $request)
    {
        $genres = $this->genresRepository->findWithoutFail($id);
        if (empty($genres)) {
            Flash::error('Genres not found');
            return redirect(route('genres.index'));
        }

        $g_type = $request->genre_type;
        $checkExistData = $this->genresRepository->checkExistData($g_type, $id);
        if($checkExistData==0){

            $proffessions = $this->genresRepository->update($request->all(), $id);
            Flash::success('Genres updated successfully.');
            return redirect(route('genres.index'));

        }else{
            Flash::error('Genres already exist.');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified Genres from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $genres = $this->genresRepository->findWithoutFail($id);

        if (empty($genres)) {
            Flash::error('Genres not found');

            return redirect(route('genres.index'));
        }

        $this->genresRepository->delete($id);

        Flash::success('Genres deleted successfully.');

        return redirect(route('genres.index'));
    }
}
