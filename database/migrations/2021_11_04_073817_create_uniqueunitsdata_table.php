<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUniqueunitsdataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uniqueunitsdata', function (Blueprint $table) {
        
            $table->string('unitcode');
            $table->primary('unitcode');
            $table->string('civcode');
            $table->string('uniticon')->default('');
            $table->string('unitname')->default('');
            $table->string('introduced')->default('');
            $table->string('type')->default('');
            $table->string('age')->default('');

            $table->string('hitpoint')->default('');
            $table->string('attack')->default('');
            $table->string('attackbonus')->default('');
            $table->string('rateoffire')->default('');
            $table->string('armormelee')->default('');
            $table->string('armorpierce')->default('');
            $table->string('armorclass')->default('');
            $table->string('movement')->default('');
            $table->string('lineofsight')->default('');

            $table->string('trainedat')->default('');
            $table->string('traincost')->default('');
            $table->string('traintime')->default('');

            $table->text('strong')->default('');
            $table->text('weak')->default('');

            $table->text('unitdes')->default('');
            
            $table->text('unitstrategy')->default('');

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
        Schema::dropIfExists('uniqueunitsdata');
    }
}
