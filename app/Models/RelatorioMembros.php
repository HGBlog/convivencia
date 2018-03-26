<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class RelatorioMembros
 * @package App\Models
 * @version March 22, 2018, 1:35 pm UTC
 *
 * @property db_type no_usuario
 * @property db_type no_conjuge
 */
class RelatorioMembros extends Model
{
    //use SoftDeletes;

    public $table = 'conv.vw_rel_membros';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'no_usuario',
        'no_conjuge',
        'no_email',
        'telefone',
        'telefone2',
        'regiao',
        'cidade',
        'no_diocese',
        'no_paroquia',
        'cmd',
        'no_etapa',
        'no_equipe',
        'no_responsavel',
        'no_carisma'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
