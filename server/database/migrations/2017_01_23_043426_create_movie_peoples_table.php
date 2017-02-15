<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMoviePeoplesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie_peoples', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('movie_id')->unsigned();
            $table->integer('people_id')->unsigned();
            $table->integer('proffession_id')->unsigned();
            $table->string('name_in_movie');
            $table->string('character_in_movie');
            $table->text('movie_people_description');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('movie_id')->references('id')->on('movies');
            $table->foreign('people_id')->references('id')->on('peoples');
            $table->foreign('proffession_id')->references('id')->on('proffessions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('movie_peoples');
    }
}
