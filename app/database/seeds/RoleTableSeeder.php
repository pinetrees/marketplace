<?php
// app/database/seeds/RoleTableSeeder.php

class RoleTableSeeder extends Seeder 
{

	public function run()
	{
		DB::table('roles')->delete();

		Role::create(array( 'name'	=> 'Administrator'));
		Role::create(array( 'name'	=> 'Provider'));
		Role::create(array( 'name'	=> 'Buyer'));
	}

}
