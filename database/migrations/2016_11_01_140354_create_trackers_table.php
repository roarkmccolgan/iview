<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrackersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trackers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tool_id')->unsigned();
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('code');
            $table->integer('views')->default(0);
            $table->integer('completions')->default(0);
            $table->boolean('active')->default(1);
            $table->timestamps();

            $table->foreign('tool_id')
                  ->references('id')
                  ->on('tools')
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
        Schema::drop('trackers');
    }
}
