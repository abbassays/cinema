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
        // Schema::dropIfExists('movie_show_times');
        Schema::create('movie_show_times', function (Blueprint $table) {
                $table->integer('movie_show_time_id')->unsigned();
                $table->primary('movie_show_time_id');
                $table->date('date')->nullable(false);
                $table->set('time',['15:00:00','18:00:00','21:00:00']);
                // $table->time('time')->nullable(false);
                $table->boolean('3d')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movie_show_times');
    }
};
