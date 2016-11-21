<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExtraFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extra_fields', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tool_id')->unsigned();
            $table->string('name');
            $table->string('label');
            $table->string('type');
            $table->string('trans');
            $table->string('error');
            $table->binary('options')->nullable(0);
            $table->boolean('required')->default(0);
            $table->integer('order');
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
        Schema::drop('extra_fields');
    }
}
