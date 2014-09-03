<?php
/**
 * Handles the FileSystem Class
 */

namespace Gilvan;

use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;

class File
{
	protected static $instace = NULL;

	private static function instace()
	{
		if(is_null(self::$instace))
			return self::$instace = new FileSystem;
		else
			return self::$instace;
	}

	public static function __callStatic($name, $arguments)
    {
    	return call_user_method_array($name, self::instace(), $arguments);
    }

}