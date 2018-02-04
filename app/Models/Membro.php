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
    use SoftDeletes;

    public $table = 'membros';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'owner_id',
        'no_usuario',
        'no_email',
        'no_sexo',
        'co_telefone_pais',
        'nu_telefone',
        'diocese_id',
        'no_cidade',
        'no_paroquia',
        'nu_comunidade',
        'etapa_id',
        'equipe_id',
        'tipo_carisma_id',
        'estado_id',
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
        'diocese_id' => 'nullable|integer',
        'no_cidade' => 'string',
        'no_paroquia' => 'string',
        'nu_comunidade' => 'string',
        'etapa_id' => 'nullable|integer',
        'equipe_id' => 'nullable|integer',
        'tipo_carisma_id' => 'nullable|integer',
        'estado_id' => 'nullable|integer',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'no_usuario' => 'required',
        //'no_email'      => 'required|email'
        //'no_pais' => 'required',
        //'no_cidade' => 'required',
        //'no_paroquia' => 'required',
        //'nu_comunidade' => 'required',
        //'nu_ano_inicio_caminho' => 'required'
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

        public function carisma()
    {
        return $this->hasOne(\App\Models\TipoCarisma::class, 'tipo_carisma_id', 'id');
    }

    public function equipe()
    {
        return $this->hasOne(\App\Models\Equipe::class, 'equipe_id', 'id');
    }
    
    public function diocese()
    {
        return $this->hasOne(\App\Models\Diocese::class, 'diocese_id', 'id');
    }

        public function saveMembro($data)
    {
            print_r($data);

            
            $this->owner_id = auth()->user()->id;
            $this->no_usuario = $data['no_usuario'];
            $this->no_email = $data['no_email'];
            $this->no_sexo = $data['no_sexo'];
            $this->co_telefone_pais = $data['co_telefone_pais'];
            $this->nu_telefone = $data['nu_telefone'];
            $this->no_cidade = $data['no_cidade'];
            $this->no_paroquia = $data['no_paroquia'];
            $this->nu_comunidade = $data['nu_comunidade'];
            $this->etapa_id = $data['etapa_id'];
            $this->diocese_id = $data['diocese_id'];
            $this->equipe_id = $data['equipe_id'];
            $this->tipo_carisma_id = $data['tipo_carisma_id'];
            $this->estado_id = $data['estado_id'];
            $this->save();
            return 1;
    }

    public function updateMembro($data)
    {
            $membro = $this->find($data['id']);
            $membro->owner_id = auth()->user()->id;
            $membro->no_usuario = $data['no_usuario'];
            $membro->no_email = $data['no_email'];
            $membro->no_sexo = $data['no_sexo'];
            $membro->co_telefone_pais = $data['co_telefone_pais'];
            $membro->nu_telefone = $data['nu_telefone'];
            $membro->no_cidade = $data['no_cidade'];
            $membro->no_paroquia = $data['no_paroquia'];
            $membro->nu_comunidade = $data['nu_comunidade'];
            $membro->etapa_id = $data['etapa_id'];
            $membro->diocese_id = $data['diocese_id'];
            $membro->equipe_id = $data['equipe_id'];
            $membro->tipo_carisma_id = $data['tipo_carisma'];
            $membro->estado_id = $data['estado_id'];
            $membro->save();
            return 1;
    }


    protected $hidden = ['convivencia_membros'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function convivencias()
    {
        return $this->belongsToMany(\App\Models\Convivencia::class, 'convivencia_membros', 'membro_id', 'convivencia_id')->withTimestamps();
    }

    public function setEtapa($etapa_id)
    {
        $this->attributes['etapa_id'] = trim($etapa_id) !== '' ? $etapa_id : null;
    }

    public function setDiocese($diocese_id)
    {
        $this->attributes['diocese_id'] = trim($diocese_id) !== '' ? $diocese_id : null;
    }
    public function setEquipt($equipe_id)
    {
        $this->attributes['equipe_id'] = trim($equipe_id) !== '' ? $equipe_id : null;
    }

    public function setTipoCarisma($tipo_carisma_id)
    {
        $this->attributes['tipo_carisma_id'] = trim($tipo_carisma_id) !== '' ? $tipo_carisma_id : null;
    }

    public function emptyToNull($value)
    {
        return $value !== '' ? $value : null;
    }

}
