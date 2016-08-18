<?php
/**
* home page
*/
class home
{
	public $this->userForm = array();

	function __construct()
	{
		
	}

	public function getSoftwerelist()
	{

		return array('s1','s2','s3'); 
	}
	public function generateForm()
	{
		
		$form = new form("form123");

$this->userForm['startForm'] = $form->startForm('f1' , 'POST'); 

$this->userForm['lable']['fname'] = $form->createLable('fname' , 'first name'); 
$this->userForm['Text']['fname'] = $form->createTextField('fname' ,123, 'class1 class2'); 

$this->userForm['lable']['password'] = $form->createLable('password' , 'password'); 
$this->userForm['password']['password'] = $form->createPssswordField('password' ,'1123', 'class1 class2'); 

$this->userForm['lable']['email'] = $form->createLable('email' , 'email'); 
$this->userForm['email']['email'] = $form->createEmailField('email' , 'class1 class2'); 

$this->userForm['Button']['button'] = $form->createButtonField('button' , 'click me'); 
$this->userForm['Hidden']['234234'] = $form->createHiddenField('234234' , 'click me'); 

$this->userForm['Radio']['male'] = $form->createRadioField('gender' , 'male'); 
$this->userForm['lable']['gender'][0] = $form->createLable('gender' , 'male'); 

$this->userForm['Radio']['female'] = $form->createRadioField('gender' , 'female'); 
$this->userForm['lable']['gender'][0] = $form->createLable('gender' , 'female'); 

$this->userForm['Radio']['other'] = $form->createRadioField('gender' , 'other'); 
$this->userForm['lable']['gender'][3] = $form->createLable('gender' , 'other'); 


$this->userForm['checkbox']['s1'] = $form->createCheckboxField('s1' , 'ss1'); 
$this->userForm['lable']['asd'][0] = $form->createLable('asd' , 'asdasd'); 

$this->userForm['checkbox']['s2'] = $form->createCheckboxField('s2' , 'ss2'); 
$this->userForm['lable']['asd'][1] = $form->createLable('asd' , 'asdasd'); 

$this->userForm['checkbox']['s3'] = $form->createCheckboxField('s3' , 'ss3'); 
$this->userForm['lable']['asd'][2] = $form->createLable('asd' , 'asdasd'); 



$this->userForm[] = $form->createUrlField('button' , 'click me'); 



$this->userForm[] = $form->createResetField('button' ); 

$this->userForm[] = $form->createSublitField('button' ); 


$this->userForm['endForm'] = $form->endForm(); 

	}
}