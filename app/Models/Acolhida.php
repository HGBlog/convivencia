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
        'is_ativo',
        'is_conjuge',
        'membro_id',
        'convivencia_id',
        'tipo_translado_id',
        'acolhida_extra_id',
        'dt_chegada',
        'nu_hora_chegada',
        'nu_voo_chegada',
        'dt_saida',
        'nu_hora_saida',
        'nu_voo_saida',
        'no_local_chegada',
        'no_local_saida',
        'no_observacoes'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'is_ativo' => 'boolean',
        'is_conjuge' => 'boolean',
        'membro_id' => 'integer',
        'convivencia_id' => 'integer',
        'tipo_translado_id' => 'integer',
        'acolhida_extra_id' => 'integer',
        'dt_chegada' => 'date',
        'nu_hora_chegada' => 'string',
        'nu_voo_chegada' => 'string',
        'dt_saida' => 'date',
        'nu_hora_saida' => 'string',
        'nu_voo_saida' => 'string',
        'no_local_chegada' => 'string',
        'no_local_saida' => 'string',
        'no_observacoes' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'tipo_translado_id' => 'required',
        'acolhida_extra_id' => 'required',
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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function extras()
    {
        return $this->belongsTo(\App\Models\Extras::class, 'acolhida_extra_id', 'id');
    }

    public function translado()
    {
        return $this->belongsTo(\App\Models\TipoTranslado::class, 'tipo_translado_id', 'id');
    }
}
