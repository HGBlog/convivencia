<?php

namespace App\Repositories;

use App\Models\TipoEquipe;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TipoEquipeRepository
 * @package App\Repositories
 * @version January 12, 2018, 5:52 pm UTC
 *
 * @method TipoEquipe findWithoutFail($id, $columns = ['*'])
 * @method TipoEquipe find($id, $columns = ['*'])
 * @method TipoEquipe first($columns = ['*'])
*/
class TipoEquipeRepository extends BaseRepository
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
        return TipoEquipe::class;
    }
}
