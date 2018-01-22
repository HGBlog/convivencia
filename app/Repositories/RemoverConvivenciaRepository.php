<?php

namespace App\Repositories;

use App\Models\RemoverConvivencia;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class RemoverConvivenciaRepository
 * @package App\Repositories
 * @version January 22, 2018, 12:53 am UTC
 *
 * @method RemoverConvivencia findWithoutFail($id, $columns = ['*'])
 * @method RemoverConvivencia find($id, $columns = ['*'])
 * @method RemoverConvivencia first($columns = ['*'])
*/
class RemoverConvivenciaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return RemoverConvivencia::class;
    }
}
