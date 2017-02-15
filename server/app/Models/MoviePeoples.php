<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use DB;
/**
 * Class MoviePeoples
 * @package App\Models
 * @version January 23, 2017, 4:34 am UTC
 */
class MoviePeoples extends Model
{
    use SoftDeletes;

    public $table = 'movie_peoples';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'movie_id',
        'people_id',
        'proffession_id',
        'name_in_movie',
        'character_in_movie',
        'movie_people_description'
    ];
    
    protected $hidden = [
        'created_at', 'updated_at', 'deleted_at',
    ];
    
    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'movie_id' => 'integer',
        'people_id' => 'integer',
        'proffession_id' => 'integer',
        'name_in_movie' => 'string',
        'character_in_movie' => 'string',
        'movie_people_description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'movie_id' => 'required',
        'people_id' => 'required',
        'proffession_id' => 'required',
        'name_in_movie' => 'required|min:2',
        'character_in_movie' => 'required|min:2'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function movie()
    {
        return $this->belongsTo(\App\Models\Movies::class, 'movie_id', 'id')->select(['id', 'title']);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function people()
    {
        return $this->belongsTo(\App\Models\Peoples::class, 'people_id', 'id')->select(['id', DB::raw('CONCAT(first_name, " ", last_name) AS full_name'), 'people_image']);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function proffession()
    {
        return $this->belongsTo(\App\Models\Proffessions::class, 'proffession_id', 'id')->select(['id', 'proffession_type']);
    }

    /*------------------People API Eloquent Relationship --------------------------*/

    public function moviePeopleFromMovies()
    {
        return $this->hasOne(\App\Models\Movies::class, 'id', 'movie_id')->select(['id', 'title', 'image_file']);
    }

    /*------------------End People API Eloquent Relationship --------------------------*/
}
