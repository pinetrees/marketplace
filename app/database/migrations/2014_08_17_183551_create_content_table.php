<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('content', function($table)
		{
			$table->increments('id');
			$table->integer('page_id');
			$table->string('section');
			$table->string('title');
			$table->string('name')->unique();
			$table->integer('order');
			$table->mediumText('content');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('content');
	}

}
