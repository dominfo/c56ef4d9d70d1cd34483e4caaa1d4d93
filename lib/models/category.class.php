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
		return $sql->getResult();
	}
}