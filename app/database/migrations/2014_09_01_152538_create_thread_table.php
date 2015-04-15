<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThreadTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('threads', function($table)
		{
			$table->increments('id');
			$table->integer('project_id');
			$table->integer('service_id');
			$table->integer('sender_id');
			$table->integer('recipient_id');
			$table->string('name');
			$table->boolean('approved');
			$table->boolean('read');
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
		Schema::drop('threads');	
	}

}
