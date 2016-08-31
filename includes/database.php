<?php
//require_once(LIB_PATH.DS."config.php");
//require_once('config.php');
require_once("config-123.php");


class mysqliDatabase {
 
	 private $connection;
	 private $magic_quotes_active;
	 private $mysqli_real_escape_string;

     public  $last_query;
     
	 function __construct() {
	 	$this->open_connection();
	 	$this->magic_quotes_active = get_magic_quotes_gpc();
		$this->mysqli_real_escape_string = function_exists( "mysqli_real_escape_string" ); 
	 }

	 public function open_connection() {
	 	$this->connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
		if (!$this->connection) {
			die("Database connection failed: " . mysqli_error());
		}else{
			$db_select = mysqli_select_db($this->connection, DB_NAME);
			if(!$db_select) {
				die("Database selection failed: " . mysqli_error());
			}
		}
	 }

	 public function close_connection(){
	 	if(isset($this->connection)) {
			mysqli_close($this->connection);
			unset($this->connection);
		}
	 }

	 public function query($sql){
	 	$this->last_query = $sql;
	 	// $sql = "SELECT * FROM users";
		$result = mysqli_query($this->connection, $sql);
		$this->confirm_query($result);
		return $result;
	 }

	 private function confirm_query($result) {
		  if (!$result) {
			 $output = "Database query failed: " . mysqli_error() . "<br /> <br />"; 
			 $output .= "Last SQL query: " . $this->last_query;
             die($output);
		    }	 
	 	}

	 public function escape_value( $value ) {	
         if($this->mysqli_real_escape_string){ // PHP v4.3.0 or higher
             //undo any magic quote effects so mysqli_real_escape_string can do the work
         	 if ($this->magic_quotes_active) { $value = stripslashes( $value ); }


         	 $value = mysql_real_escape_string( $value );
         }else{ // before PHP v4.3.0
         	// if magic quotes aren't already on then add slashes manually 
         	if(!$this->magic_quotes_active) { $value = addcslashes( $value ); }
         	//if magic quotes are active, then slashes already exists
         }
		return $value;
	} 	
	  
	 public function fetch_array($result_set) {
	  	return mysqli_fetch_array($result_set);
	 }	
	 // *Database neutral* methods
	 public function num_rows($result_set){
	 	return mysqli_num_rows($result_set);
	 }
	 public function insert_id(){
	 	//get the last id inserted over the corrent db connection
	 	return mysqli_insert_id($this->connection);
	 }
	 public function affected_rows(){
	 	return mysqli_affected_rows($this->connection);
	 }
	}
	$database = new mysqliDatabase();
?>