<?php

	// define('DB_NAME', 'yourdatabasename');
	// define('DB_USER', 'yourusername');
	// define('DB_PASSWORD', 'yourpassword');
	// define('DB_HOST', 'localhost');
	class database{
		// database vars
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
		/* connect database */
		public function connect() {
			if (!self::$conn) {
				self::$dbconn = new mysqli(self::$DB_HOST,self::$DB_USER,self::$DB_PASSWORD,self::$DB_NAME);
				if (self::$dbconn->connect_errno > 0) {
					array_push(self::$result,self::$dbconn->connect_errno);
					return false;
				}else {
					return true;
				}
			}else {
				return faulse;
			}
		}
		/*TO run select query*/	
		public function select($sql) {
			self::$myQuery = $sql;
			$query = self::$dbconn->query($sql);	//query store in $query
			if($query) {
				self::$numResults = $query->num_rows;	//count table rows
				for ($i=0; $i < self::$numResults; $i++) { 
					$r = $query->fetch_assoc();
					$key = array_keys($r);
					for ($j=0; $j <count($key) ; $j++) { 
						if (self::$numResults >= 1) {
							self::$result[$i][$key[$j]] = $r[$key[$j]];
						}else {
							self::$result = null;
						}
					}
				}
			}else {
				array_push(self::$result, $query->error);
				return false;
			}
		}
		/*TO run insert query*/
		public function insert($sql) {
			self::$myQuery = $sql;
			$query = self::$dbconn->query($sql);	//query store in $query
			
			if($query) {
				//return print_r($query);
			 }else{
			 	//return echo "error";
			 }

		}
		/*get result of any queru*/
		public function getResult() {
			return self::$result;
		}
	}


?>