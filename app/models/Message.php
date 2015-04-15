<?php


class Message extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'messages';

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
	protected $fillable = array('subject', 'message'); 

	public function date() {
		return date('m/d/Y', strtotime($this->created_at));
	}

	public function time() {
		return date('g:i a', strtotime($this->created_at));
	}

	public function sender()
	{
		return $this->belongsTo('User', 'sender_id');
	}

	public function recipient()
	{
		return $this->belongsTo('User', 'recipient_id');
	}

	public function project()
	{
		return $this->belongsTo('Project');
	}

	public function service()
	{
		return $this->belongsTo('Service');
	}

	public function responses()
	{
		return $this->hasMany('Responder')->with('sender');
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

	public function isProposal()
	{
		return ( $this->attachment_id != 0 );
	}

	public function proposal()
	{
		return $this->belongsTo('Proposal', 'attachment_id');
	}

	public static function to($user)
	{
		return static::withAll($user, false, true);
	}

	public static function from($user)
	{
		return static::withAll(false, $user, true);
	}

	public static function needsModeration()
	{
		return static::withAll(false, false, false);
	}

	public static function approve($id)
	{
		//return static::where('id', $id)->update(array('approved' => true));
		$message = Message::find($id);
		$thread = Thread::find($message->thread_id);
		$message->approved = true;
		$message->save();
		DB::table('inbox')->where('user_id', $message->recipient_id)->where('thread_id', $message->thread_id)->update(array('read' => false));
		return 1;
	}

	public static function unapprove($id)
	{
		return static::where('id', $id)->update(array('approved' => false));
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

	public static function markAsRead($id)
	{
		$message = Message::find($id);
		if ( $message->recipient_id == Auth::user()->id ) 
		{
			$message->read = 1;
			$message->save();
		}
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

	public function otherParty($user)
	{
		if( $this->sender == $user )
		{
			return $this->recipient;
		} else {
			return $this->sender;
		}
	}

	public static function makeFromInput()
	{
		$message = new Message;
		$thread = Thread::find(Input::get('thread_id'));
		$thread->markAsUnread(1);
		$message->thread_id = $thread->id;
		$message->sender_id = Input::get('sender_id');
		$message->recipient_id = $thread->not(Input::get('sender_id'));
		$message->message = Input::get('message');
		if( $thread->involvesAdmin() ) $message->approved = true;
		$message->save();
		return $message;
	}

	public function attachSender()
	{
		$this->sender = $this->sender()->get()->first();
		return $this;
	}

}
