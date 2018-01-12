<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TipoCarisma
 * @package App\Models
 * @version January 12, 2018, 1:57 pm UTC
 *
 * @property string no_carisma
 */
class TipoCarisma extends Model
{
    use SoftDeletes;

    public $table = 'tipo_carismas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'no_carisma'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'no_carisma' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'no_carisma' => 'required'
    ];

    
}
