<?php
// app/database/seeds/ContentTableSeeder.php

class ContentTableSeeder extends Seeder 
{

	public function run()
	{
		DB::table('content')->delete();

		Content::create(array(
			'page_id'	=> 1,
			'section'	=> 'main',
			'title'		=> 'ESM',
			'name'		=> 'esm',
			'order'		=> 0,
			'content'	=> 'ESM is a marketplace for environmental services. We help individuals and businesses to search for environmental services, compare prices, and choose the best environmental professionals matching their needs. We also assist environmental professionals and firms in promoting their services in ways that are more accessible to their clients, creating a network that allows for greater environmental solutions for sustainable businesses and ecosystems.'
		));

		Content::create(array(
			'page_id'	=> 1,
			'section'	=> 'main',
			'title'		=> 'Vision',
			'name'		=> 'vision',
			'order'		=> 1,
			'content'	=> 'We believe that through collaboration and the exchange of skills and knowledge about our physical environment, we can build a more sustainable planet, not only for ourselves but also for future genera>ons. To that end, we strive to create an ever-growing market for that exchange to take place.'
		));

		Content::create(array(
			'page_id'	=> 1,
			'section'	=> 'main',
			'title'		=> 'Principles',
			'name'		=> 'principles',
			'order'		=> 2,
			'content'	=> '<ol> 
            <li>Every person can be empowered to improve the quality of their environment.</li> 
            <li>Empowerment requires the sharing of knowledge and skills.</li> 
            <li>Environmental innovation is fundamental to business development.</li> 
            <li>The larger the network of environmental collaborators, the larger the scale of environmental change.</li> 
        	</ol>'
		));

		Content::create(array(
			'page_id'	=> 2,
			'section'	=> 'main',
			'title'		=> 'Lorem Ipsum',
			'name'		=> 'lorem-ipsum',
			'order'		=> 0,
			'content'	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas placerat tincidunt interdum. Proin faucibus turpis vel lobortis luctus. Aliquam et finibus felis, sit amet egestas magna. Vestibulum blandit est at elit gravida, ut vehicula ligula posuere. In vel ornare mauris. In tincidunt consectetur ante, sed bibendum odio molestie a. Pellentesque id tempor arcu. Mauris dignissim facilisis ligula, at porta nulla maximus quis. Pellentesque maximus magna sed tortor vulputate, non tempus nisl cursus. Nulla facilisi. Suspendisse sodales quam sit amet sapien dignissim fermentum quis in enim.'
		));

	}

}
