<?php
/**
* 
*/
class category
{
	
	public function getCategoryList()
	{
		$sql = new database();
		$sql->connect();
		$sql->setQuery( 'select' , 'soft_cat' ,'*',  NULL , NULL, NULL, 'parent_cat_id asc' );
		$result = $sql->getResult();
		$sql->flush();
		return $result;
	}
	public function getCategoryListbyLevel($level = null)
	{
		$sql = new database();
		$sql->connect();
		$sql->setQuery( 'select' , 'soft_cat' ,'*', " NULL , WHERE level = '0'", NULL, 'parent_cat_id asc' );
		$result = $sql->getResult();
		$sql->flush();
		return $result;
	}
	

}