<?php

use Illuminate\Database\Seeder;

class PlacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// Make places from pdf. 
        factory(App\Place::class)->create([
        	'place' => 'Confirmation',
        	'description' => 'Initial state'
        ]);

        factory(App\Place::class)->create([
        	'place' => 'Setup',
        	'description' => 'Account being setup'
        ]);

        factory(App\Place::class)->create([
        	'place' => 'Activated',
        	'description' => 'Account is active'
        ]);

        factory(App\Place::class)->create([
        	'place' => 'Deactivated',
        	'description' => 'Account is deactivated'
        ]);
    }
}
