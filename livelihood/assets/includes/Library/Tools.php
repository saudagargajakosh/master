<?php
require_once("Loader.php");

class Tools Extends OneClass {
	
	public static $table_name = "jp_tools";
	public static $db_fields = array( "id", "slug", "tool_name");
	
	public $id;
	public $slug;
	public $tool_name;
	
	public static function get_tools() {
		//get feed ...
		global $db;
		return self::preform_sql("SELECT * FROM " . self::$table_name ." ORDER BY id ");
	}

	public function get_tools_id($slug)
	{
		global $db;
		return self::preform_sql("SELECT * FROM " . self::$table_name ." WHERE slug = '$slug'");
	}
}
	
?>