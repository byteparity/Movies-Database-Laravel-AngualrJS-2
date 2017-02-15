<?php

namespace App\Repositories;

use App\Models\MoviePeoples;
use App\Models\Movies;
use App\Models\Peoples;
use App\Models\Proffessions;
use DB;
use InfyOm\Generator\Common\BaseRepository;

class MoviePeoplesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'movie_id',
        'people_id',
        'proffession_id',
        'name_in_movie',
        'character_in_movie'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return MoviePeoples::class;
    }

    public function moviesListing()
    {
        return Movies::pluck('title', 'id');
    }

    public function peoplesListing()
    {
        return Peoples::select('id', DB::raw('CONCAT(first_name," ",last_name) as full_name'))->pluck('full_name', 'id');
    }

    public function proffessionListing()
    {
        return Proffessions::pluck('proffession_type', 'id');
    }

    public function checkExistData($checkData, $id='')
    {
        if($id==''){
             return $this->model->where($checkData)->count();
        }else{
            return $this->model->where($checkData)->where('id', '!=', $id)->count();
        }
       
    }

}
