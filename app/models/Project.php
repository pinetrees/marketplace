<?php


class Project extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	public $key = 'value';
	protected $table = 'projects';

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

	public function services()
	{
		return $this->belongsToMany('Service');
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

	public static function __query($query)
	{
		$is_query = false;
		if( $query['category'] != 0 ) :
			$return = self::join('category_project', 'projects.id', '=', 'category_project.project_id')->where('category_project.category_id', $query['category']);
			$is_query = true;
		endif;
		if( $query['region'] != 0 ) :
			if( $is_query != true ) :
				$return = self::where('region_id', $query['region']);
			else :
				$return = $return->where('region_id', $query['region']);
			endif;
			$is_query = true;
		endif;
		if( $query['query_string'] != '' ) :
			if( $is_query != true ) :
				$return = self::where('name', 'RLIKE', "[[:<:]]" . $query['query_string'] . "[[:>:]]");
			else :
				$return = $return->where('name', 'RLIKE', "[[:<:]]" . $query['query_string'] . "[[:>:]]");
			endif;
			$return = $return->orwhere('summary', 'RLIKE', "[[:<:]]" . $query['query_string'] . "[[:>:]]")
			->orwhere('about', 'RLIKE', "[[:<:]]" . $query['query_string'] . "[[:>:]]");
			$is_query = true;
		endif;
		if( $is_query == true ) :
			$return = $return->get();
		else :
			$return = self::all();
		endif;
		return $return;
	}

	public static function makeFromInput()
	{
		if(Input::get('id') == 0)
		{
			$project = new Project;
		} else {
	        	$project = Project::find(Input::get('id'));
		}
		$project->name = Input::get('name');
		$project->summary = Input::get('summary');
		$project->about = Input::get('about');
		$project->purpose = Input::get('purpose');
		$project->requirements = Input::get('requirements');
		$project->terms = Input::get('terms');
		$project->timeline = Input::get('timeline');
		$project->budget = Input::get('budget');
		$project->resources = Input::get('resources');
		$project->qualifications = Input::get('qualifications');
		$project->evaluation = Input::get('evaluation');
		$project->start_date = Input::get('start_date');
		$project->end_date = Input::get('end_date');
		$project->user_id = Auth::user()->id;
		$project->region_id = Input::get('region_id');
		$project->save();
		$project->categories()->sync(Input::get('categories'));
		return $project;
	}

	public function excerpt()
	{
		return substr($this->about, 0, 140) . '...';
	}

	/*************************
	******DUPLICATED CODE*****
	*************************/
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

	public function isOf($user)
	{
		return ( $this->user->id == $user->id );
	}

	public function buyer()
	{
		return $this->belongsTo('User', 'user_id');
	}

	public static function featured()
	{
		if( !Schema::hasTable('projects') ) return array();
		if( $featured = static::thatIsActive()->take(3)->get() )
			return $featured;
		else 
			return array();
	}

	public function isBookmarked()
	{
		if( !Auth::check() ) return false;
		return ! is_null(
			DB::table('project_bookmarks')->where('buyer_id', Auth::user()->id)->where('project_id', $this->id)->first()
		);
	}

	public function assignToProvider($pid)
	{
		$this->provider_id = $pid;
		$this->save();
	}

	public function unassignFromProvider()
	{
		$this->assignToProvider(0);
	}

	public function isAssigned()
	{
		return ($this->provider_id != 0);
	}

	public function provider()
	{
		return $this->belongsTo('User', 'provider_id');
	}

	public static function thatIsActive()
	{
		return static::where('active', true);
	}

}
