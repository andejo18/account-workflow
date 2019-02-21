<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */


$factory->define(App\Account::class, function (Faker $faker) {
	$accountTypeIds = App\AccountType::pluck('id')->toArray();
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->email,
        'account_type_id' => $faker->randomElement($accountTypeIds),
        'active' => $faker->boolean
    ];
});
