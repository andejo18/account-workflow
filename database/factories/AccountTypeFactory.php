<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\AccountType::class, function (Faker $faker) {
    return [
        'account_type' => $faker->word,
        'description' => $faker->paragraph
    ];
});
