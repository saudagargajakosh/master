<?php
require_once("DBI.php");
require_once("Loader.php");

class Finaljob_db_connect {

	private $connection1;
	private $magic_quotes_active1;
	private $real_escape_string_exists1;
	private function open_connection_f() {
		@$this->connection1 = mysqli_connect(DBH,DBU1,DBPW1);
			if(!$this->connection1) {
			fatal_error("connection Failed!" , mysqli_connect_error());
			}  else {
				$db_select1= mysqli_select_db($this->connection1,DBN1);
					if(!$db_select1) {
					fatal_error("Database Selection Failed!" , mysqli_connect_error());
					}
				
					$db_charset1= mysqli_set_charset($this->connection1,"utf8");
					if(!$db_charset1) {
					fatal_error("Database charset Encoding Failed!" , mysqli_connect_error());
					}	
				}
	}
	
	function __construct() {
	$this->open_connection_f();
	$magic_quotes_active1 = get_magic_quotes_gpc();
	$real_escape_string_exists1 = function_exists( "mysqli_real_escape_string" );

	}
	
	public function close_connection_f() {
		if(isset($this->connection1)) {
			mysqli_close($this->connection1);
			unset($this->connection1);
		}
	}
}

$fj_db = new Finaljob_db_connect();

?>