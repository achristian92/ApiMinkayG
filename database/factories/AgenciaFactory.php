<?php

use Faker\Generator as Faker;

$factory->define(App\Agencia::class, function (Faker $faker) {

    return [
        'nombre_agencia'                => $faker->name(4),
        'direccion'			 			=> $faker->name(4),
    ];
});
