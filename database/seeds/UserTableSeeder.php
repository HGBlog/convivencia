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
		    $fabiano->password = '$2y$10$YLUdhWGRAnnKhhpdbECkDeTjs./csO0ZvqT.JEnM9pRBwsx7gjrey';
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
		   	$responsavel = new User();
		    $responsavel->name = 'Fabio';
		    $responsavel->email = 'fabiojacomini@hotmail.com';
		    $responsavel->password = '$2y$10$tdTLaPKqozKzG.eEgKAN6.8zqFq5JlUwSSFMIvCcr0AsQ6./rgYDa';
		    $responsavel->save();
		    $responsavel->roles()->attach($admin);
		   	$responsavel = new User();
		    $responsavel->name = 'Raul';
		    $responsavel->email = 'rvianag@gmail.com';
		    $responsavel->password = '$2y$10$o/V5rmyOx2nz50x.Bi7nfuwoLHXCpTqq3xHPY4dozrlrJfV9dycgy';
		    $responsavel->save();
		    $responsavel->roles()->attach($admin);
		    $responsavel = new User();
		    $responsavel->name = 'Osmar Azevedo Costa';
		    $responsavel->email = 'cncbrasilia.osmarac@gmail.com';
		    $responsavel->password = '$2y$10$zM.EycWdcI3SDgCgocCBCeWh9VivnRfrrJS7a6ATIhlpO6t4yK.7.';
		    $responsavel->save();
		    $responsavel->roles()->attach($admin);
		    $responsavel = new User();
		    $responsavel->name = 'Hegberto Nunes da Silva Otávio';
		    $responsavel->email = 'hgbm88@hotmail.com';
		    $responsavel->password = '$2y$10$o619uoDEAKlj.CBG/mSzYeD9pNFCg6bZlWU8hcQTfFdJaykG7d6zW';
		    $responsavel->save();
		    $responsavel->roles()->attach($admin);		    
    }
}
