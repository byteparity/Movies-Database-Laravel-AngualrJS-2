<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Proffessions
 * @package App\Models
 * @version January 23, 2017, 4:27 am UTC
 */
class Proffessions extends Model
{
    use SoftDeletes;

    public $table = 'proffessions';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'proffession_type',
        'proffession_description'
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
        'proffession_type' => 'string',
        'proffession_description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'proffession_type' => 'required|min:2',
        'proffession_description' => 'required'
    ];

    public function setProffessionTypeAttribute($value)
    {
        $this->attributes['proffession_type'] = ucfirst($value);
    }
	
	/*------------------Proffession API Eloquent Relationship --------------------------*/

    public function Peoples()
    {
        return $this->hasMany(\App\Models\MoviePeoples::class, 'proffession_id', 'id');
    }

    /*------------------End Proffession API Eloquent Relationship --------------------------*/

    
}
