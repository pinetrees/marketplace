<?php
// app/database/seeds/ProjectTableSeeder.php

class ProjectTableSeeder extends Seeder 
{

	public function run()
	{
		DB::table('projects')->delete();

		$projects = array(
			array(
				'name'		=> 'Asian Shades Project',
				'summary'	=> 'Keeping the trees in Asia',
				'about'		=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce faucibus tellus a vulputate molestie. Phasellus mattis erat quis metus tincidunt, blandit ultrices ipsum vulputate. Nullam neque tellus, faucibus eget nisl a, eleifend imperdiet dui. Nulla ac leo in justo dictum semper sit amet sit amet dui. Pellentesque lacinia consequat eros vel posuere. Mauris dignissim porttitor eros, non interdum risus volutpat sed. Phasellus molestie dignissim arcu, et malesuada odio tempus ut. In hac habitasse platea dictumst. Suspendisse potenti. Phasellus pulvinar sed purus sit amet luctus. In iaculis mauris vitae tincidunt molestie. Fusce accumsan lobortis velit sodales tempor.',
				'user_id'	=> 1,
				'region_id'	=> 1,
				'start_date'	=> date('Y-m-d'),
				'end_date'	=> date('Y-m-d'),
			),
			array(
				'name'		=> 'African Deserts Project',
				'summary'	=> 'Keeping the deserts in Africa',
				'about'		=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce faucibus tellus a vulputate molestie. Phasellus mattis erat quis metus tincidunt, blandit ultrices ipsum vulputate. Nullam neque tellus, faucibus eget nisl a, eleifend imperdiet dui. Nulla ac leo in justo dictum semper sit amet sit amet dui. Pellentesque lacinia consequat eros vel posuere. Mauris dignissim porttitor eros, non interdum risus volutpat sed. Phasellus molestie dignissim arcu, et malesuada odio tempus ut. In hac habitasse platea dictumst. Suspendisse potenti. Phasellus pulvinar sed purus sit amet luctus. In iaculis mauris vitae tincidunt molestie. Fusce accumsan lobortis velit sodales tempor.',
				'user_id'	=> 3,
				'region_id'	=> 2,
				'start_date'	=> date('Y-m-d'),
				'end_date'	=> date('Y-m-d'),
			),
			array(
				'name'		=> 'European Countries Project',
				'summary'	=> 'Keeping the countries in Europe',
				'about'		=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce faucibus tellus a vulputate molestie. Phasellus mattis erat quis metus tincidunt, blandit ultrices ipsum vulputate. Nullam neque tellus, faucibus eget nisl a, eleifend imperdiet dui. Nulla ac leo in justo dictum semper sit amet sit amet dui. Pellentesque lacinia consequat eros vel posuere. Mauris dignissim porttitor eros, non interdum risus volutpat sed. Phasellus molestie dignissim arcu, et malesuada odio tempus ut. In hac habitasse platea dictumst. Suspendisse potenti. Phasellus pulvinar sed purus sit amet luctus. In iaculis mauris vitae tincidunt molestie. Fusce accumsan lobortis velit sodales tempor.',
				'user_id'	=> 3,
				'region_id'	=> 3,
				'start_date'	=> date('Y-m-d'),
				'end_date'	=> date('Y-m-d'),
			),
			array(
				'name'		=> 'Australian Kangaroos Project',
				'summary'	=> 'Keeping the kangaroos in Australia',
				'about'		=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce faucibus tellus a vulputate molestie. Phasellus mattis erat quis metus tincidunt, blandit ultrices ipsum vulputate. Nullam neque tellus, faucibus eget nisl a, eleifend imperdiet dui. Nulla ac leo in justo dictum semper sit amet sit amet dui. Pellentesque lacinia consequat eros vel posuere. Mauris dignissim porttitor eros, non interdum risus volutpat sed. Phasellus molestie dignissim arcu, et malesuada odio tempus ut. In hac habitasse platea dictumst. Suspendisse potenti. Phasellus pulvinar sed purus sit amet luctus. In iaculis mauris vitae tincidunt molestie. Fusce accumsan lobortis velit sodales tempor.',
				'user_id'	=> 3,
				'region_id'	=> 4,
				'start_date'	=> date('Y-m-d'),
				'end_date'	=> date('Y-m-d'),
			),
			array(
				'name'		=> 'North American Valley Girls Project',
				'summary'	=> 'Keeping the valley girls in North America',
				'about'		=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce faucibus tellus a vulputate molestie. Phasellus mattis erat quis metus tincidunt, blandit ultrices ipsum vulputate. Nullam neque tellus, faucibus eget nisl a, eleifend imperdiet dui. Nulla ac leo in justo dictum semper sit amet sit amet dui. Pellentesque lacinia consequat eros vel posuere. Mauris dignissim porttitor eros, non interdum risus volutpat sed. Phasellus molestie dignissim arcu, et malesuada odio tempus ut. In hac habitasse platea dictumst. Suspendisse potenti. Phasellus pulvinar sed purus sit amet luctus. In iaculis mauris vitae tincidunt molestie. Fusce accumsan lobortis velit sodales tempor.',
				'user_id'	=> 3,
				'region_id'	=> 5,
				'start_date'	=> date('Y-m-d'),
				'end_date'	=> date('Y-m-d'),
			),
			array(
				'name'		=> 'South American Businesses Project',
				'summary'	=> 'Keeping the businesses in South America',
				'about'		=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce faucibus tellus a vulputate molestie. Phasellus mattis erat quis metus tincidunt, blandit ultrices ipsum vulputate. Nullam neque tellus, faucibus eget nisl a, eleifend imperdiet dui. Nulla ac leo in justo dictum semper sit amet sit amet dui. Pellentesque lacinia consequat eros vel posuere. Mauris dignissim porttitor eros, non interdum risus volutpat sed. Phasellus molestie dignissim arcu, et malesuada odio tempus ut. In hac habitasse platea dictumst. Suspendisse potenti. Phasellus pulvinar sed purus sit amet luctus. In iaculis mauris vitae tincidunt molestie. Fusce accumsan lobortis velit sodales tempor.',
				'user_id'	=> 3,
				'region_id'	=> 6,
				'start_date'	=> date('Y-m-d'),
				'end_date'	=> date('Y-m-d'),
			),
			array(
				'name'		=> 'Antarctican Ice Project',
				'summary'	=> 'Keeping the ice in Antarctica',
				'about'		=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce faucibus tellus a vulputate molestie. Phasellus mattis erat quis metus tincidunt, blandit ultrices ipsum vulputate. Nullam neque tellus, faucibus eget nisl a, eleifend imperdiet dui. Nulla ac leo in justo dictum semper sit amet sit amet dui. Pellentesque lacinia consequat eros vel posuere. Mauris dignissim porttitor eros, non interdum risus volutpat sed. Phasellus molestie dignissim arcu, et malesuada odio tempus ut. In hac habitasse platea dictumst. Suspendisse potenti. Phasellus pulvinar sed purus sit amet luctus. In iaculis mauris vitae tincidunt molestie. Fusce accumsan lobortis velit sodales tempor.',
				'user_id'	=> 3,
				'region_id'	=> 7,
				'start_date'	=> date('Y-m-d'),
				'end_date'	=> date('Y-m-d'),
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

		//Testing the threshhold at which the currently implemented client side searching mechanism becomes impractical
		for( $i = 0; $i < 1; $i++ ) :
		foreach( $projects as $index => $project ) :
			$project = Project::create($project);
			//DB::table('category_project')->insert(array('category_id' => '15', 'project_id' => $project->id));
			$project->categories()->attach(Category::extendNodes($categories[$index]));
		endforeach;
		endfor;
	}

}
