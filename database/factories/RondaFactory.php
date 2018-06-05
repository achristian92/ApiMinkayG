<?php

use Faker\Generator as Faker;

$factory->define(App\Ronda::class, function (Faker $faker) {
	static $number = 10;
    return [
        'num_ronda'                => $number++,
        'estadoronda'			   => 1,
    ];
});
