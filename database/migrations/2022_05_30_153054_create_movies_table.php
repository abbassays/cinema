<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::dropIfExists('movies');
        Schema::create('movies', function (Blueprint $table) {
            $table->integer('movie_id')->unsigned();
            $table->primary('movie_id');
            $table->string('title')->nullable(false);
            $table->string('movie_poster');
            $table->longText('description')->nullable(false);
            $table->integer('duration_min');
            $table->date('release_date')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
};
