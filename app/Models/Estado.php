<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Estado
 * @package App\Models
 * @version February 3, 2018, 5:17 pm UTC
 *
 * @property string no_estado
 */
class Estado extends Model
{
    use SoftDeletes;

    public $table = 'estados';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'no_estado'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'no_estado' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'no_estado' => 'required'
    ];

    
}
