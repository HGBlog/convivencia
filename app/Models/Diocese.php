<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Diocese
 * @package App\Models
 * @version January 24, 2018, 10:43 am UTC
 *
 * @property string no_diocese
 */
class Diocese extends Model
{
    use SoftDeletes;

    public $table = 'dioceses';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'no_diocese'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'no_diocese' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'no_diocese' => 'required'
    ];

    
}
