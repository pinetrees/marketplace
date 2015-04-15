<?php

class Text {

	public static function queryText($results) {
		if( count($results) == 1 )
			return 'result was found';
		else
			return 'results were found';
	}

	public static function singular($text)
	{
		return str_singular($text);
	}

	public static function spaceless($text)
	{
		return str_replace(' ','',$text);
	}

	public static function namify($string)
	{
		return str_replace(' ','-',strtolower($string));
	}

}

?>
