<?php

use Faker\Generator as Faker;

$factory->define(App\Place::class, function (Faker $faker) {
    return [
        'place' => $faker->word,
        'description' => $faker->sentence
    ];
});
