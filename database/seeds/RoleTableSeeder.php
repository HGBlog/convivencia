<?php

use Illuminate\Database\Seeder;
use Backpack\PermissionManager\app\Models\Role;

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
	    $role_admin->save();
	   	$role_responsavel = new Role();
	    $role_responsavel->name = 'responsavel';
	    $role_responsavel->save();
	    $role_usuario = new Role();
	    $role_usuario->name = 'gestor_convivencia';
	    $role_usuario->save();
	   	$role_usuario = new Role();
	    $role_usuario->name = 'usuario';
	    $role_usuario->save();
	  }
}
