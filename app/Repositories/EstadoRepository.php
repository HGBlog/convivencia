<?php

namespace App\Repositories;

use App\Models\Estado;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class EstadoRepository
 * @package App\Repositories
 * @version February 3, 2018, 5:17 pm UTC
 *
 * @method Estado findWithoutFail($id, $columns = ['*'])
 * @method Estado find($id, $columns = ['*'])
 * @method Estado first($columns = ['*'])
*/
class EstadoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'no_estado'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Estado::class;
    }
}
