<?php

class eForm {

	public static function component($title, $id, $name, $required = false, $component) {
		return View::make("/forms/components/$component")
			->with('title', $title)
			->with('id', $id)
			->with('name', $name)
			->with('required', $required);
	}

	public static function input($title, $id, $name, $required = false) {
		return static::component($title, $id, $name, $required, 'input');
	}

	public static function text($title, $id, $name, $required = false) {
		return static::component($title, $id, $name, $required, 'textarea');
	}

}

?>
