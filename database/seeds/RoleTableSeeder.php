<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
	public function run()
	  {
	    $role_admin = new Role();
	    $role_admin->name = 'admin';
	    $role_admin->description = 'Usuários Administradores do Sistema';
	    $role_admin->save();
	    $role_usuario = new Role();
	    $role_usuario->name = 'usuario';
	    $role_usuario->description = 'Usuário comum';
	    $role_usuario->save();
	   	$role_responsavel = new Role();
	    $role_responsavel->name = 'responsavel';
	    $role_responsavel->description = 'Usuário responsável de Equipe';
	    $role_responsavel->save();
	  }
}
