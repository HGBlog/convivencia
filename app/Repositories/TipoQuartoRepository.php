<?php

namespace App\Repositories;

use App\Models\TipoQuarto;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TipoQuartoRepository
 * @package App\Repositories
 * @version January 8, 2018, 12:10 pm UTC
 *
 * @method TipoQuarto findWithoutFail($id, $columns = ['*'])
 * @method TipoQuarto find($id, $columns = ['*'])
 * @method TipoQuarto first($columns = ['*'])
*/
class TipoQuartoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'no_quarto'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TipoQuarto::class;
    }
}
