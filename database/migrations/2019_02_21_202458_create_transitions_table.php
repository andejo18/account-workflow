<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transitions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('from_place');
            $table->string('to_place');
            $table->string('action');
            $table->timestamps();

            $table->foreign('from_place')
                ->references('place')
                ->on('places');

            $table->foreign('to_place')
                ->references('place')
                ->on('places');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transitions');
    }
}
