<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResponseTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('responses', function($table)
		{
			$table->increments('id');
			$table->integer('message_id');
			$table->integer('sender_id');
			$table->integer('recipient_id');
			$table->mediumText('response');
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
		Schema::drop('responses');

	}

}
