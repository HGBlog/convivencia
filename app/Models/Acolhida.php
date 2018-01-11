<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Acolhida
 * @package App\Models
 * @version January 8, 2018, 5:32 pm UTC
 *
 * @property \App\Models\Membro membro
 * @property \App\Models\Convivencia convivencia
 * @property \App\Models\Quarto quarto
 * @property \App\Models\Extras extras
 * @property integer membro_id
 * @property integer convivencia_id
 * @property integer tipo_quarto_id
 * @property integer acolhida_extra_id
 * @property string no_casa_convivencia
 * @property date dt_chegada
 * @property string nu_hora_chegada
 * @property string nu_voo_chegada
 * @property date dt_saida
 * @property string nu_hora_saida
 * @property string nu_voo_saida
 * @property string no_observacoes
 */
class Acolhida extends Model
{
    use SoftDeletes;

    public $table = 'acolhidas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'membro_id',
        'convivencia_id',
        'tipo_quarto_id',
        'acolhida_extra_id',
        'no_casa_convivencia',
        'dt_chegada',
        'nu_hora_chegada',
        'nu_voo_chegada',
        'dt_saida',
        'nu_hora_saida',
        'nu_voo_saida',
        'no_observacoes'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'membro_id' => 'integer',
        'convivencia_id' => 'integer',
        'tipo_quarto_id' => 'integer',
        'acolhida_extra_id' => 'integer',
        'no_casa_convivencia' => 'string',
        'dt_chegada' => 'date',
        'nu_hora_chegada' => 'string',
        'nu_voo_chegada' => 'string',
        'dt_saida' => 'date',
        'nu_hora_saida' => 'string',
        'nu_voo_saida' => 'string',
        'no_observacoes' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'no_casa_convivencia' => 'required',
        //'nu_voo_chegada' => 'required',
        //'nu_voo_saida' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     **/
    public function membro()
    {
        return $this->hasOne(\App\Models\Membro::class, 'membro_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     **/
    public function convivencia()
    {
        return $this->hasOne(\App\Models\Convivencia::class, 'convivencia_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     **/
    public function quarto()
    {
        return $this->hasOne(\App\Models\Quarto::class, 'tipo_quarto_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function extras()
    {
        return $this->belongsTo(\App\Models\Extras::class, 'acolhida_extra_id', 'id');
    }
}
