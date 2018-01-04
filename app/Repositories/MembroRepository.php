<?php

namespace App\Repositories;

use App\Models\Membro;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class MembroRepository
 * @package App\Repositories
 * @version December 31, 2017, 8:43 am UTC
 *
 * @method Membro findWithoutFail($id, $columns = ['*'])
 * @method Membro find($id, $columns = ['*'])
 * @method Membro first($columns = ['*'])
*/
class MembroRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'no_usuario',
        'no_pais',
        'no_email',
        'co_telefone_pais',
        'nu_telefone',
        'no_diocese',
        'no_cidade',
        'no_paroquia',
        'nu_comunidade',
        'nu_ano_inicio_caminho',
        'etapa_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Membro::class;
    }
}
