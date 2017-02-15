<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class MovieReviews
 * @package App\Models
 * @version January 25, 2017, 6:27 am UTC
 */
class MovieReviews extends Model
{
    use SoftDeletes;

    public $table = 'movie_reviews';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'movie_id',
        'user_id',
        'rating',
        'rating_description',
        'helpful_count',
        'unhelpful_count'
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
        'user_id' => 'integer',
        'rating' => 'integer',
        'rating_description' => 'string',
        'helpful_count' => 'integer',
        'unhelpful_count' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'movie_id' => 'required',
        'user_id' => 'required',
        'rating' => 'required',
        'rating_description' => 'required',
        'helpful_count' => 'required',
        'unhelpful_count' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function movie()
    {
        return $this->belongsTo(\App\Models\Movies::class, 'movie_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id', 'id');
    }
}
