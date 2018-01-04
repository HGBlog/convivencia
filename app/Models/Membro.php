<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Membro
 * @package App\Models
 * @version December 31, 2017, 8:43 am UTC
 *
 * @property \App\Models\Responsavel responsavel
 * @property \App\Models\Etapa etapa
 * @property integer owner_id
 * @property string no_usuario
 * @property string no_pais
 * @property string no_email
 * @property string no_sexo
 * @property string co_telefone_pais
 * @property string nu_telefone
 * @property string no_diocese
 * @property string no_cidade
 * @property string no_paroquia
 * @property string nu_comunidade
 * @property string nu_ano_inicio_caminho
 */
class Membro extends Model
{
    //use SoftDeletes;

    public $table = 'membros';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'owner_id',
        'no_usuario',
        'no_pais',
        'no_email',
        'no_sexo',
        'co_telefone_pais',
        'nu_telefone',
        'no_diocese',
        'no_cidade',
        'no_paroquia',
        'nu_comunidade',
        'nu_ano_inicio_caminho',
        'etapa_id'
    ];


    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'owner_id' => 'integer',
        'no_usuario' => 'string',
        'no_pais' => 'string',
        'no_email' => 'string',
        'no_sexo' => 'string',
        'co_telefone_pais' => 'string',
        'nu_telefone' => 'string',
        'no_diocese' => 'string',
        'no_cidade' => 'string',
        'no_paroquia' => 'string',
        'nu_comunidade' => 'string',
        'nu_ano_inicio_caminho' => 'string',
        'etapa_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'no_usuario' => 'required',
        'no_pais' => 'required',
        'no_cidade' => 'required',
        'no_paroquia' => 'required',
        'nu_comunidade' => 'required',
        'nu_ano_inicio_caminho' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     **/
    public function responsavel()
    {
        return $this->hasOne(\App\Models\Responsavel::class, 'owner_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     **/
    public function etapa()
    {
        return $this->hasOne(\App\Models\Etapa::class, 'etapa_id', 'id');
    }

        public function saveMembro($data)
    {
            print_r($data);

            
            $this->owner_id = auth()->user()->id;
            $this->no_usuario = $data['no_usuario'];
            $this->no_pais = $data['no_pais'];
            $this->no_email = $data['no_email'];
            $this->no_sexo = $data['no_sexo'];
            $this->co_telefone_pais = $data['co_telefone_pais'];
            $this->nu_telefone = $data['nu_telefone'];
            $this->no_diocese = $data['no_diocese'];
            $this->no_cidade = $data['no_cidade'];
            $this->no_paroquia = $data['no_paroquia'];
            $this->nu_comunidade = $data['nu_comunidade'];
            $this->nu_ano_inicio_caminho = $data['nu_ano_inicio_caminho'];
            $this->etapa_id = $data['etapa_id'];
            $this->save();
            return 1;
    }

    public function updateMembro($data)
    {
            $membro = $this->find($data['id']);
            $membro->owner_id = auth()->user()->id;
            $membro->no_usuario = $data['no_usuario'];
            $membro->no_pais = $data['no_pais'];
            $membro->no_email = $data['no_email'];
            $membro->no_sexo = $data['no_sexo'];
            $membro->co_telefone_pais = $data['co_telefone_pais'];
            $membro->nu_telefone = $data['nu_telefone'];
            $membro->no_diocese = $data['no_diocese'];
            $membro->no_cidade = $data['no_cidade'];
            $membro->no_paroquia = $data['no_paroquia'];
            $membro->nu_comunidade = $data['nu_comunidade'];
            $membro->nu_ano_inicio_caminho = $data['nu_ano_inicio_caminho'];
            $membro->etapa_id = $data['etapa_id'];
            $membro->save();
            return 1;
    }
}
