<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssessmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assessments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tool_id')->unsigned();
            $table->string('fname');
            $table->string('lname');
            $table->string('email');
            $table->string('company');
            $table->string('tel')->nullable();
            $table->binary('quiz');
            $table->binary('result');
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
        Schema::drop('assessments');
    }
}
