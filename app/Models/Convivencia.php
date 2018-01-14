<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Convivencia
 * @package App\Models
 * @version January 1, 2018, 2:37 pm UTC
 *
 * @property boolean is_ativo
 * @property string no_nome
 * @property string no_local
 * @property string nu_telefone
 * @property string no_observacoes
 * @property date dt_inicio
 * @property date dt_fim
 * @property date dt_inicio_inscricao
 * @property date dt_fim_inscricao
 */
class Convivencia extends Model
{
    use SoftDeletes;

    public $table = 'convivencias';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'is_ativo',
        'no_nome',
        'no_observacoes',
        'dt_inicio',
        'dt_fim',
        'dt_inicio_inscricao',
        'dt_fim_inscricao',
        'local_convivencia_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'is_ativo' => 'boolean',
        'no_nome' => 'string',
        'no_observacoes' => 'string',
        'dt_inicio' => 'date',
        'dt_fim' => 'date',
        'dt_inicio_inscricao' => 'date',
        'dt_fim_inscricao' => 'date',
        'local_convivencia_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'no_nome' => 'required',
        'dt_inicio' => 'required|date',
        'dt_fim' => 'required|date',
        'dt_inicio_inscricao' => 'required|date',
        'dt_fim_inscricao' => 'required|date',
    ];


    protected $hidden = ['convivencia_membros'];
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function membros()
    {
        return $this->belongsToMany(\App\Models\Membro::class, 'convivencia_membros', 'convivencia_id', 'membro_id')->withTimestamps();
    }

    public function local_convivencia()
    {
        return $this->hasOne(\App\Models\LocalConvivencia::class, 'local_convivencia_id', 'id');
    }
}
