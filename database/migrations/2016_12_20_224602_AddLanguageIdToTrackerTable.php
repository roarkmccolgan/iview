<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLanguageIdToTrackerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trackers', function ($table) {
            $table->integer('language_id')->unsigned()->default(1);
            
            $table->foreign('language_id')
                  ->references('id')
                  ->on('languages');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trackers', function ($table) {
            $table->dropColumn(['language_id']);
        });
    }
}
