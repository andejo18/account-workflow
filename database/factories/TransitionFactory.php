<?php

use Faker\Generator as Faker;

$factory->define(App\Transition::class, function (Faker $faker) {
    $places = App\Place::pluck('place')->toArray();

    return [
        'name' => $faker->word,
        'from_place' => $faker->randomElement($places),
        'to_place' => $faker->randomElement($places),
        'action' => $faker->sentence(2)
    ];
});
