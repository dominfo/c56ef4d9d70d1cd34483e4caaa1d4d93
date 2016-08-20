<?php
/**
* home page
*/
class home
{
	public $userForm = array();

	public function getSoftwerelist()
	{

		return array('s1','s2','s3'); 
	}
	public function generateForm()
	{
		
		
$form = new form("form123");

$userForm['startForm'] = $form->startForm('f1' , 'POST','login()'); 

$userForm['lable']['fname'] = $form->createLable('fname' , 'first name'); 
$userForm['Text']['fname'] = $form->createTextField('fname' ,123, 'class1 class2'); 

$userForm['lable']['password'] = $form->createLable('password' , 'password'); 
$userForm['password']['password'] = $form->createPssswordField('password' ,'1123', 'class1 class2'); 

$userForm['lable']['email'] = $form->createLable('email' , 'email'); 
$userForm['email']['email'] = $form->createEmailField('email' , 'class1 class2'); 

$userForm['Button']['button'] = $form->createButtonField('button' , 'click me'); 
$userForm['Hidden']['234234'] = $form->createHiddenField('234234' , 'click me'); 

$userForm['Radio']['male'] = $form->createRadioField('gender' , 'male'); 
$userForm['lable']['gender'][0] = $form->createLable('gender' , 'male'); 

$userForm['Radio']['female'] = $form->createRadioField('gender' , 'female'); 
$userForm['lable']['gender'][0] = $form->createLable('gender' , 'female'); 

$userForm['Radio']['other'] = $form->createRadioField('gender' , 'other'); 
$userForm['lable']['gender'][3] = $form->createLable('gender' , 'other'); 


$userForm['checkbox']['s1'] = $form->createCheckboxField('s1' , 'ss1'); 
$userForm['lable']['asd'][0] = $form->createLable('asd' , 'asdasd'); 

$userForm['checkbox']['s2'] = $form->createCheckboxField('s2' , 'ss2'); 
$userForm['lable']['asd'][1] = $form->createLable('asd' , 'asdasd'); 

$userForm['checkbox']['s3'] = $form->createCheckboxField('s3' , 'ss3'); 
$userForm['lable']['asd'][2] = $form->createLable('asd' , 'asdasd'); 


$userForm['submit'] = $form->createSubmitField('button' ); 

$userForm['endForm'] = $form->endForm(); 


return $userForm;
	}
}