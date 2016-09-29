<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tools', function(Blueprint $table) {
            $table->increments('id');
            $table->string('alias');
            $table->string('title');
            $table->string('sub_title')->nullable();
            $table->integer('company_id')->unsigned();
            $table->timestamp('start_date');
            $table->timestamp('end_date');
            $table->string('gapropertyid');
            $table->string('template')->default('default');
            $table->boolean('active')->default(1);
            $table->timestamps();

            $table->foreign('company_id')
                  ->references('id')
                  ->on('companies')
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
        Schema::drop('tools');
    }
}
