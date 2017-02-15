<?php

namespace App\Models;

use Eloquent as Model;
use Carbon\Carbon;  
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Movies
 * @package App\Models
 * @version January 23, 2017, 4:23 am UTC
 */
class Movies extends Model
{
    use SoftDeletes;

    public $table = 'movies';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'language_id',
        'running_time',
        'release_date',
        'image_file',
        'movie_description'
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
        'title' => 'string',
        'language_id' => 'integer',
        'running_time' => 'string',
        'release_date' => 'date',
        'image_file' => 'string',
        'movie_description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $createRules = [
        'title' => 'required|min:2',
        'language_id' => 'required',
        'running_time' => 'required',
        'release_date' => 'required|date_format:Y-m-d',
        'image_file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'movie_description' => 'required'
    ];

    public static $updateRules = [
        'title' => 'required|min:2',
        'language_id' => 'required',
        'running_time' => 'required',
        'release_date' => 'required|date_format:Y-m-d',
        'movie_description' => 'required'
    ];

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = ucwords($value);
    }

    public function getReleasedateAttribute($value)
    {
        $carbon = new Carbon($value);
        return $carbon->format('Y-m-d'); 
    }

    /*------------------API Eloquent Relationship --------------------------*/

    public function language()
    {
        return $this->hasOne(\App\Models\MovieLanguage::class, 'id', 'language_id')->select(['id', 'lang_name']);
    }

    public function genres()
    {
        return $this->belongsToMany(\App\Models\Genres::class, 'movie_genres', 'movie_id', 'genre_id')->select(['genre_type']);
    }

    public function peoples()
    {
        return $this->belongsToMany(\App\Models\Peoples::class, 'movie_peoples', 'movie_id', 'people_id');
    }

    public function reviews()
    {
        return $this->hasMany(\App\Models\MovieReviews::class, 'movie_id', 'id');
    }

    /*------------------End API Eloquent Relationship --------------------------*/
    
}
