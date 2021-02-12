<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class DropColumnsFromAssessments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('assessments', function ($table) {
            $table->dropColumn(['relationship']);
            $table->dropColumn(['qualification']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('assessments', function ($table) {
            $table->string('relationship')->nullable();
            $table->string('qualification')->nullable();
        });
    }
}
