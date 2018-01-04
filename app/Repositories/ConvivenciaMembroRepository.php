<?php

namespace App\Repositories;

use App\Models\ConvivenciaMembro;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ConvivenciaMembroRepository
 * @package App\Repositories
 * @version January 2, 2018, 9:50 am UTC
 *
 * @method ConvivenciaMembro findWithoutFail($id, $columns = ['*'])
 * @method ConvivenciaMembro find($id, $columns = ['*'])
 * @method ConvivenciaMembro first($columns = ['*'])
*/
class ConvivenciaMembroRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ConvivenciaMembro::class;
    }
}
