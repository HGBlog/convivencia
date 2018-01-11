<?php

namespace App\Repositories;

use App\Models\Usuario;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class UsuarioRepository
 * @package App\Repositories
 * @version January 11, 2018, 7:27 am UTC
 *
 * @method Usuario findWithoutFail($id, $columns = ['*'])
 * @method Usuario find($id, $columns = ['*'])
 * @method Usuario first($columns = ['*'])
*/
class UsuarioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email',
        'password',
        'remember_token'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Usuario::class;
    }
}
