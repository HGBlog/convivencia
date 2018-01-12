<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TipoEquipe
 * @package App\Models
 * @version January 12, 2018, 5:52 pm UTC
 *
 * @property string no_equipe
 */
class TipoEquipe extends Model
{
    use SoftDeletes;

    public $table = 'tipo_equipes';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'no_equipe'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'no_equipe' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'no_equipe' => 'required'
    ];

    
}
