<?php

namespace App\Repositories;

use App\Models\Acolhida;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AcolhidaRepository
 * @package App\Repositories
 * @version January 8, 2018, 5:32 pm UTC
 *
 * @method Acolhida findWithoutFail($id, $columns = ['*'])
 * @method Acolhida find($id, $columns = ['*'])
 * @method Acolhida first($columns = ['*'])
*/
class AcolhidaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'no_casa_convivencia',
        'dt_chegada',
        'nu_hora_chegada',
        'nu_voo_chegada',
        'dt_saida',
        'nu_hora_saida',
        'nu_voo_saida',
        'no_observacoes'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Acolhida::class;
    }
}
