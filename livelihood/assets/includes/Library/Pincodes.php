<?php
require_once("Loader.php");

class Pincodes Extends OneClass {
	
	public static $table_name = "postpin";
	public static $db_fields = array( "id", "OFFICENAME", "PINCODE", "OFFICETYPE", "DELIVERYSTATUS", "DIVISIONNAME", "REGIONNAME", "CIRCLENAME", "TALUK", "DISTRICTNAME", "STATENAME");
	
	public $id;
	public $OFFICENAME;
	public $PINCODE;
	public $OFFICETYPE;
	public $DELIVERYSTATUS;
	public $DIVISIONNAME;
	public $REGIONNAME;
	public $CIRCLENAME;
	public $TALUK;
	public $DISTRICTNAME;
	public $STATENAME;
	
	public static function get_location_pincode() {
		//get feed ...
		global $db;
		return self::preform_sql("SELECT id, OFFICENAME, PINCODE FROM " . self::$table_name ." ORDER BY id LIMIT 1000", DBN1);
	}

	public static function get_specific_pincode($id=0) {
		global $db;
		$result_array =  static::preform_sql("SELECT PINCODE FROM " . self::$table_name  . " WHERE id = " . $id . " LIMIT 1", DBN1);
		return !empty($result_array) ? array_shift($result_array) : false;
	}
}
	
?>