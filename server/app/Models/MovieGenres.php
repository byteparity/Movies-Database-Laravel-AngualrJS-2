<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class MovieGenres
 * @package App\Models
 * @version January 23, 2017, 4:41 am UTC
 */
class MovieGenres extends Model
{
    use SoftDeletes;

    public $table = 'movie_genres';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'movie_id',
        'genre_id'
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
        'genre_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'movie_id' => 'required',
        'genre_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function movie()
    {
        return $this->belongsTo(\App\Models\Movies::class, 'movie_id', 'id')->select(['id', 'title', 'running_time', 'release_date', 'image_file', 'movie_description']);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function genre()
    {
        return $this->belongsTo(\App\Models\Genres::class, 'genre_id', 'id')->select(['id', 'genre_type']);
    }
}
