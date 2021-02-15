<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stories', function (Blueprint $table) {
            $table->increments('id');
			$table->string('title', 100)->nullable();
			$table->string('description', 255)->nullable();
			$table->string('type', 255)->nullable();
			$table->date('modified')->nullable();
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
        Schema::dropIfExists('stories');
    }
}
