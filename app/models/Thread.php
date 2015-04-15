<?php


class Thread extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'threads';

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
	protected $fillable = array('subject', 'project_id', 'service_id', 'sender_id', 'recipient_id', 'name'); 

	public function project()
	{
		return $this->belongsTo('Project');
	}

	public function service()
	{
		return $this->belongsTo('Service');
	}

	public function sender()
	{
		return $this->belongsTo('User', 'sender_id');
	}

	public function recipient()
	{
		return $this->belongsTo('User', 'recipient_id');
	}

	public function messages()
	{
		$messages = $this->hasMany('Message')->with('sender')->with('recipient')->with('proposal');
		if( !Auth::user()->isAdmin() )
		{
			$messages = $messages->where('approved', true);
			//To add back messages sent by the current user, but needs work
			//->orWhere('sender_id', Auth::user()->id);
		}
		return $messages;
	}

	public function users()
	{
		return $this->belongsToMany('User', 'inbox')->withPivot('read');
	}

	public static function withAll($to, $from, $approved = true)
	{
		$messages = static::with('sender')->with('recipient')->with('project')->with('service')->with('proposal')->with('responses');
		if( $to )
		{
			$messages = $messages->where('recipient_id', $to->id);
		}
		if( $from )
		{
			$messages = $messages->where('sender_id', $from->id);
		}
		$messages = $messages->where('approved', $approved);
		return $messages->get();
	}

	public function hasProposal()
	{
		return ( $this->hasMany('Message')->where('attachment_id', '!=', 0)->count() > 0 );
	}

	public static function unread()
	{
		if( Auth::check() )
		{
			return Auth::user()->unread();
		} else {
			return 0;
		}
	}

	public static function involving($user)
	{
		return static::with('project')->with('service')->get();
	}

	public function otherParty()
	{
		if( Auth::user()->id == $this->sender_id )
		{
			return User::find($this->recipient_id);
		} else {
			return User::find($this->sender_id);
		}
	}

	public function lastSender()
	{
		$sender_id = DB::table('messages')->where('thread_id', $this->id)->orderBy('created_at', 'desc')->first()->sender_id;
		return User::find($sender_id);
	}

	public function not($id)
	{
		if( $this->sender_id == $id )
		{
			return $this->recipient_id;
		} else {
			return $this->sender_id;
		}
	}

	public static function markAsRead($id)
	{
		$thread = Thread::find($id);
		$link = $thread->users()->where('users.id', Auth::user()->id)->get()->first();
		$link->pivot->read = 1;
		$link->pivot->save();
		return 1;
	}

	public function markAsUnread($uid)
	{
		$link = $this->users()->where('users.id', $uid)->get()->first();
		$link->pivot->read = 0;
		$link->pivot->save();
	}

	public function isRead()
	{
		return $this->pivot->read;
	}

	public static function approve($id, $approve = true)
	{
		DB::table('messages')->where('thread_id', $id)->update(array('approved' => $approve));
		return static::where('id', $id)->update(array('approved' => $approve));
	}

	public function involvesAdmin()
	{
		$admin_id = User::admin()->id;
		return ( $this->sender_id == $admin_id || $this->recipient_id == $admin_id );
	}

}
