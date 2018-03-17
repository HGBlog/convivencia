<?php

namespace App\Repositories;

use App\Models\RelatorioAcolhidaChegada;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class RelatorioAcolhidaRepository
 * @package App\Repositories
 * @version March 15, 2018, 12:28 am UTC
 *
 * @method RelatorioAcolhida findWithoutFail($id, $columns = ['*'])
 * @method RelatorioAcolhida find($id, $columns = ['*'])
 * @method RelatorioAcolhida first($columns = ['*'])
*/
class RelatorioAcolhidaChegadaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'no_usuario',
        'no_conjuge',
        'convivencia_id',
        'no_acolhida_extra',
        'tipo_translado',
        'dt_chegada',
        'nu_hora_chegada',
        'nu_voo_chegada',
        'no_local_chegada',
        'no_observacoes'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return RelatorioAcolhidaChegada::class;
    }
}
