<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TipoTranslado
 * @package App\Models
 * @version January 12, 2018, 3:58 pm UTC
 *
 * @property string no_translado
 */
class TipoTranslado extends Model
{
    use SoftDeletes;

    public $table = 'tipo_translados';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'no_translado'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'no_translado' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'no_translado' => 'required'
    ];

    
}
