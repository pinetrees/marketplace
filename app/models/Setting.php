<?php


class Setting extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'settings';

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
	protected $fillable = array('key', 'value'); 

	public static function findValueByKey($key)
	{
		if( $setting = static::where('key', $key)->get()->first() )
			return $setting->value;
		else
			return false;
	}

	public static function has($key)
	{
		return static::findValueByKey($key);
	}

	public static function get($key)
	{
		if( $setting = static::findValueByKey($key) ) 
			return $setting;
		else
			return "{{{$key}}}";
	}

}
