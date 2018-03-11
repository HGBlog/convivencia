<?php

namespace App\Repositories;

use App\Models\MacroRegiao;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class MacroRegiaoRepository
 * @package App\Repositories
 * @version March 11, 2018, 12:52 am UTC
 *
 * @method MacroRegiao findWithoutFail($id, $columns = ['*'])
 * @method MacroRegiao find($id, $columns = ['*'])
 * @method MacroRegiao first($columns = ['*'])
*/
class MacroRegiaoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'no_macro_regiao',
        'no_responsavel'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return MacroRegiao::class;
    }
}
