<?php

use Faker\Generator as Faker;

$factory->define(App\Modulo::class, function (Faker $faker) {
    return [
        'nombre_modulo'                => $faker->name(4),
    ];
});
