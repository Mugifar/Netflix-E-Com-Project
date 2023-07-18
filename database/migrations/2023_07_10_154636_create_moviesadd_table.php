<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesaddTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moviesadd', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('category');
            $table->string('cast');
            $table->string('language');
            $table->string('year');
            $table->string('runtime')->nullable();
            $table->string('genres')->nullable();
            $table->longText('discription');
            $table->string('image');
            $table->string('movie_clip');
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
        Schema::dropIfExists('moviesadd');
    }
}
