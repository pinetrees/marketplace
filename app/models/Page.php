<?php


class Page extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'pages';

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

	public static function findByName($name)
	{
		if( $page = static::where('name', '=', $name)->with('content')->first() )
			return $page;
		else
			return static::defaultPage();
	}

	public static function named($name)
	{
		return static::where('name', '=', $name)->first();
	}

	public function content()
	{
		return $this->hasMany('Content')->orderBy('order');
	}

	public static function defaultPage()
	{
		if( $default = static::named('default') ) 
			return $default;
		else 
			return static::createDefaultPage();
	}

	public static function createDefaultPage()
	{
		Eloquent::unguard();
		Page::create(array(
			'title'     => 'Default',
			'name'      => 'default',
			'summary'   => 'A tagline for the default page.'
		));
		return static::named('default');
	}

	public static function header()
	{
		return static::where('header', 1)->get();
	}

}
