<?php
require_once("Loader.php");

class Microfinance Extends OneClass {
	
	public static $table_name = "jp_microfinance";
	public static $db_fields = array( "id", "slug", "microf_name");
	
	public $id;
	public $slug;
	public $microf_name;
	
	public static function get_microfinances() {
		//get feed ...
		global $db;
		return self::preform_sql("SELECT * FROM " . self::$table_name ." ORDER BY id ");
	}

	public function get_microfinance_id($slug)
	{
		global $db;
		return self::preform_sql("SELECT * FROM " . self::$table_name ." WHERE slug = '$slug'");
	}
}
	
?>