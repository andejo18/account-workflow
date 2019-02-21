<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->afterMaking(App\AccountType::class, function (App\AccountType $accountType, Faker $faker) {
	$factory->define(App\Account::class, function (Faker $faker) {
	    return [
	        'first_name' => $faker->first_name,
	        'last_name' => $faker->last_name,
	        'email' => $faker->email,
	        'account_type_id' => $accountType->id,
	        'active' => 'false'
	    ];
	});
});

