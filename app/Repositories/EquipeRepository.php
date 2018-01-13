<?php

namespace App\Repositories;

use App\Models\Equipe;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class EquipeRepository
 * @package App\Repositories
 * @version January 13, 2018, 4:00 pm UTC
 *
 * @method Equipe findWithoutFail($id, $columns = ['*'])
 * @method Equipe find($id, $columns = ['*'])
 * @method Equipe first($columns = ['*'])
*/
class EquipeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'no_equipe'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Equipe::class;
    }
}
