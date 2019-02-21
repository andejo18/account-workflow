<?php

use Illuminate\Database\Seeder;

class AccountTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	factory(App\AccountType::class)->create([
    		'account_type' => 'Trial',
    		'description' => 'Limited access to services.',
    		'cost' => 00.00
    	]);

    	factory(App\AccountType::class)->create([
    		'account_type' => 'Enterprise',
    		'description' => 'Full access to normal enterprise services.',
    		'cost' => 100.00
    	]);

    	factory(App\AccountType::class)->create([
    		'account_type' => 'Deluxe',
    		'description' => 'Full access to normal enterprise services plus access to the local zoo amenities.',
    		'cost' => 1000.00
    	]);
    }
}
