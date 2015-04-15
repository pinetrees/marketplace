<?php
// app/database/seeds/CategoryTableSeeder.php

class CategoryTableSeeder extends Seeder 
{

	public function run()
	{
		DB::table('categories')->delete();

		$category_tree = array(
		'Root' => array(
			'Air' => array( 
				'Air Monitoring' => array(
					'Indoor Air Quality' => array(),
					'Outdoor Air Quality' => array(),
				), 
				'Analysis' => array(),
				'Carbon Management' => array(),
				'Filtration' => array(),
				'Green House Gas Management' => array(),
				'Health Concerns' => array(
					'Pollution' => array(),
					'Ventilation' => array(),
					'VOC' => array(),
				),
				'Other' => array(), 
			),
			'Energy' => array( 
				'Alternative Energy' => array(),
				'Biofuels' => array(),
				'Energy Management' => array(),
				'Hydro Power' => array(),
				'Lighting' => array(),
				'Solar Power' => array(),
				'Turbines' => array(),
				'Wind Power' => array(),
				'Finance' => array(),
			),
			'Environment' => array(),
			'Labs' => array(),
			'Sustainability' => array(),
			'Health & Safety' => array(),
			'Land Use' => array(),
			'Waste' => array(),
			'Wastewater' => array(),
			'Non Profit' => array(),
		)
		);
		$categories = array(
			array('name'	=> 'Air'),
			array('name'	=> 'Energy'),
			array('name'	=> 'Environment'),
			array('name'	=> 'Labs'),
			array('name'	=> 'Sustainability'),
			array('name'	=> 'Health & Safety'),
			array('name'	=> 'Land Use'),
			array('name'	=> 'Waste'),
			array('name'	=> 'Wastewater'),
			array('name'	=> 'Non Profit'),
		);

		/*
		$parent = 0;
		foreach( $category_tree as $name => $children ) :
			$category = Category::create(array('name' => $name, 'parent_id' => $parent));
			foreach( $children as $name ) :
				$category_child = Category::create(array('name' => $name, 'parent_id' => $category->id));
			endforeach;
		endforeach;
		*/
		self::seed_children( $category_tree );
	}

	function seed_children( $category_tree, $parent_id = 0 ) {
		foreach( $category_tree as $name => $children ) :
			$category = Category::create(array('name' => $name, 'parent_id' => $parent_id));
			self::seed_children( $children, $category->id );
		endforeach;
	}

}
