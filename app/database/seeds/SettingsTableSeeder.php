<?php
// app/database/seeds/SettingsTableSeeder.php

class SettingsTableSeeder extends Seeder 
{

	public function run()
	{
		DB::table('settings')->delete();

		Setting::create(array(
			'key'	=> 'site-name',
			'value'	=> 'Environmental Services Marketplace'
		));

		Setting::create(array(
			'key'	=> 'administrative-email-address',
			'value'	=> 'joshua@tier27.com'
		));

		Setting::create(array(
			'key'	=> 'administrative-email-password',
			'value'	=> 'Thepianoman1!8*9(0)'
		));
	}

}
