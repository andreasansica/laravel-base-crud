<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Peripheral;
use Faker\Generator as Faker;

$factory->define(Peripheral::class, function (Faker $faker) {
    return [
        "name" => $faker -> word(),
        "model" => rand(1, 1000),
        "price" => $faker -> numberBetween(10, 100),
        "consumption" => $faker -> numberBetween(1, 100)
    ];
});
