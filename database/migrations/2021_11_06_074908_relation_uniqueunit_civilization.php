<?php

use App\Models\uniqueunitsdata;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RelationUniqueunitCivilization extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('uniqueunitsdata', function (Blueprint $table) {
            $table->foreign('civcode') -> references('civcode') -> on('civilizationdata') ->onDelete('cascade') ->onUpdate('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('uniqueunitsdata', function (Blueprint $table) {
            //
        });
    }
}
