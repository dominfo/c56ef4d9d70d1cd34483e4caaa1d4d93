<?php
class test{
		private static $DB_HOST = "localhost";  //define database host
		private static $DB_USER = "root";	//define db username
		private static $DB_PASSWORD = "";	//define db password
		private static $DB_NAME = "pickyug";	//define db name
		// General var
		private static $conn = false;
		private static $dbconn = ""; //define database connection var
		private static $result = array();	//get any ruselt in array
		private static $myQuery = "";	//get writen query
		private static $numResults = "";	//get or display number of row in table or count result


private static $query = array();
	// public finction checkpostdata() {
		
	// }
	public function insert($sql) {
			self::$myQuery = $sql;
			self::$dbconn = new mysqli(self::$DB_HOST,self::$DB_USER,self::$DB_PASSWORD,self::$DB_NAME);
			$query = self::$dbconn->query($sql);	//query store in $query
			// print_r($query->fetch_row());
			echo $query->fetch_row();
			// if($query) {
			// 	return $query;
			//  }else{
			//  	return $q = array("error","error");
			//  }

		}
}
?>