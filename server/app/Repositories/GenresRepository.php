<?php

namespace App\Repositories;

use App\Models\Genres;
use InfyOm\Generator\Common\BaseRepository;

class GenresRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'genre_type'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Genres::class;
    }

    public function checkExistData($g_type, $id='')
    {
        if($id==''){
             return $this->model->where('genre_type', $g_type)->count();
        }else{
            return $this->model->where('genre_type', $g_type)->where('id', '!=', $id)->count();
        }
       
    }
	
	/*------API Functions -------*/
    public function genresDataApi()
    {
        return $this->model->get(); 
    }
	
	public function genresDataApiOnSearch($searchstr)
    {
        return $this->model->where('genre_type', 'like', '%'.$searchstr.'%')->get(); 
    }

    public function genresDataOnIdApi($id)
    {
        return $this->model->with(['movieGenres.movie'])->find($id); 
    }

    /*------End of API Functions -------*/
}
