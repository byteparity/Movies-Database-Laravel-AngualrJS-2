<?php

namespace App\Repositories;

use App\Models\MovieGenres;
use App\Models\Movies;
use App\Models\Genres;
use InfyOm\Generator\Common\BaseRepository;

class MovieGenresRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'movie_id',
        'genre_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return MovieGenres::class;
    }

    public function moviesListing()
    {
        return Movies::pluck('title', 'id');
    }

    public function genresListing()
    {
        return Genres::pluck('genre_type', 'id');
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
