<?php

namespace App\Repositories;

use App\Models\MovieReviews;
use App\Models\Movies;
use App\Models\User;
use InfyOm\Generator\Common\BaseRepository;

class MovieReviewsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'movie_id',
        'user_id',
        'rating'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return MovieReviews::class;
    }

    public function moviesListing()
    {
        return Movies::pluck('title', 'id');
    }

    public function usersListing()
    {
        return User::pluck('name', 'id');
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
