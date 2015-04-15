<?php
// app/database/seeds/ThreadTableSeeder.php

class ThreadTableSeeder extends Seeder 
{

	public function run()
	{
		DB::table('threads')->delete();

		$users = User::all();

		$thread = Thread::create(array(
			'project_id'	=> 1,
			'service_id'	=> 1,
			'sender_id'	=> 3,
			'recipient_id'	=> 2,
			'name'		=> 'Test of the internal messaging system',
		));
		
	        $recipients = array($thread->sender_id, $thread->recipient_id);
	        $recipients = User::withAdministratorIDs($recipients);
	        $thread->users()->sync($recipients);

		$thread = Thread::create(array(
			'project_id'	=> 1,
			'service_id'	=> 1,
			'sender_id'	=> 3,
			'recipient_id'	=> 2,
			'name'		=> 'This is a clone of the test of the internal messaging system',
		));

	        $recipients = array($thread->sender_id, $thread->recipient_id);
	        $recipients = User::withAdministratorIDs($recipients);
	        $thread->users()->sync($recipients);
	}

}
