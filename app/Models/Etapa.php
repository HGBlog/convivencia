<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Etapa
 * @package App\Models
 * @version December 31, 2017, 12:02 am UTC
 *
 * @property string no_etapa
 */
class Etapa extends Model
{
    use SoftDeletes;

    public $table = 'etapas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'no_etapa'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'no_etapa' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'no_etapa' => 'required'
    ];

    
}
