<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	    Schema::create('users', function($table)
	    {
	        $table->increments('id');
			$table->tinyInteger('role_id');
	        $table->string('first_name');
	        $table->string('last_name');
	        $table->string('company');
	        $table->string('email')->unique();
	        $table->string('username')->unique();
	        $table->string('password');
	        $table->string('phone');
	        $table->string('website');
	        $table->boolean('tooltips')->default(true);
	        $table->boolean('notifications')->default(true);
	        $table->boolean('hasAvatar')->default(false);
            $table->string('remember_token', 100)->nullable();
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
	    Schema::drop('users');
	}

}
