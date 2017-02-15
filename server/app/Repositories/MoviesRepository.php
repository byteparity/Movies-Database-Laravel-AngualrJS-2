<?php

namespace App\Repositories;

use App\Models\Movies;
use App\Models\MovieLanguage;
use InfyOm\Generator\Common\BaseRepository;

class MoviesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'running_time',
        'release_date'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Movies::class;
    }

    public function checkExistData($title, $id='')
    {
        if($id==''){
             return $this->model->where('title', $title)->count();
        }else{
            return $this->model->where('title', $title)->where('id', '!=', $id)->count();
        }
       
    }

    public function languageListing()
    {
        return MovieLanguage::pluck('lang_name', 'id');
    }


    /*------API Functions -------*/
    public function moviesDataApi()
    {
        return $this->model->with(['genres', 'language', 'peoples.proffession', 'reviews.user'])->get(); 
    }
	
	public function moviesDataApiOnSearch($searchstr)
    {
        return $this->model->where('movies.title', 'like', '%'.$searchstr.'%')->with(['genres', 'language', 'peoples.proffession', 'reviews.user'])->get(); 
    }

    public function moviesDataOnIdApi($id)
    {
        return $this->model->with(['genres', 'language', 'peoples.peopleFromMovies', 'reviews.user'])->find($id); 
    }

    /*------End of API Functions -------*/
}
