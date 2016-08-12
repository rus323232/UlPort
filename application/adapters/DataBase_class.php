<?php

class DataBase extends AbstractDataBase {
	
	private static $db;
	
	public static function getDBO() {
		if (self::$db == null) self::$db = new DataBase(Config::DB_HOST, Config::DB_USER, Config::DB_PASSWORD, Config::DB_NAME, Config::DB_SYMBOL_QUERY, Config::DB_PREFIX);
		return self::$db;
		else exit('Объект базы данных уже создан');
		
	}
	
}

?>