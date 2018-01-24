<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Equipe
 * @package App\Models
 * @version January 13, 2018, 4:00 pm UTC
 *
 * @property string no_equipe
 */
class Equipe extends Model
{
    use SoftDeletes;

    public $table = 'equipes';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'no_equipe',
        'no_responsavel'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'no_equipe' => 'string',
        'no_responsavel' => 'string'
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
