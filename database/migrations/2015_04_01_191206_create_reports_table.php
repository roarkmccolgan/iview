<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('reports', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('url_id')->unsigned();
            $table->string('name');
            $table->string('database');
            $table->string('connection')->default('mysql');
            $table->string('table');
            $table->string('ignore_fields');
            $table->timestamps();

            $table->foreign('url_id')
            	  ->references('id')
            	  ->on('urls')
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
		Schema::drop('reports');
	}

}
