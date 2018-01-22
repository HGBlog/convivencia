<?php

namespace App\Repositories;

use App\Models\RemoverLocalConvivencia;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class RemoverLocalConvivenciaRepository
 * @package App\Repositories
 * @version January 21, 2018, 10:51 pm UTC
 *
 * @method RemoverLocalConvivencia findWithoutFail($id, $columns = ['*'])
 * @method RemoverLocalConvivencia find($id, $columns = ['*'])
 * @method RemoverLocalConvivencia first($columns = ['*'])
*/
class RemoverLocalConvivenciaRepository extends BaseRepository
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
        return RemoverLocalConvivencia::class;
    }
}
