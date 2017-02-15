<?php

namespace App\Http\Controllers;

use App\DataTables\PeoplesDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatePeoplesRequest;
use App\Http\Requests\UpdatePeoplesRequest;
use App\Repositories\PeoplesRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class PeoplesController extends AppBaseController
{
    /** @var  PeoplesRepository */
    private $peoplesRepository;

    public function __construct(PeoplesRepository $peoplesRepo)
    {
        $this->middleware(['auth']);
        $this->peoplesRepository = $peoplesRepo;
    }

    /**
     * Display a listing of the Peoples.
     *
     * @param PeoplesDataTable $peoplesDataTable
     * @return Response
     */
    public function index(PeoplesDataTable $peoplesDataTable)
    {
        return $peoplesDataTable->render('peoples.index');
    }

    /**
     * Show the form for creating a new Peoples.
     *
     * @return Response
     */
    public function create()
    {
        return view('peoples.create');
    }

    /**
     * Store a newly created Peoples in storage.
     *
     * @param CreatePeoplesRequest $request
     *
     * @return Response
     */
    public function store(CreatePeoplesRequest $request)
    {
        $ImgPath = 'storage';
        $f_name = $request->first_name;
        $l_name = $request->last_name;
        $checkExistData = $this->peoplesRepository->checkExistData($f_name, $l_name);
        if($checkExistData==0){
            if($file = $request->hasFile('people_image')) {
                $file = $request->file('people_image') ;
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
                $input['people_image'] = $ImgPath.DIRECTORY_SEPARATOR.$newNameFile;
                $peoplesAdd = $this->peoplesRepository->create($input);
                Flash::success('Peoples saved successfully.');
                return redirect(route('peoples.index'));
            }else{
                Flash::error('Some error occured while uploading image please try again.');
                return redirect()->back();
            }
        }else{
             Flash::error('People name already exist.');
             return redirect()->back();
        }

    }

    /**
     * Display the specified Peoples.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $peoples = $this->peoplesRepository->findWithoutFail($id);

        if (empty($peoples)) {
            Flash::error('Peoples not found');

            return redirect(route('peoples.index'));
        }

        return view('peoples.show')->with('peoples', $peoples);
    }

    /**
     * Show the form for editing the specified Peoples.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $peoples = $this->peoplesRepository->findWithoutFail($id);

        if (empty($peoples)) {
            Flash::error('Peoples not found');

            return redirect(route('peoples.index'));
        }

        return view('peoples.edit')->with('peoples', $peoples);
    }

    /**
     * Update the specified Peoples in storage.
     *
     * @param  int              $id
     * @param UpdatePeoplesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePeoplesRequest $request)
    {
        $ImgPath = 'storage';
        $peoples = $this->peoplesRepository->findWithoutFail($id);
        if (empty($peoples)) {
            Flash::error('Peoples not found');
            return redirect(route('peoples.index'));
        }
        $f_name = $request->first_name;
        $l_name = $request->last_name;

        $checkExistData = $this->peoplesRepository->checkExistData($f_name, $l_name, $id);
        if($checkExistData==0){
             $oldImgPath = $ImgPath.DIRECTORY_SEPARATOR.$peoples->people_image;
             if(isset($request->people_image)){
                if($file = $request->hasFile('people_image')) {
                    $file = $request->file('people_image');
                    $newNameFile = time().$file->getClientOriginalName();

                    $destinationPath = public_path(DIRECTORY_SEPARATOR.$ImgPath);
                   
                    if(Storage::disk('public')->put($newNameFile, File::get($file))){
                
                        if(file_exists(public_path($oldImgPath)) && $peoples->people_image!=null){
                            unlink(public_path($oldImgPath));
                        }
                    }else{
                        Flash::error('Some error occured, while uploading new image.');
                        return redirect()->back();
                    }  
                }
            }

            $input = $request->all();
            $input['people_image'] = (isset($newNameFile)) ? $ImgPath.DIRECTORY_SEPARATOR.$newNameFile : $peoples->people_image;
        
            $peoplesUpdate = $this->peoplesRepository->update($input, $id);
            Flash::success('People updated successfully.');
            return redirect(route('peoples.index'));

        }else{
            Flash::error('People name already exist.');
            return redirect()->back();
        }    
    }

    /**
     * Remove the specified Peoples from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $peoples = $this->peoplesRepository->findWithoutFail($id);

        if (empty($peoples)) {
            Flash::error('Peoples not found');

            return redirect(route('peoples.index'));
        }

        $this->peoplesRepository->delete($id);

        Flash::success('Peoples deleted successfully.');

        return redirect(route('peoples.index'));
    }
}
