<?php

/**
* 
*/
class software
{
	
	function getSoftwareList($page, $limitSize=25)
	{
		$page--;		
		$minlimit = $page*10;
		$limit = $minlimit.','.$limitSize; 
		$sql1 = new database();
		$sql1->connect();
		$sql1->setQuery( 'select' , 'soft' , '*',  NULL , NULL,$limit );
		$result = $sql1->getResult();
		$sql1->flush();
		return $result;
	}
	function getSoftwarePageListCount($length)
	{
		$sql = new database();
		$sql->connect();
		$sql->setQuery( 'count' , 'soft' , '*' );
		$result = $sql->getResult();
		$sql->flush();
		return ceil($result[0]/$length);
	}
	function deleteSoftware($id)
	{
		$sql = new database();
		$sql->connect();
		$sql->setQuery( 'delete', 'soft', null, null , 'id='.$id );
		$sql->getQuery();
		$sql->flush();
	}
	function getSoftwareDetailById($id)
	{

		$sql1 = new database();
		$sql1->connect();
		$sql1->customQuery('select * from soft LEFT JOIN soft_cat ON soft_cat.id = soft.cat_id where soft.id ='.$id);
		$result = $sql1->getResult();
		$sql1->flush();
		return $result;
	}
	function gerAdeOrEditSoftwaerForm($id = null)
	{
		$category = new category;
		$catlist = $category->getCategoryListbyLevel('0');
		var_dump($catlist);
		$SoftwareForm = new form('addSoftware');

// var_dump( $catlist );
		$form['startForm'] = $SoftwareForm->startForm('f1' , 'POST'); 

		$form['lable']['fname'] = $SoftwareForm->createLable('fname' , 'first name'); 
 		$form['Text']['fname']  = $SoftwareForm->createTextField('fname' ,123, 'class1 class2'); 

		$form['lable']['category'] = $SoftwareForm->createLable('category' , 'category'); 
 		$form['DropDown']['category']  = $SoftwareForm->createDropDownField('category' ,$catlist); 

 		return $form;
	}
}