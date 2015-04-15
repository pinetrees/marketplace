<?php
// app/database/seeds/CopyTableSeeder.php

class CopyTableSeeder extends Seeder 
{

	public function run()
	{
		DB::table('copy')->delete();

		Copy::create(array(
			'name'		=> 'default-copy',
			'content'	=> 'This is some default copy'
		));

		Copy::create(array(
			'name'		=> 'home-alert',
			'content'	=> 'This is a very important alert to capture the reader\'s attention'
		));
	}

}
