<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
			$table->string('title', 100)->nullable();
			$table->string('description', 255)->nullable();
			$table->string('start', 255)->nullable();
			$table->string('end', 255)->nullable();
			$table->string('thumbnail', 255);
			$table->integer('character_id')->unsigned()->nullable();
            $table->foreign('character_id')->references('id')->on('Characters');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
