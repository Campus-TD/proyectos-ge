<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('country');
            $table->string('city');
            $table->string('zipcode');
            $table->integer('age');
            $table->string('genre');
            $table->boolean('agree');
            $table->string('word1');
            $table->string('word22');
            $table->string('word33');
            $table->string('url_audio1');
            $table->string('url_audio2');
            $table->string('url_audio3');
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
        Schema::dropIfExists('personas');
    }
}
