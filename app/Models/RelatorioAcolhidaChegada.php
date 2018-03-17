<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class RelatorioAcolhida
 * @package App\Models
 * @version March 15, 2018, 12:28 am UTC
 *
 * @property db_type no_usuario
 * @property db_type no_conjuge
 * @property db_type convivencia_id
 * @property db_type no_acolhida_extra
 * @property db_type tipo_translado
 * @property db_type dt_chegada
 * @property db_type nu_hora_chegada
 * @property db_type nu_voo_chegada
 * @property db_type no_local_chegada
 * @property db_type dt_saida
 * @property db_type nu_hora_saida
 * @property db_type nu_voo_saida
 * @property db_type no_local_saida
 * @property db_type no_observacoes
 */
class RelatorioAcolhidaChegada extends Model
{
    //use SoftDeletes;

    public $table = 'conv.vw_rel_acolhida_chegada';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'no_usuario',
        'no_conjuge',
        'convivencia_id',
        'no_acolhida_extra',
        'tipo_translado',
        'dt_chegada',
        'nu_hora_chegada',
        'nu_voo_chegada',
        'no_local_chegada',
        'no_observacoes'
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
