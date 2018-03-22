<?php

namespace App\Repositories;

use App\Models\RelatorioMembros;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class RelatorioMembrosRepository
 * @package App\Repositories
 * @version March 22, 2018, 1:35 pm UTC
 *
 * @method RelatorioMembros findWithoutFail($id, $columns = ['*'])
 * @method RelatorioMembros find($id, $columns = ['*'])
 * @method RelatorioMembros first($columns = ['*'])
*/
class RelatorioMembrosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'no_usuario',
        'no_conjuge'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return RelatorioMembros::class;
    }
}
