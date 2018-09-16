<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class RelatorioInscricoes
 * @package App\Models
 * @version March 17, 2018, 5:09 pm UTC
 *
 * @property db_type conv_id
 * @property db_type nome_conv
 */
class RelatorioInscricoes extends Model
{
    //use SoftDeletes;

    public $table = 'conv.vw_rel_inscricoes';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
            'convivencia_id', 
            'participante',
            'conjuge', 
            'tipo_pessoa',
            'telefone',
            'telefone2',
            'carisma',
            'equipe',
            'data_chegada',
            'nu_cpf_membro',
            'nu_rg_membro',
            'nu_cpf_conjuge',
            'nu_rg_conjuge'
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
