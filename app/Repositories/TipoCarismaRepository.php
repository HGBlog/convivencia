<?php

namespace App\Repositories;

use App\Models\TipoCarisma;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TipoCarismaRepository
 * @package App\Repositories
 * @version January 12, 2018, 1:57 pm UTC
 *
 * @method TipoCarisma findWithoutFail($id, $columns = ['*'])
 * @method TipoCarisma find($id, $columns = ['*'])
 * @method TipoCarisma first($columns = ['*'])
*/
class TipoCarismaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'no_carisma'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TipoCarisma::class;
    }
}
