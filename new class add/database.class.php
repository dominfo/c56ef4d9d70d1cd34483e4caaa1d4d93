<?php
/*	About class database
to connect databse call 

connect();
---------------------------------------------------------------------------------------------------------------------------
to generate query call 

setQuery ----method

setQuery($qtype,$tablename ,$columns = '*' ,$values = NULL ,$condition = NULL,$limit = NULL)
setQuery(query type , table name , columns name in array , values in array , condition of query , limit of query )
ex.
database::setQuery('select','authousers',array('user_id','user_name','password'));
database::setQuery('select','authousers','*');
database::setQuery('insert','authousers',array('user_name','password'),array('admin3','password3'),NULL);
database::setQuery('update','authousers',array('user_name','password'),array('admin_414','password_414'),'user_id=13');
database::setQuery('delete','authousers',null,null,'user_id=13');
----------------------------------------------------------------------------------------------------------------------------
to add customquery

customQuery($sql)

----------------------------------------------------------------------------------------------------------------------------

to get result call
 
 getResult();

 result get in assoc-array formet
 ---------------------------------------------------------------------------------------------------------------------------
*/
	class database{
		// database vars
		private static $DB_HOST = "localhost";  //define database host
		private static $DB_USER = "root";	//define db username
		private static $DB_PASSWORD = "";	//define db password
		private static $DB_NAME = "test";	//define db name
		// General var
		private static $conn = false;
		private static $dbconn = ""; //define database connection var
		private static $result = array();	//get any ruselt in array
		private static $myQuery = "";	//get writen query
		private static $numResults = "";	//get or display number of row in table or count result
		private static $querytype = ""; //store query type like "SELECT","INSERT INTO","UPDATE","DELETE FROM"
		private static $q = array(); //store query as array form
		private static $db_columns = ""; //store database columns
		private static $db_values = ""; //store query values
		private static $db_condition = ""; //store condition
		//errors
		
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
				return false;
			}
		}
		
		/*to set any type of query using this mathod
			$qtype = type of query like "SELECT","INSERT INTO","UPDATE","DELETE FROM"
			$tablename = table name from database
			$columns = table columns name ("insert this data in array type")
			$values = values for insert in table ("insert this data in array type")
			$condition = insert condition for query like "columns name","row id or value"
			$join = like inner join, left join, right join
		*/
		public function setQuery($qtype,$tablename ,$columns = '*' ,$values = NULL ,$condition = NULL,$limit = NULL,$join = NULL) {
			self::$querytype = $qtype;
			self::$db_columns = $columns;
			self::$db_values = $values;
			self::$db_condition = $condition;
			switch ($qtype) {

				//SELECT query case
				case 'select':
					array_push(self::$q, "SELECT");
					if($columns!='*') {
						$v = implode(', ', $columns);
						array_push(self::$q, $v);
					}else {
						array_push(self::$q, $columns);
					}
					array_push(self::$q, "FROM");
					if(is_array($tablename)) {
						$p=array();
						for ($i=0; $i <count($tablename) ; $i++) { 
							array_push($p, '`'.$tablename[$i].'`');
						}
						$a = implode(", ", $p);
						array_push(self::$q, $a);
					}else{
						array_push(self::$q, '`'.$tablename.'`');
					}
					}
					if($join == null){
						if($condition != NULL) {
							array_push(self::$q, "WHERE");
							array_push(self::$q, $condition);
						}
					}
					if($limit != NULL) {
						array_push(self::$q, "LIMIT");
						array_push(self::$q, $limit);
					}
					self::$myQuery = implode(' ', self::$q);
					//self::select();
					break;

				//INSERT INTO query case
				case 'insert':
					$p=array();
					$x=array();
					
					array_push(self::$q, "INSERT INTO");
					if($columns!='*') {
						array_push($p, "(");
						$v = implode('`, `', $columns);
						array_push($p, $v);
						array_push($p, ")");
						$a = implode('`', $p);
						array_push(self::$q, '`'.$tablename.'`'.$a);
					}else {
						echo "enter columns name";
						exit();
					}
					array_push(self::$q, "VALUES");
					if($values!=NULL) {
						array_push($x, "(");
						$v = implode('\', \'', $values);
						array_push($x, $v);
						array_push($x, ")");
						$a = implode('\'', $x);
						array_push(self::$q, $a);
					}
					if($limit != NULL) {
						array_push(self::$q, "LIMIT");
						array_push(self::$q, $limit);
					}
					self::$myQuery = implode(' ', self::$q);
					self::insert();
					break;

				//UPDATE query case
				case 'update':
				$p=array();
					array_push(self::$q, "UPDATE");
					array_push(self::$q, '`'.$tablename.'`');
					array_push(self::$q, "SET");
					for ($i=0; $i < count($columns); $i++) { 
						array_push($p, '`'.$columns[$i].'`'.'='.'\''.$values[$i].'\'');
					}
					$a = implode(',', $p);
					array_push(self::$q, $a);
					if($condition != NULL) {
						array_push(self::$q, "WHERE");
						array_push(self::$q, $condition);
					}else {
						echo "enter some condition";
						exit();
					}
					if($limit != NULL) {
						array_push(self::$q, "LIMIT");
						array_push(self::$q, $limit);
					}
					self::$myQuery = implode(' ', self::$q);
					self::update();
					break;

				//DELETE INTO query case
				case 'delete':
					array_push(self::$q, "DELETE FROM");
					array_push(self::$q, '`'.$tablename.'`');
					if($condition != NULL) {
						array_push(self::$q, "WHERE");
						array_push(self::$q, $condition);
					}
					if($limit != NULL) {
						array_push(self::$q, "LIMIT");
						array_push(self::$q, $limit);
					}
					self::$myQuery = implode(' ', self::$q);
					self::delete();
					break;
				default:
					echo "enter valid query type";
					break;
			}
		}
		public function customQuery($sql) {
			$sql=self::$myQuery;
			$con=explode(" ", trim($sql));
			switch ($con[0]) {
				case 'SELECT':
					self::select();
					break;
				case 'INSERT':
					self::insert();
					break;
				case 'UPDATE':
					self::update();
					break;
				case 'DELETE':
					self::delete();
					break;
				
				default:
					echo "enter right query";
					break;
			}
		}
		
		/*TO run select query*/	
		protected function select() {			
			$query = self::$dbconn->query(self::$myQuery);	//query store in $query
			if($query) {
				self::$numResults = $query->num_rows;	//count table rows
				for ($i=0; $i < self::$numResults; $i++) { 
					$r = $query->fetch_assoc();
					array_push(self::$result, $r);
				}
			}else {
				array_push(self::$result, $query->error);
				return false;
			}
		}

		/*TO run insert query*/
		protected function insert() {
			$query = self::$dbconn->query(self::$myQuery);	//query store in $query
			if($query) {
				for ($i=0; $i < count(self::$db_columns) ; $i++) {
					array_push(self::$result, array(self::$db_columns[$i] => self::$db_values[$i]));
				}
				array_push(self::$result, array("id" => self::$dbconn->insert_id));
				//self::$dbconn->insert_id()
			 }else{
			 	array_push(self::$result, $query->error);
				return false;
			 }
		}
		/*TO run update query*/
		protected function update() {
			$query = self::$dbconn->query(self::$myQuery);	//query store in $query
			if($query) {
				for ($i=0; $i < count(self::$db_columns) ; $i++) {
					array_push(self::$result, array(self::$db_columns[$i] => self::$db_values[$i]));
				}
				$int = filter_var(self::$db_condition, FILTER_SANITIZE_NUMBER_INT);
				array_push(self::$result, array("update in" => $int));
				array_push(self::$result, array("condition" => self::$db_condition));
			}else{
			 	array_push(self::$result, $query->error);
				return false;
			 }
		}
		/*TO run delete query*/
		protected function delete() {
			$query = self::$dbconn->query(self::$myQuery);	//query store in $query
			if($query) {
				$int = filter_var(self::$db_condition, FILTER_SANITIZE_NUMBER_INT);
				array_push(self::$result, array("delete in" => $int));
				array_push(self::$result, array("condition" => self::$db_condition));
			}else{
			 	array_push(self::$result, $query->error);
				return false;
			 }
		}
		/*get result of any queru*/
		public function getResult() {
			echo self::$myQuery;
			//return self::$result;
		}	
}
?>