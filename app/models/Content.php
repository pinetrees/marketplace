<?php


class Content extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'content';

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
	protected $fillable = array('title', 'content', 'page_id'); 

	public static function findByName($name)
	{
		return static::where('name', '=', $name)->first();
	}

	public static function makeFromInput()
	{
		if(Input::get('id') == 0)
		{
			$content = new Content;
		} else {
	        	$content = Content::find(Input::get('id'));
		}

		$content->title = Input::get('title');
		$content->name = Text::namify(Input::get('title'));
		$content->content = Input::get('content');
		$content->page_id = Input::get('page_id');
		$content->save();
		return $content;
	}

	public static function featured()
	{
		$page = Page::findByName('news');
		if( $page )
		{
			if( $featured = $page->content()->take(3)->get() )
				return $featured;
			else 
				return array();
		} else {
			return array();
		}
	}

}
