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
        Schema::table('movie_show_times', function (Blueprint $table) {
            $table->integer('belongs_to')->unsigned()->nullable();
            $table->foreign('belongs_to')
                ->references('movie_id')
                ->on('movies')
                ->onDelete('cascade');
        });

        Schema::table('tickets', function (Blueprint $table) {
            $table->integer('show_time_id')->unsigned()->nullable();
            $table->foreign('show_time_id')
                ->references('movie_show_time_id')
                ->on('movie_show_times')
                ->onDelete('cascade');

            $table->unsignedBigInteger('bought_by')->nullable();
            $table->foreign('bought_by')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });

        Schema::table('seats', function (Blueprint $table) {
            $table->integer('ticket_no')->unsigned()->nullable();
            $table->foreign('ticket_no')
                ->references('ticket_id')
                ->on('tickets')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
