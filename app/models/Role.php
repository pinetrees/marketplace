<?php


class Role extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'roles';

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
	protected $fillable = array('name'); 

	public static function lists()
	{
		$lists = static::all()->lists('name');
		$roles = array();
		foreach( $lists as $key => $role )
			$roles[ $key+1 ] = $role;
		return $roles;
	}

	public function slug()
	{
		return strtolower(str_replace(' ','-',$this->name));
	}

}
