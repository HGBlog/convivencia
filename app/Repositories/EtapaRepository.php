<?php

namespace App\Repositories;

use App\Models\Etapa;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class EtapaRepository
 * @package App\Repositories
 * @version December 31, 2017, 12:02 am UTC
 *
 * @method Etapa findWithoutFail($id, $columns = ['*'])
 * @method Etapa find($id, $columns = ['*'])
 * @method Etapa first($columns = ['*'])
*/
class EtapaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'no_etapa'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Etapa::class;
    }
}
