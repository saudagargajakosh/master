<?php
require_once("Loader.php");

class Industriy_list Extends OneClass {
	
	public static $table_name = "companies";
	public static $db_fields = array( "ID", "company_name");
	
	public $id;
	public $cmp_name;
	
	public static function get_industry_listing() {
		//get feed ...
		global $db;
		return self::preform_sql("SELECT * FROM p" . DBTP . self::$table_name ." ORDER BY id ");
	}
}
	
?>