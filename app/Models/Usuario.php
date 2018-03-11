<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Usuario
 * @package App\Models
 * @version January 11, 2018, 7:27 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection convivenciaMembros
 * @property \Illuminate\Database\Eloquent\Collection Membro
 * @property string name
 * @property string email
 * @property string password
 * @property string remember_token
 */
class Usuario extends Model
{
    use SoftDeletes;

    public $table = 'users';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'email',
        'mregiao_id',
        'password',
        'remember_token'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'mregiao_id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'password' => 'string',
        'remember_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        //'name' => 'required|string|max:255',
        //'email' => 'required|string|email|max:255|unique:users',
        //'password' => 'required|string|min:6|confirmed',
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255',
        //'password' => 'required|string|min:6',
        'password' => 'allowEmpty|on:update|min:6',


         //array('password','required','allowEmpty' => TRUE, 'on' => 'update'),
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function membros()
    {
        return $this->hasMany(\App\Models\Membro::class);
    }

    public function macroregiao()
    {
        return $this->hasOne(\App\Models\MacroRegiao::class, 'mregiao_id', 'id');
    }
}
