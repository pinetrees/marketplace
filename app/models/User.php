<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	/**
	 * The attributes available for mass assignment
	 *
	 * @var array
	 */
	protected $fillable = array('email', 'first_name', 'last_name', 'role_id', 'password'); 

	public function role() 
	{
		return $this->belongsTo('Role');
	}

	public function projects()
	{
		return $this->hasMany('Project')->where('active', true);
	}

	public function hasProjects()
	{
		return ( $this->projects()->count() > 0 );
	}

	public function services()
	{
		return $this->hasMany('Service')->where('active', true);
	}

	public function assignments()
	{
		return $this->hasMany('Project', 'provider_id');
	}

	public function bookmarks()
	{
		if( $this->isBuyer() )
		{
			return $this->belongsToMany('Service', 'service_bookmarks', 'buyer_id', 'service_id');
		} else {
			return $this->belongsToMany('Project', 'project_bookmarks', 'buyer_id', 'project_id');
		} 
	}

	public function messages()
	{
		return $this->hasMany('Message', 'recipient_id');
	}

	public function threads()
	{
		return $this->belongsToMany('Thread', 'inbox')->withPivot('read');
	}

	public function unread()
	{
		$threads = $this->threads()->where('inbox.read', false);
		if( !Auth::user()->isAdmin() )
		{
			$threads = $threads->where('approved', true);
		}
		return $threads->count();
	}

	public function hasServices()
	{
		return ( $this->hasMany('Service')->count() > 0 );
	}

	public function name()
	{
		return $this->first_name . ' ' . $this->last_name;
	}

	public function getProjects()
	{
		return $this->projects()->with('categories')->get();
	}

	public function getServices()
	{
		return $this->services()->with('categories')->get();
	}

	public function isAdmin(){
		return ( $this->role_id == 1 );
	}

	public function isProvider(){
		return ( $this->role_id == 2 || $this->role_id == 1 );
	}

	public function isBuyer(){
		return ( $this->role_id == 3 || $this->role_id == 1 );
	}

	public function isManaging(){
		return ( Request::path() == 'admin' );
	}

	public function wants()
	{
		if( $this->isProvider() ) 
		{
			return 'projects';
		} else {
			return 'services';
		}
	}

	public function wantsA()
	{
		if( $this->isProvider() ) 
		{
			return 'project';
		} else {
			return 'service';
		}
	}

	public function hasProposed($project)
	{
		return ( Proposal::byLinks($this, $project)->count() > 0 );
	}

	public function getThreads()
	{
		$threads = $this->threads()->with('project')->with('service')->with('sender')->with('recipient')->with('messages');

		//$thread = $thread->with('read');
		if( !Auth::user()->isAdmin() )
		{
			$threads = $threads->where('approved', true);
		}
		return $threads->get();
	}

	public static function administrators()
	{
		return static::join('roles', 'role_id', '=', 'roles.id')->where('roles.name', 'Administrator');
	}

	public static function admin()
	{
		return static::administrators()->first();
	}

	public static function administratorIDs()
	{
		return static::administrators()->select('users.id')->lists('id');
	}

	public static function withAdministratorIDs($users)
	{
		return array_unique(array_merge($users, static::administratorIDs()));
	}

	public static function providers()
	{
		return static::where('role_id', 2)->get();
	}

	public function createDefaultSettings()
	{
		$userSettings = new UserSettings;
		$userSettings->user_id = $this->id;
		$userSettings->save();
		
	}

	public function settings()
	{
		return $this->hasMany('UserSettings');
	}

	public function getAvatarPath()
	{
		if( $this->hasAvatar ) 
			return "/avatars/user-$this->id-avatar";
		else 
			return "/avatars/default-avatar";
	}

	public function display()
	{
		return ucfirst($this->username);
	}

}
