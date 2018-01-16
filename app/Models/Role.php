<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Role
 * @package App\Models
 * @version January 11, 2018, 7:55 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection convivenciaMembros
 * @property \Illuminate\Database\Eloquent\Collection membros
 * @property string name
 * @property string description
 */
class Role extends Model
{
    use SoftDeletes;

    public $table = 'roles';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /* Relacao com a tabela Users */
    public function users()
    {
          return $this->belongsToMany(User::class);
    }
    
}
