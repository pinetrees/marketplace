<?php


class Service extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	public $key = 'value';
	protected $table = 'services';

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
	protected $fillable = array('name', 'summary', 'about', 'user_id', 'region_id'); 

	public function user() 
	{
		return $this->belongsTo('User');
	}

	public function region()
	{
		return $this->belongsTo('Region');
	}

	public function categories()
	{
		return $this->belongsToMany('Category');
	}

	public function projects()
	{
		return $this->belongsToMany('Project');
	}


	public function date() {
		return date('m/d/Y', strtotime($this->created_at));
	}

	public function time() {
		return date('g:i a', strtotime($this->created_at));
	}

	public function posted() {
		return date('M j, Y', strtotime($this->created_at));
	}

	public function starts() {
		return date('M j, Y', strtotime($this->start_date));
	}

	public function ends() {
		return date('M j, Y', strtotime($this->end_date));
	}

	public function duration() {
		$start = new DateTime($this->start_date);
		$end = new DateTime($this->end_date);
		$duration = $start->diff($end);
		return $duration->format('%y');
	}

	public static function withCategories($id)
	{
		return static::where('id', $id)->with('categories')->get()->first();
	}   

	public static function with_Categories($id)
	{
		if( empty( $cats ) ) return static::all();
		if( is_scalar( $cats ) ) $cats = array($cats);
		return static::join('category_service', 'services.id', '=', 'category_service.service_id')
		->whereIn('category_service.category_id', $cats)
		->get();
	}   

	public static function makeFromInput()
	{
		if(Input::get('id') == 0)
		{
			$service = new Service;
		} else {
	        	$service = Service::find(Input::get('id'));
		}
        	$service->name = Input::get('name');
        	$service->summary = Input::get('summary');
		$service->about = Input::get('about');
        	$service->user_id = Auth::user()->id;
        	$service->region_id = Input::get('region_id');
        	$service->save();
        	$service->categories()->sync(Input::get('categories'));
		return $service;
	}

	public function excerpt()
	{
		return substr($this->about, 0, 140) . '...';
	}

	public function structure()
	{
		return $this->order($this->categories()->get());
	}

	public function order($categories, $structured = array(), $parent = 1)
	{
		foreach( $categories as $category )
		{
			if( $category->parent_id == $parent )
			{
				$structured[] = $category;
				return $this->order($categories, $structured, $category->id);	
			}
		}
		return $structured;
	}

	public function provider()
	{
		return $this->belongsTo('User', 'user_id');
	}

	public static function featured()
	{
		if( !Schema::hasTable('services') ) return array();
		if( $featured = static::thatIsActive()->take(3)->get() )
			return $featured;
		else 
			return array();
	}

	public function isBookmarked()
	{
		if( !Auth::check() ) return false;
		return ! is_null(
			DB::table('service_bookmarks')->where('buyer_id', Auth::user()->id)->where('service_id', $this->id)->first()
		);
	}

	public static function thatIsActive()
	{
		return static::where('active', true);
	}

}
