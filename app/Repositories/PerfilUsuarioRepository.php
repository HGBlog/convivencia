<?php

namespace App\Repositories;

use App\Models\PerfilUsuario;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PerfilUsuarioRepository
 * @package App\Repositories
 * @version December 30, 2017, 11:51 pm UTC
 *
 * @method PerfilUsuario findWithoutFail($id, $columns = ['*'])
 * @method PerfilUsuario find($id, $columns = ['*'])
 * @method PerfilUsuario first($columns = ['*'])
*/
class PerfilUsuarioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'no_usuario',
        'no_pais',
        'no_email',
        'co_telefone_pais',
        'nu_telefone'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return PerfilUsuario::class;
    }
}
