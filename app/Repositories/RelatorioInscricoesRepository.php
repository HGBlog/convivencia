<?php

namespace App\Repositories;

use App\Models\RelatorioInscricoes;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class RelatorioInscricoesRepository
 * @package App\Repositories
 * @version March 17, 2018, 5:09 pm UTC
 *
 * @method RelatorioInscricoes findWithoutFail($id, $columns = ['*'])
 * @method RelatorioInscricoes find($id, $columns = ['*'])
 * @method RelatorioInscricoes first($columns = ['*'])
*/
class RelatorioInscricoesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'conv_id',
        'nome_conv'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return RelatorioInscricoes::class;
    }
}
