<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::table('users', function (Blueprint $table) {
		    $table->string('name');
	    });
	    Schema::table('users', function (Blueprint $table) {
		    $table->string('email');
	    });
	    Schema::table('users', function (Blueprint $table) {
		    $table->string('password');
	    });
	    Schema::table('users', function (Blueprint $table) {
		    $table->rememberToken();
	    });

    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
