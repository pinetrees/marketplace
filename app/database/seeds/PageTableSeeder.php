<?php
// app/database/seeds/PageTableSeeder.php

class PageTableSeeder extends Seeder 
{

	public function run()
	{
		DB::table('pages')->delete();

		Page::create(array(
			'title'		=> 'About',
			'name'		=> 'about',
			'summary'	=> 'ESM (Environmental Services Marketplace) is a venue that allows you to find the help you have been looking for.'
		));

		Page::create(array(
			'title'		=> 'News',
			'name'		=> 'news',
			'summary'	=> 'A tagline for the news.'
		));

		Page::create(array(
			'title'		=> 'Market',
			'name'		=> 'market',
			'summary'	=> 'A place for searching.'
		));
	}

}
