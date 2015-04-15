<?php
// app/database/seeds/ServiceTableSeeder.php

class ServiceTableSeeder extends Seeder 
{

	public function run()
	{
		DB::table('services')->delete();

		$services = array(
			array(
				'name'		=> 'Asian Shades Service',
				'summary'	=> 'Keeping the trees in Asia',
				'about'		=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce faucibus tellus a vulputate molestie. Phasellus mattis erat quis metus tincidunt, blandit ultrices ipsum vulputate. Nullam neque tellus, faucibus eget nisl a, eleifend imperdiet dui. Nulla ac leo in justo dictum semper sit amet sit amet dui. Pellentesque lacinia consequat eros vel posuere. Mauris dignissim porttitor eros, non interdum risus volutpat sed. Phasellus molestie dignissim arcu, et malesuada odio tempus ut. In hac habitasse platea dictumst. Suspendisse potenti. Phasellus pulvinar sed purus sit amet luctus. In iaculis mauris vitae tincidunt molestie. Fusce accumsan lobortis velit sodales tempor.',
				'user_id'	=> 2,
				'region_id'	=> 1,
			),
			array(
				'name'		=> 'African Deserts Service',
				'summary'	=> 'Keeping the deserts in Africa',
				'about'		=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce faucibus tellus a vulputate molestie. Phasellus mattis erat quis metus tincidunt, blandit ultrices ipsum vulputate. Nullam neque tellus, faucibus eget nisl a, eleifend imperdiet dui. Nulla ac leo in justo dictum semper sit amet sit amet dui. Pellentesque lacinia consequat eros vel posuere. Mauris dignissim porttitor eros, non interdum risus volutpat sed. Phasellus molestie dignissim arcu, et malesuada odio tempus ut. In hac habitasse platea dictumst. Suspendisse potenti. Phasellus pulvinar sed purus sit amet luctus. In iaculis mauris vitae tincidunt molestie. Fusce accumsan lobortis velit sodales tempor.',
				'user_id'	=> 2,
				'region_id'	=> 2,
			),
			array(
				'name'		=> 'European Girls Service',
				'summary'	=> 'Keeping the girls in Europe',
				'about'		=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce faucibus tellus a vulputate molestie. Phasellus mattis erat quis metus tincidunt, blandit ultrices ipsum vulputate. Nullam neque tellus, faucibus eget nisl a, eleifend imperdiet dui. Nulla ac leo in justo dictum semper sit amet sit amet dui. Pellentesque lacinia consequat eros vel posuere. Mauris dignissim porttitor eros, non interdum risus volutpat sed. Phasellus molestie dignissim arcu, et malesuada odio tempus ut. In hac habitasse platea dictumst. Suspendisse potenti. Phasellus pulvinar sed purus sit amet luctus. In iaculis mauris vitae tincidunt molestie. Fusce accumsan lobortis velit sodales tempor.',
				'user_id'	=> 2,
				'region_id'	=> 3,
			),
			array(
				'name'		=> 'Australian Kangaroos Service',
				'summary'	=> 'Keeping the kangaroos in Australia',
				'about'		=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce faucibus tellus a vulputate molestie. Phasellus mattis erat quis metus tincidunt, blandit ultrices ipsum vulputate. Nullam neque tellus, faucibus eget nisl a, eleifend imperdiet dui. Nulla ac leo in justo dictum semper sit amet sit amet dui. Pellentesque lacinia consequat eros vel posuere. Mauris dignissim porttitor eros, non interdum risus volutpat sed. Phasellus molestie dignissim arcu, et malesuada odio tempus ut. In hac habitasse platea dictumst. Suspendisse potenti. Phasellus pulvinar sed purus sit amet luctus. In iaculis mauris vitae tincidunt molestie. Fusce accumsan lobortis velit sodales tempor.',
				'user_id'	=> 2,
				'region_id'	=> 4,
			),
			array(
				'name'		=> 'North American Valley Girls Service',
				'summary'	=> 'Keeping the valley girls in North America',
				'about'		=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce faucibus tellus a vulputate molestie. Phasellus mattis erat quis metus tincidunt, blandit ultrices ipsum vulputate. Nullam neque tellus, faucibus eget nisl a, eleifend imperdiet dui. Nulla ac leo in justo dictum semper sit amet sit amet dui. Pellentesque lacinia consequat eros vel posuere. Mauris dignissim porttitor eros, non interdum risus volutpat sed. Phasellus molestie dignissim arcu, et malesuada odio tempus ut. In hac habitasse platea dictumst. Suspendisse potenti. Phasellus pulvinar sed purus sit amet luctus. In iaculis mauris vitae tincidunt molestie. Fusce accumsan lobortis velit sodales tempor.',
				'user_id'	=> 2,
				'region_id'	=> 5,
			),
			array(
				'name'		=> 'South American Babes Service',
				'summary'	=> 'Keeping the babes in South America',
				'about'		=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce faucibus tellus a vulputate molestie. Phasellus mattis erat quis metus tincidunt, blandit ultrices ipsum vulputate. Nullam neque tellus, faucibus eget nisl a, eleifend imperdiet dui. Nulla ac leo in justo dictum semper sit amet sit amet dui. Pellentesque lacinia consequat eros vel posuere. Mauris dignissim porttitor eros, non interdum risus volutpat sed. Phasellus molestie dignissim arcu, et malesuada odio tempus ut. In hac habitasse platea dictumst. Suspendisse potenti. Phasellus pulvinar sed purus sit amet luctus. In iaculis mauris vitae tincidunt molestie. Fusce accumsan lobortis velit sodales tempor.',
				'user_id'	=> 2,
				'region_id'	=> 6,
			),
			array(
				'name'		=> 'Antarctican Ice Service',
				'summary'	=> 'Keeping the ice in Antarctica',
				'about'		=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce faucibus tellus a vulputate molestie. Phasellus mattis erat quis metus tincidunt, blandit ultrices ipsum vulputate. Nullam neque tellus, faucibus eget nisl a, eleifend imperdiet dui. Nulla ac leo in justo dictum semper sit amet sit amet dui. Pellentesque lacinia consequat eros vel posuere. Mauris dignissim porttitor eros, non interdum risus volutpat sed. Phasellus molestie dignissim arcu, et malesuada odio tempus ut. In hac habitasse platea dictumst. Suspendisse potenti. Phasellus pulvinar sed purus sit amet luctus. In iaculis mauris vitae tincidunt molestie. Fusce accumsan lobortis velit sodales tempor.',
				'user_id'	=> 2,
				'region_id'	=> 7,
			),
		);
		$categories = array(
			array(2),
			array(3),
			array(4),
			array(5),
			array(6),
			array(7),
			array(8),
		);


		foreach( $services as $index => $service ) {
			$service = Service::create($service);

			$service->categories()->attach(Category::extendNodes($categories[$index]));
		}
	}

}
