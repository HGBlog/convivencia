<?php

namespace App\Repositories;

use App\Models\AcolhidaExtra;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AcolhidaExtraRepository
 * @package App\Repositories
 * @version January 8, 2018, 12:28 pm UTC
 *
 * @method AcolhidaExtra findWithoutFail($id, $columns = ['*'])
 * @method AcolhidaExtra find($id, $columns = ['*'])
 * @method AcolhidaExtra first($columns = ['*'])
*/
class AcolhidaExtraRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'no_acolhida_extra'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return AcolhidaExtra::class;
    }
}
