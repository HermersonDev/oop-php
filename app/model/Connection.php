<?php

namespace App\Model;

use PDO;

// Singleton
class Connection
{
	private static $db;
	const DATABASE_PREFIX = '/home/hermerson/Projetos/oop-php/app/database/';

	public static function getConnection() 
	{
		if (isset(self::$db)) return self::$db;

		self::$db = new PDO('sqlite:'.self::DATABASE_PREFIX.'database.sqlite3');
		self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return self::$db;
	}

}
