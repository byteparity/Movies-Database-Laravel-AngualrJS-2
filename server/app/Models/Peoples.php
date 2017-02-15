<?php

namespace App\Models;

use Eloquent as Model;
use Carbon\Carbon; 
use Illuminate\Database\Eloquent\SoftDeletes;
/**
 * Class Peoples
 * @package App\Models
 * @version January 23, 2017, 4:25 am UTC
 */
class Peoples extends Model
{
    use SoftDeletes;

    public $table = 'peoples';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'first_name',
        'last_name',
        'gender',
        'born_date',
        'people_image',
        'people_description'
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
        'first_name' => 'string',
        'last_name' => 'string',
        'gender' => 'integer',
        'born_date' => 'date',
        'people_image' => 'string',
        'people_description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $createRules = [
        'first_name' => 'required',
        'last_name' => 'required',
        'gender' => 'required',
        'born_date' => 'required|date_format:Y-m-d',
        'people_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'people_description' => 'required'
    ];

    public static $updateRules = [
        'first_name' => 'required',
        'last_name' => 'required',
        'gender' => 'required',
        'born_date' => 'required|date_format:Y-m-d',
        'people_description' => 'required'
    ];

    public function setFirstNameAttribute($value)
    {
        $this->attributes['first_name'] = ucfirst($value);
    }

    public function setLastNameAttribute($value)
    {
        $this->attributes['last_name'] = ucfirst($value);
    }

    public function getBorndateAttribute($value)
    {
        $carbon = new Carbon($value);
        return $carbon->format('Y-m-d'); 
    }

    public function proffession()
    {
        return $this->belongsTo(\App\Models\Proffessions::class, 'proffession_id', 'id')->select(['id', 'proffession_type']);
    }

    /*------------------People API Eloquent Relationship --------------------------*/

    public function peopleFromMoviesPeople()
    {
        return $this->hasMany(\App\Models\MoviePeoples::class, 'people_id', 'id');
    }

    /*------------------End People API Eloquent Relationship --------------------------*/
   
	public function peopleFromMovies()
	{
        return $this->hasOne(\App\Models\MoviePeoples::class, 'people_id', 'id');
    }
   
}
