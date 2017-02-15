<?php

namespace App\Repositories;

use App\Models\Peoples;
use InfyOm\Generator\Common\BaseRepository;
use DB;

class PeoplesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'first_name',
        'last_name',
        'born_date'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Peoples::class;
    }

    public function checkExistData($f_name, $l_name, $id='')
    {
        if($id==''){
             return $this->model->where('first_name', $f_name)->where('last_name', $l_name)->count();
        }else{
            return $this->model->where('first_name', $f_name)->where('last_name', $l_name)->where('id', '!=', $id)->count();
        }
       
    }

    /*-------------- api functions ---------------*/

    public function peopleDataApi()
    {
        return $this->model->with(['peopleFromMoviesPeople.proffession', 'peopleFromMoviesPeople.moviePeopleFromMovies.genres'])->get();
    }
	
	public function peopleDataApiOnSearch($searchstr){
		return $this->model->where(DB::raw("CONCAT(`first_name`, ' ', `last_name`)"), 'LIKE', "%".$searchstr."%")->with(['peopleFromMoviesPeople.proffession', 'peopleFromMoviesPeople.moviePeopleFromMovies.genres'])->get();
	}
	
	public function peopleDataOnIdApi($id)
    {
        return $this->model->with(['peopleFromMoviesPeople.proffession', 'peopleFromMoviesPeople.moviePeopleFromMovies.genres'])->find($id); 
    }


    /*-------------- end api functions ---------------*/
}
