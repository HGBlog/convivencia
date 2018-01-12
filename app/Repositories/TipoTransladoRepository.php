<?php

namespace App\Repositories;

use App\Models\TipoTranslado;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TipoTransladoRepository
 * @package App\Repositories
 * @version January 12, 2018, 3:58 pm UTC
 *
 * @method TipoTranslado findWithoutFail($id, $columns = ['*'])
 * @method TipoTranslado find($id, $columns = ['*'])
 * @method TipoTranslado first($columns = ['*'])
*/
class TipoTransladoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'no_translado'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TipoTranslado::class;
    }
}
