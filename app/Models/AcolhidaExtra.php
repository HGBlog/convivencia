<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class AcolhidaExtra
 * @package App\Models
 * @version January 8, 2018, 12:28 pm UTC
 *
 * @property string no_acolhida_extra
 */
class AcolhidaExtra extends Model
{
    use SoftDeletes;

    public $table = 'acolhida_extras';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'no_acolhida_extra'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'no_acolhida_extra' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'no_acolhida_extra' => 'required'
    ];

    
}
