<?php
// app/database/seeds/RegionTableSeeder.php

class RegionTableSeeder extends Seeder 
{

	public function run()
	{
		DB::table('regions')->delete();

		$regions = array(
			array('name'	=> 'Asia'),
			array('name'	=> 'Africa'),
			array('name'	=> 'Europe'),
			array('name'	=> 'Australia'),
			array('name'	=> 'North America'),
			array('name'	=> 'South America'),
			array('name'	=> 'Antarctica')
		);

		foreach( $regions as $region ) Region::create($region);
	}

}
