<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PerfilUsuario
 * @package App\Models
 * @version December 30, 2017, 11:51 pm UTC
 *
 * @property \App\Models\Usuario usuario
 * @property integer id_usuario
 * @property string no_usuario
 * @property string no_pais
 * @property string no_email
 * @property string no_sexo
 * @property string co_telefone_pais
 * @property string nu_telefone
 */
class PerfilUsuario extends Model
{
    use SoftDeletes;

    public $table = 'perfil_usuarios';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'id_usuario',
        'no_usuario',
        'no_pais',
        'no_email',
        'no_sexo',
        'co_telefone_pais',
        'nu_telefone'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_usuario' => 'integer',
        'no_usuario' => 'string',
        'no_pais' => 'string',
        'no_email' => 'string',
        'no_sexo' => 'string',
        'co_telefone_pais' => 'string',
        'nu_telefone' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'no_usuario' => 'required',
        'no_pais' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     **/
    public function usuario()
    {
        return $this->hasOne(\App\Models\Usuario::class, 'id_usuario', 'id');
    }
}
