<?php

namespace App\Repositories;

use App\Models\Convivencia;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ConvivenciaRepository
 * @package App\Repositories
 * @version January 1, 2018, 2:37 pm UTC
 *
 * @method Convivencia findWithoutFail($id, $columns = ['*'])
 * @method Convivencia find($id, $columns = ['*'])
 * @method Convivencia first($columns = ['*'])
*/
class ConvivenciaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'is_ativo',
        'no_nome',
        'no_local',
        'nu_telefone',
        'no_observacoes',
        'dt_inicio',
        'dt_fim',
        'dt_inicio_inscricao',
        'dt_fim_inscricao'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Convivencia::class;
    }
}
