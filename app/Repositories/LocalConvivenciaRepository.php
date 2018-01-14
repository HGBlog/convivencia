<?php

namespace App\Repositories;

use App\Models\LocalConvivencia;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class LocalConvivenciaRepository
 * @package App\Repositories
 * @version January 13, 2018, 11:30 pm UTC
 *
 * @method LocalConvivencia findWithoutFail($id, $columns = ['*'])
 * @method LocalConvivencia find($id, $columns = ['*'])
 * @method LocalConvivencia first($columns = ['*'])
*/
class LocalConvivenciaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'no_local',
        'nu_telefone',
        'no_cidade',
        'no_endereco',
        'no_observacoes'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return LocalConvivencia::class;
    }
}
