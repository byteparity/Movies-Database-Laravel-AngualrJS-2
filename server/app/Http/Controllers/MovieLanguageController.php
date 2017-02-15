<?php

namespace App\Http\Controllers;

use App\DataTables\MovieLanguageDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateMovieLanguageRequest;
use App\Http\Requests\UpdateMovieLanguageRequest;
use App\Repositories\MovieLanguageRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class MovieLanguageController extends AppBaseController
{
    /** @var  MovieLanguageRepository */
    private $movieLanguageRepository;

    public function __construct(MovieLanguageRepository $movieLanguageRepo)
    {
        $this->movieLanguageRepository = $movieLanguageRepo;
    }

    /**
     * Display a listing of the MovieLanguage.
     *
     * @param MovieLanguageDataTable $movieLanguageDataTable
     * @return Response
     */
    public function index(MovieLanguageDataTable $movieLanguageDataTable)
    {
        return $movieLanguageDataTable->render('movie_languages.index');
    }

    /**
     * Show the form for creating a new MovieLanguage.
     *
     * @return Response
     */
    public function create()
    {
        return view('movie_languages.create');
    }

    /**
     * Store a newly created MovieLanguage in storage.
     *
     * @param CreateMovieLanguageRequest $request
     *
     * @return Response
     */
    public function store(CreateMovieLanguageRequest $request)
    {
        $input = $request->all();

        $movieLanguage = $this->movieLanguageRepository->create($input);

        Flash::success('Movie Language saved successfully.');

        return redirect(route('movieLanguages.index'));
    }

    /**
     * Display the specified MovieLanguage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $movieLanguage = $this->movieLanguageRepository->findWithoutFail($id);

        if (empty($movieLanguage)) {
            Flash::error('Movie Language not found');

            return redirect(route('movieLanguages.index'));
        }

        return view('movie_languages.show')->with('movieLanguage', $movieLanguage);
    }

    /**
     * Show the form for editing the specified MovieLanguage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $movieLanguage = $this->movieLanguageRepository->findWithoutFail($id);

        if (empty($movieLanguage)) {
            Flash::error('Movie Language not found');

            return redirect(route('movieLanguages.index'));
        }

        return view('movie_languages.edit')->with('movieLanguage', $movieLanguage);
    }

    /**
     * Update the specified MovieLanguage in storage.
     *
     * @param  int              $id
     * @param UpdateMovieLanguageRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMovieLanguageRequest $request)
    {
        $movieLanguage = $this->movieLanguageRepository->findWithoutFail($id);

        if (empty($movieLanguage)) {
            Flash::error('Movie Language not found');

            return redirect(route('movieLanguages.index'));
        }

        $movieLanguage = $this->movieLanguageRepository->update($request->all(), $id);

        Flash::success('Movie Language updated successfully.');

        return redirect(route('movieLanguages.index'));
    }

    /**
     * Remove the specified MovieLanguage from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $movieLanguage = $this->movieLanguageRepository->findWithoutFail($id);

        if (empty($movieLanguage)) {
            Flash::error('Movie Language not found');

            return redirect(route('movieLanguages.index'));
        }

        $this->movieLanguageRepository->delete($id);

        Flash::success('Movie Language deleted successfully.');

        return redirect(route('movieLanguages.index'));
    }
}
