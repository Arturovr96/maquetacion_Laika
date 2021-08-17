<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Productos;
use Faker\Generator as Faker;

$factory->define(Productos::class, function (Faker $faker) {
    return [
        'product' => $faker->name,
        'img' => $faker->imageUrl,
        'price' => $faker->randomNumber(6),
        'price_member' => $faker->randomNumber(6),
        'stars' => $faker->numberBetween($min = 0, $max = 5),
    ];
});
