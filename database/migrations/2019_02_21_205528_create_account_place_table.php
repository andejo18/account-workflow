<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountPlaceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_place', function (Blueprint $table) {
            $table->integer('account_id')->unsigned();
            $table->string('place');
            $table->smallInteger('version');
            $table->timestamps();

            $table->primary(['account_id', 'place', 'version']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('account_place');
    }
}
