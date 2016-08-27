<?php

/**
* 
*/
class user
{
	
	function getUserList($page, $limitSize=10)
	{
		$page--;		
		$minlimit = $page*10;
		$limit = $minlimit.','.$limitSize; 
		$sql1 = new database();
		$sql1->connect();
		$sql1->setQuery( 'select' , 'user' , '*',  NULL , NULL,$limit );
		$result = $sql1->getResult();
		$sql1->flush();
		return $result;
	}
	function getUserPageListCount($length)
	{
		$sql = new database();
		$sql->connect();
		$sql->setQuery( 'count' , 'user' , '*' );
		$result = $sql->getResult();
		$sql->flush();
		return ceil($result[0]/$length);
	}
	function deleteUser($id)
	{
		$sql = new database();
		$sql->connect();
		$sql->setQuery( 'delete', 'user', null, null , 'id='.$id );
		$sql->getQuery();
		$sql->flush();
	}
}