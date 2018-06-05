<?php

use Faker\Generator as Faker;

$factory->define(App\Zona::class, function (Faker $faker) {
    return [
        'nombre_zona'	                => $faker->name(4),
    ];
});
