<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrackerHitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tracker_hits', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tracker_id')->unsigned();
            $table->enum('type', ['view', 'completion']);
            $table->timestamps();

            $table->foreign('tracker_id')
                  ->references('id')
                  ->on('trackers')
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
        Schema::drop('tracker_hits');
    }
}
