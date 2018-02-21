<?php
require_once("Loader.php");

class Industries Extends OneClass {
	
	public static $table_name = "categories";
	public static $db_fields = array( "id", "slug", "cat_name");
	
	public $id;
	public $slug;
	public $cat_name;
	
	public static function get_industries() {
		//get feed ...
		global $db;
		return self::preform_sql("SELECT * FROM " . DBTP . self::$table_name ." ORDER BY id ");
	}

	public function get_industry_id($slug)
	{
		global $db;
		return self::preform_sql("SELECT * FROM " . DBTP . self::$table_name ." WHERE slug = '$slug'");
	}
}
	
?>