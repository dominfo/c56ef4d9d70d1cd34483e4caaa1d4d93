<?php
class check {
	private static $a = array();		//array for any use

	public function emptyData($data) {
		switch ($_SERVER['REQUEST_METHOD']) {
			case 'POST':
				if($_POST){
					foreach ($data as $x) {
						if(!empty(trim($_POST[$x]))) {
							array_push(self::$a, '1');
						}else {
							array_push(self::$a, '0');
						}
					}
				}
				if(in_array('0', self::$a)) {
					return false;
				}else {
					return true;
				}
			break;
			case 'GET':
				if($_GET){
				foreach ($data as $x) {
					if(!empty(trim($_GET[$x]))) {
						array_push(self::$a, '1');
					}else {
						array_push(self::$a, '0');
					}
				}
			}
			if(in_array('0', self::$a)) {
				return false;
			}else {
				return true;
			}
				break;
			
			default:
				echo "error";
				break;
		}
	}
}
?>