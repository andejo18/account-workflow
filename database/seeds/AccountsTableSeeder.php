<?php

use Illuminate\Database\Seeder;

class AccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Defaulting to Setup right now.
     *
     * @return void
     */
    public function run()
    {
    	// TODO Logic to figure out the default place based on acc.active.
        $accounts = factory(App\Account::class, 10)
			->create()
			->each(function ($acct) {
				factory(App\AccountPlace::class)
					->create([
						'account_id' => $acct->id,
				        'place' => 'Setup',
				        'version' => 0
					]);
			});
	}
}
