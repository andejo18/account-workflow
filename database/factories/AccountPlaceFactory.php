<?php

use Faker\Generator as Faker;

/*
* Starting with version = 0
*/
$factory->define(App\AccountPlace::class, function (Faker $faker) {
	$accounts = App\Account::pluck('id')->toArray();
	$places = App\Place::pluck('place')->toArray();

    return [
        'account_id' => $faker->randomElement($accounts),
        'place' => $faker->randomElement($places),
        'version' => 0
    ];
});
