<?php

use Illuminate\Database\Seeder;

class TransitionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Transition::class)->create([
			'name' => 'to_setup',
	        'from_place' => 'Confirmation',
	        'to_place' => 'Setup',
	        'action' => 'log a message'
	    ]);

	    factory(App\Transition::class)->create([
			'name' => 'activate',
	        'from_place' => 'Setup',
	        'to_place' => 'Activated',
	        'action' => 'log a message'
	    ]);

	    factory(App\Transition::class)->create([
			'name' => 'deactivate',
	        'from_place' => 'Activated',
	        'to_place' => 'Deactivated',
	        'action' => 'change active to false'
	    ]);

	    factory(App\Transition::class)->create([
			'name' => 'cancel',
	        'from_place' => 'Setup',
	        'to_place' => 'Deactivated',
	        'action' => 'change active to false'
	    ]);
    }
}
