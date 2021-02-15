<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Characters', function (Blueprint $table) {
            $table->increments('id');
			$table->string('name', 100)->nullable();
			$table->string('description', 255)->nullable();
			$table->date('modified')->nullable();
			$table->string('thumbnail', 100);
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
        Schema::dropIfExists('characters');
    }
}
