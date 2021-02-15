<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('Series', function (Blueprint $table) {
            $table->increments('id');
			$table->string('title', 100)->nullable();
			$table->string('description', 255)->nullable();
			$table->string('startYear', 255)->nullable();
			$table->string('endYear', 255)->nullable();
			$table->string('rating', 255)->nullable();
			$table->date('modified')->nullable();
			$table->string('thumbnail', 255);
			$table->integer('character_id')->unsigned()->nullable();
            $table->foreign('character_id', 'CHARACTER_FK')->references('id')->on('Characters');
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
        Schema::dropIfExists('series');
    }
}
