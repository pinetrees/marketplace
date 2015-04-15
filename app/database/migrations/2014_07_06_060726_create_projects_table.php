<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('projects', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('summary');
			$table->mediumText('about');
			$table->mediumText('purpose');
			$table->mediumText('requirements');
			$table->mediumText('terms');
			$table->mediumText('timeline');
			$table->mediumText('budget');
			$table->mediumText('resources');
			$table->mediumText('qualifications');
			$table->mediumText('evaluation');
			$table->mediumInteger('user_id');
			$table->mediumInteger('region_id');
			$table->mediumInteger('provider_id');
			$table->date('start_date');
			$table->date('end_date');
			$table->boolean('active')->default(true);
			$table->boolean('public')->defauit(true);
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
		Schema::drop('projects');
	}

}
