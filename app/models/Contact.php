<?php


class Contact extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'contact_submissions';

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
	protected $fillable = array('email', 'message'); 

}
