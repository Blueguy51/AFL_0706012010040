<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCivilizationdataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('civilizationdata', function (Blueprint $table) {
            $table->string('civcode');
            $table->primary('civcode');
            $table->string('banner')->default('');
            $table->string('civname');
            $table->string('civtype')->default('');
            $table->string('uniquetechone')->default('');
            $table->string('uniquetechtwo')->default('');
            $table->string('civsbonus')->default('');
            $table->string('teambonus')->default('');
            $table->text('civdescription')->default('');
            $table->text('civinformation1')->default('');
            $table->text('civinformation2')->default('');
            $table->text('civoverview')->default('');
            $table->text('strategies')->default('');
            $table->boolean('isOriginal');

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
        Schema::dropIfExists('civilizationdata');
    }
}
