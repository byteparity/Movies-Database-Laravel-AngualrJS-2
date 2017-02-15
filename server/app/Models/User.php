<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class User
 * @package App\Models
 * @version January 20, 2017, 11:55 am UTC
 */
class User extends Model
{
    use SoftDeletes;

    public $table = 'users';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'email',
        'password'
    ];

    protected $hidden = [
        'password', 'remember_token', 'role', 'created_at', 'updated_at', 'deleted_at',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'email' => 'string',
        'password' => 'string',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $createRules = [
        'name' => 'required',
        'email' => 'required',
        'password' => 'required|confirmed'
    ];

    public static $updateRules = [
        'name' => 'required',
        'email' => 'required',
        'password' => 'confirmed'
    ];

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucwords($value);
    }

    
}
