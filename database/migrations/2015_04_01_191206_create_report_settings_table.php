<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportSettingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('report_settings', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('iview_id')->unsigned();
            $table->foreign('iview_id')->references('id')->on('iviews');
            $table->integer('analytics_id');
            $table->string('url');
            $table->string('company');
            $table->string('title');
            $table->string('corpcolor');
            $table->string('database');
            $table->string('connection');
            $table->string('table');
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
		Schema::drop('report_settings');
	}

}
