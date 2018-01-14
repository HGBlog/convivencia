<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class LocalConvivencia
 * @package App\Models
 * @version January 13, 2018, 11:30 pm UTC
 *
 * @property string no_local
 * @property string nu_telefone
 * @property string no_cidade
 * @property string no_endereco
 * @property string no_observacoes
 */
class LocalConvivencia extends Model
{
    use SoftDeletes;

    public $table = 'local_convivencias';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'no_local',
        'nu_telefone',
        'no_cidade',
        'no_endereco',
        'no_observacoes'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'no_local' => 'string',
        'nu_telefone' => 'string',
        'no_cidade' => 'string',
        'no_endereco' => 'string',
        'no_observacoes' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'no_local' => 'required'
    ];

    
}
