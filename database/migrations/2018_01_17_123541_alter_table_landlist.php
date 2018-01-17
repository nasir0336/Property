<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableLandlist extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

	    Schema::table('landlist', function (Blueprint $table) {
		    $table->string('city')->nullable();
	    });

    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}
