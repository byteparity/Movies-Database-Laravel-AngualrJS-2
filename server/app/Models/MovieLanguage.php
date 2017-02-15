<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class MovieLanguage
 * @package App\Models
 * @version February 14, 2017, 5:39 am UTC
 */
class MovieLanguage extends Model
{
    use SoftDeletes;

    public $table = 'movie_language';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'lang_name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'lang_name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'lang_name' => 'required|min:2'
    ];

    
}
