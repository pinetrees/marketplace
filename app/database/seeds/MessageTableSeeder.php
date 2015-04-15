<?php
// app/database/seeds/MessageTableSeeder.php

class MessageTableSeeder extends Seeder 
{

	public function run()
	{
		DB::table('messages')->delete();

		Message::create(array(
			'thread_id'	=> 1,
			'sender_id'	=> 3,
			'recipient_id'	=> 2,
			'message'	=> 'This is a test of the internal messaging system.',
			'approved'	=> 0
		));

		/*
		Message::create(array(
			'thread_id'	=> 1,
			'sender_id'	=> 2,
			'recipient_id'	=> 3,
			'message'	=> 'This is a response to the test of the internal messaging system.',
			'approved'	=> 1
		));
		*/

		Message::create(array(
			'thread_id'	=> 2,
			'sender_id'	=> 3,
			'recipient_id'	=> 2,
			'message'	=> 'This is a clone of the test of the internal messaging system.',
			'approved'	=> 0
		));
	}

}
