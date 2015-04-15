<?php
// app/database/seeds/CategoryProjectTableSeeder.php

class CategoryProjectTableSeeder extends Seeder 
{

	public function run()
	{
		//Do nothing here
		return;
		//DB::table('category_project')->delete();

		$category_projects = array(
			array(
				'category_id'	=> '1',
				'project_id'	=> '1'
			),
			array(
				'category_id'	=> '2',
				'project_id'	=> '1'
			),
		);

		foreach( $category_projects as $category_project ) DB::table('category_project')->insert($category_project);
	}

}
