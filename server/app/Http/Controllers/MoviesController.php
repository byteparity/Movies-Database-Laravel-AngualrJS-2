<?php

namespace App\Http\Controllers;

use App\DataTables\MoviesDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateMoviesRequest;
use App\Http\Requests\UpdateMoviesRequest;
use App\Repositories\MoviesRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class MoviesController extends AppBaseController
{
    /** @var  MoviesRepository */
    private $moviesRepository;

    public function __construct(MoviesRepository $moviesRepo)
    {
        $this->middleware(['auth']);
        $this->moviesRepository = $moviesRepo;
    }

    /**
     * Display a listing of the Movies.
     *
     * @param MoviesDataTable $moviesDataTable
     * @return Response
     */
    public function index(MoviesDataTable $moviesDataTable)
    {
        
        return $moviesDataTable->render('movies.index');
    }

    /**
     * Show the form for creating a new Movies.
     *
     * @return Response
     */
    public function create()
    {
        $languageListing = $this->moviesRepository->languageListing();
        return view('movies.create')->with('languageListing', $languageListing);
    }

    /**
     * Store a newly created Movies in storage.
     *
     * @param CreateMoviesRequest $request
     *
     * @return Response
     */
    public function store(CreateMoviesRequest $request)
    {
        //return $input = $request->all();
        $ImgPath = 'storage';
        $title = $request->title;
        $checkExistData = $this->moviesRepository->checkExistData($title);
        if($checkExistData==0){
            if($file = $request->hasFile('image_file')) {
                $file = $request->file('image_file') ;
                $newNameFile = time(). $file->getClientOriginalName(); 

                $destinationPath = public_path(DIRECTORY_SEPARATOR.$ImgPath);   
                if(Storage::disk('public')->put($newNameFile, File::get($file))){
                    $flag = true;
                }else{
                    Flash::error('Some error occured, while uploading new image.');
                    return redirect()->back();
                }  
            }
            if($flag){
                $input = $request->all();
                $input['image_file'] = $ImgPath.DIRECTORY_SEPARATOR.$newNameFile;
                $moviesAdd = $this->moviesRepository->create($input);
                Flash::success('Movies saved successfully.');
                return redirect(route('movies.index'));
            }else{
                Flash::error('Some error occured while uploading image please try again.');
                return redirect()->back();
            }
        }else{
             Flash::error('Movie name already exist.');
             return redirect()->back();
        }
    }

    /**
     * Display the specified Movies.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $movies = $this->moviesRepository->with(['language'])->findWithoutFail($id);

        if (empty($movies)) {
            Flash::error('Movies not found');

            return redirect(route('movies.index'));
        }

        return view('movies.show')->with('movies', $movies);
    }

    /**
     * Show the form for editing the specified Movies.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $movies = $this->moviesRepository->findWithoutFail($id);

        if (empty($movies)) {
            Flash::error('Movies not found');

            return redirect(route('movies.index'));
        }
        
        $languageListing = $this->moviesRepository->languageListing();
        return view('movies.edit')->with('movies', $movies)->with('languageListing', $languageListing);
    }

    /**
     * Update the specified Movies in storage.
     *
     * @param  int              $id
     * @param UpdateMoviesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMoviesRequest $request)
    {
        $ImgPath = 'storage';
        $movies = $this->moviesRepository->findWithoutFail($id);
        if (empty($movies)) {
            Flash::error('Movies not found');
            return redirect(route('movies.index'));
        }
        
        $title = $request->title;
        $checkExistData = $this->moviesRepository->checkExistData($title, $id);
        if($checkExistData==0){
            $oldImgPath = $ImgPath.DIRECTORY_SEPARATOR.$movies->image_file;
             if(isset($request->image_file)){
                if($file = $request->hasFile('image_file')) {
                    $file = $request->file('image_file');
                    $newNameFile = time().$file->getClientOriginalName();
                    $destinationPath = public_path(DIRECTORY_SEPARATOR.$ImgPath);
                   
                    if(Storage::disk('public')->put($newNameFile, File::get($file))){
                        if(file_exists(public_path($oldImgPath)) && $movies->image_file!=null){
                            unlink(public_path($oldImgPath));
                        }
                    }else{
                        Flash::error('Some error occured, while uploading new image.');
                        return redirect()->back();
                    }	
                }
            }
           
        
            $input = $request->all();
            $input['image_file'] = (isset($newNameFile)) ? $ImgPath.DIRECTORY_SEPARATOR.$newNameFile : $movies->image_file;
        
            $moviesUpdate = $this->moviesRepository->update($input, $id);
            Flash::success('Movies updated successfully.');
            return redirect(route('movies.index'));

        }else{
            Flash::error('Movie name already exist.');
            return redirect()->back();
        }    
    }

    /**
     * Remove the specified Movies from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $movies = $this->moviesRepository->findWithoutFail($id);

        if (empty($movies)) {
            Flash::error('Movies not found');

            return redirect(route('movies.index'));
        }

        $this->moviesRepository->delete($id);

        Flash::success('Movies deleted successfully.');

        return redirect(route('movies.index'));
    }
}
