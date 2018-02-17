<?php
require_once("Loader.php");

class Addskills Extends OneClass {
	
	public static $table_name = "seeker_skills";
	public static $db_fields = array( "ID", "seeker_ID", "skill_name");
	
	public $ID;
	public $seeker_ID;
	public $skill_name;

	public static function get_jobseeker_skills() {
		//get feed ...
		global $db;
		return self::preform_sql("SELECT * FROM pp_" . self::$table_name ." ORDER BY ID LIMIT 1000", DBN1);
	}

	// public function get_industry_id($slug)
	// {
	// 	global $db;
	// 	return self::preform_sql("SELECT * FROM " . DBTP . self::$table_name ." WHERE slug = '$slug'");
	// }
}
	
?>