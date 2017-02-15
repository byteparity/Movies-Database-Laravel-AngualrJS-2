<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Genres
 * @package App\Models
 * @version January 23, 2017, 4:29 am UTC
 */
class Genres extends Model
{
    use SoftDeletes;

    public $table = 'genres';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'genre_type',
        'genre_description'
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
        'genre_type' => 'string',
        'genre_description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'genre_type' => 'required|min:2',
        'genre_description' => 'required'
    ];

    public function setGenreTypeAttribute($value)
    {
        $this->attributes['genre_type'] = ucfirst($value);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function movieGenres()
    {
        return $this->hasMany(\App\Models\MovieGenres::class, 'genre_id');
    }
}
