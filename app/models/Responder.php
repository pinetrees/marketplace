<?php


class Responder extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'responses';

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
	protected $fillable = array('message_id', 'sender_id', 'recipient_id', 'response'); 

	public function sender()
	{
		return $this->belongsTo('User', 'sender_id');
	}

	public function recipient()
	{
		return $this->belongsTo('User', 'recipient_id');
	}

	public function message()
	{
		return $this->belongsTo('Message', 'message_id');
	}

	public static function makeFromInput()
	{
		$responder = new Responder;
		$message = Message::find(Input::get('message_id'));
		$responder->message_id = $message->id;
		$responder->sender_id = Input::get('sender_id');
		$responder->recipient_id = $message->not(Input::get('sender_id'));
		$responder->response = Input::get('response');
		$responder->save();
		return $responder;
	}

	public function attachSender()
	{
		$this->sender = $this->sender()->get()->first();
		return $this;
	}

}
