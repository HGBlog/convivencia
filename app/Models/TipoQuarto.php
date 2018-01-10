<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TipoQuarto
 * @package App\Models
 * @version January 8, 2018, 12:10 pm UTC
 *
 * @property string no_quarto
 */
class TipoQuarto extends Model
{
    use SoftDeletes;

    public $table = 'tipo_quartos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'no_quarto'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'no_quarto' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'no_quarto' => 'required'
    ];

    
}
