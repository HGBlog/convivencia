<?php

namespace App\Repositories;

use App\Models\RelatorioAcolhidaTermino;
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
class RelatorioAcolhidaTerminoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'no_usuario',
        'no_conjuge',
        'convivencia_id',
        'tipo_pessoa',
        'telefone',
        'carisma',
        'equipe',
        'dt_saida',
        'nu_voo_saida',
        'no_local_saida',
        'no_observacoes'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return RelatorioAcolhidaTermino::class;
    }
}
