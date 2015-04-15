<?php
// app/database/seeds/ResponseTableSeeder.php

class ResponseTableSeeder extends Seeder 
{

	public function run()
	{
		DB::table('responses')->delete();
	}

}
