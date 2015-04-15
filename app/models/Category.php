<?php


class Category extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'categories';

	public $timestamps = false;

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	/**
	 * The attributes available for mass assignment
	 *
	 * @var array
	 */
	protected $fillable = array('name', 'parent_id'); 

	public static function structured() {
		$categories = Category::all();
		$map = self::structure_map( array(), $categories, 0 );
		$structure = $map['structure'];
		return $structure;
	}

	public static function structure_map( $structure, $categories, $parent ) {
		$category_subset = array();
		foreach( $categories as $category ) :
			if( $category->parent_id == $parent ) :
				$child = new stdClass();
				$child->id = $category->id;
				$child->name = $category->name;
				$child->children = array();
				$structure[] = $child;
			else :
				$category_subset[] = $category;
			endif;
		endforeach;
		foreach( $structure as $key => $child ) :
			$map = self::structure_map( array(), $category_subset, $child->id );
			$structure[$key]->children = $map['structure'];
		endforeach;
		return array('structure' => $structure, 'categories' => $category_subset);
	}

	public function children()
	{
		return $this->hasMany('Category', 'parent_id');
	}

	public function isRoot()
	{
		return ( $this->parent_id == 0 );
	}

	public function ofRoot()
	{
		return ( $this->parent_id == 1 );
	}

	public static function extendNodes($categories)
	{
		$tree = array();
		foreach( $categories as $category )
		{
			$extension = static::extendNode($category);
			$tree = array_merge( $tree, $extension );
		}
		return array_unique($tree);
	}

	public static function extendNode($category, $extension = array())
	{
		$extension[] = $category;
		$parent = Category::find($category)->parent_id;
		if( $parent == 1 || $parent == 0 )
		{
			return $extension;
		} else {
			return static::extendNode($parent, $extension);
		}
	}

	public static function extendNodeWithObjects($category, $extension = array())
	{
		$category = Category::find($category);
		$extension[] = $category;
		$parent = $category->parent_id;
		if( $parent == 1 || $parent == 0 )
		{
			return $extension;
		} else {
			return static::extendNodeWithObjects($parent, $extension);
		}
	}

}
