<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Models\Membro::class, function (Faker $faker) use ($factory) {

    return [
        'owner_id' => str_random(1),
        'no_usuario' => $faker->name,
		'no_pais' => $faker->name,
		'no_sexo' => $faker->name(1),
		'co_telefone_pais' => str_random(3),
		'nu_telefone' => $faker->phoneNumber,
		'no_diocese' => $faker->name,
		'no_cidade' => $faker->name,
		'no_paroquia' => $faker->name,
		'nu_comunidade' => str_random(2),
		'etapa_id' =>  $factory->create('App\Models\Etapa')->id,
		'equipe_id' => $factory->create('App\Models\Equipe')->id,
		'tipo_carisma_id' => $factory->create('App\Models\TipoCarisma')->id,
        'no_email' => $faker->unique()->safeEmail,
    ];
});
