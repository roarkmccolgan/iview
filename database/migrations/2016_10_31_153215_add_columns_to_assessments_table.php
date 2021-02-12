<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddColumnsToAssessmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('assessments', function ($table) {
            $table->string('code')->nullable();
            $table->string('score')->nullable();
            $table->string('rating')->nullable();
            $table->boolean('downloaded')->default(0);
            $table->string('relationship')->nullable();
            $table->string('qualification')->nullable();
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
            $table->dropColumn(['code']);
            $table->dropColumn(['score']);
            $table->dropColumn(['rating']);
            $table->dropColumn(['downloaded']);
            $table->dropColumn(['relationship']);
            $table->dropColumn(['qualification']);
        });
    }
}
