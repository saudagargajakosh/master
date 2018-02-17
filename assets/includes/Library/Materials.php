<?php
require_once("Loader.php");

class Materials Extends OneClass {
	
	public static $table_name = "jp_materials";
	public static $db_fields = array( "id", "slug", "mat_name");
	
	public $id;
	public $slug;
	public $mat_name;
	
	public static function get_materials() {
		//get feed ...
		global $db;
		return self::preform_sql("SELECT * FROM " . self::$table_name ." ORDER BY id ");
	}

	public function get_materials_id($slug)
	{
		// echo $slug; exit;
		global $db;
		return self::preform_sql("SELECT * FROM " . self::$table_name ." WHERE slug = '$slug'");
	}
}
	
?>