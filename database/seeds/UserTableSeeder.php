<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           	$role_admin = Role::where('name', 'admin')->first();
		    $role_usuario  = Role::where('name', 'usuario')->first();
		    $role_responsavel  = Role::where('name', 'responsavel')->first();
		    $admin = new User();
		    $admin->name = 'Admin';
		    $admin->email = 'admin@ig.com.br';
		    $admin->password = bcrypt('123@abc');
		    $admin->save();
		   	$fabiano = new User();
		    $fabiano->name = 'Fabiano Galvao';
		    $fabiano->email = 'euo@ig.com.br';
		    $fabiano->password = bcrypt('123@abc');
		    $fabiano->save();
		    $fabiano->roles()->attach($role_admin);
		    $usuario = new User();
		    $usuario->name = 'Usuario';
		    $usuario->email = 'usuario@ig.com.br';
		    $usuario->password = bcrypt('123@abc');
		    $usuario->save();
		    $usuario->roles()->attach($role_usuario);
		   	$responsavel = new User();
		    $responsavel->name = 'Responsavel';
		    $responsavel->email = 'responsavel@ig.com.br';
		    $responsavel->password = bcrypt('123@abc');
		    $responsavel->save();
		    $responsavel->roles()->attach($role_responsavel);
    }
}
