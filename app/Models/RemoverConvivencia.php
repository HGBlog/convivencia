<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class RemoverConvivencia
 * @package App\Models
 * @version January 22, 2018, 12:53 am UTC
 *
 * @property \App\Models\LocalConvivencia localConvivencia
 * @property \Illuminate\Database\Eloquent\Collection Acolhida
 * @property \Illuminate\Database\Eloquent\Collection convivenciaMembros
 * @property boolean is_ativo
 * @property integer local_convivencia_id
 * @property string no_nome
 * @property string no_observacoes
 * @property date dt_inicio
 * @property date dt_fim
 * @property date dt_inicio_inscricao
 * @property date dt_fim_inscricao
 */
class RemoverConvivencia extends Model
{
    use SoftDeletes;

    public $table = 'convivencias';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'is_ativo',
        'local_convivencia_id',
        'no_nome',
        'no_observacoes',
        'dt_inicio',
        'dt_fim',
        'dt_inicio_inscricao',
        'dt_fim_inscricao'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'is_ativo' => 'boolean',
        'local_convivencia_id' => 'integer',
        'no_nome' => 'string',
        'no_observacoes' => 'string',
        'dt_inicio' => 'date',
        'dt_fim' => 'date',
        'dt_inicio_inscricao' => 'date',
        'dt_fim_inscricao' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function localConvivencia()
    {
        return $this->belongsTo(\App\Models\LocalConvivencia::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function acolhidas()
    {
        return $this->hasMany(\App\Models\Acolhida::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function membros()
    {
        return $this->belongsToMany(\App\Models\Membro::class, 'convivencia_membros');
    }
}
