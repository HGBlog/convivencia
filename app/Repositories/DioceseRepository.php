<?php

namespace App\Repositories;

use App\Models\Diocese;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class DioceseRepository
 * @package App\Repositories
 * @version January 24, 2018, 10:43 am UTC
 *
 * @method Diocese findWithoutFail($id, $columns = ['*'])
 * @method Diocese find($id, $columns = ['*'])
 * @method Diocese first($columns = ['*'])
*/
class DioceseRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'no_diocese'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Diocese::class;
    }
}
