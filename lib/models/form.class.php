<?php

/**
* $form = new form("form123");

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
*/

class form
{
    private $form_name;
    function __construct($name)
    {
        $this->form_name = $name;
    }
    public function setFormName($name)
    {
        $this->form_name = $name;
    }
    public function getFormName()
    {
        return $this->form_name;
    }
    public function startForm($name ,$method, $action , $file = false )
    {
        if($file == true)
        {
            $field = '<form name="'.$name.'" id="id_'.$this->getFormName().'" action = "'.$action.'" method = "'.$method.'">';        
        } 
        else
        {
            $field = '<form name="'.$name.'" id="id_'.$this->getFormName().'" action = "'.$action.'" method = "'.$method.'"  enctype="multipart/form-data">';  
        }
        return $field;
    }
    public function endForm()
    {
        $field = '</form>';
        return $field;
    }
    public function createLable($name, $lable , $class = null )
    {
        return '<label for="'.$name.'">'.$lable.'</label>';
    }
    public function createTextField($name , $value = null ,$class = null)
    {
        $field = '<input type="text" name="'.$name.'"';
        if($value != null)
        {
            $field .= ' value="'.$value.'"';
        }
        if($class != null)
        {
            $field .= ' class="'.$class.'"';
        }
        $field .= ' id="id_'.$this->getFormName().'_'.$name.'">';
        return $field;
    } 
    public function createPssswordField($name, $value = null ,$class = null)
    {
        $field = '<input type="password" name="'.$name.'"';
        if($value != null)
        {
            $field .= ' value="'.$value.'"';
        }
        if($class != null)
        {
            $field .= ' class="'.$class.'"';
        }
        $field .= ' id="id_'.$this->getFormName().'_'.$name.'">';
        return $field;        
        
    }   
    public function createEmailField($name, $value = null ,$class = null)
    {
        $field = '<input type="email" name="'.$name.'"';
        if($value != null)
        {
            $value .= ' value="'.$value.'"';
        }
        if($class != null)
        {
            $field .= ' class="'.$class.'"';
        }
        $field .= ' id="id_'.$this->getFormName().'_'.$name.'">' ;

        return $field;             
    }   
    public function createButtonField($name, $lable ,$class = null)
    {
        $field = '<input type="button" name="'.$name.'"  value="'.$lable.'"' ;
        if($class != null)
        {
            $field .= ' class="'.$class.'"';
        }
        $field .= ' id="id_'.$this->getFormName().'_'.$name.'">' ;

        return $field;
    } 
    public function createHiddenField($name, $value = null ,$class = null)
    {
        $field = '<input type="hidden" name="'.$name.'"';
        if($value != null)
        {
            $field .= ' value="'.$value.'"';
        }
        if($class != null)
        {
            $field .= ' class="'.$class.'"';
        }
        $field .= ' id="id_'.$this->getFormName().'_'.$name.'">';
        return $field;   
    }   

    public function createRadioField($name, $value = null ,$class = null)
    {
        $field = '<input type="radio" name="'.$name.'"';
        if($value != null)
        {
            $field .= ' value="'.$value.'"';
        }
        if($class != null)
        {
            $field .= ' class="'.$class.'"';
        }
        $field .= ' id="id_'.$this->getFormName().'_'.$name.'_'.$value.'">';
        return $field; 
    }   
    public function createCheckboxField($name, $value = null ,$class = null)
    {
        $field = '<input type="checkbox" name="'.$name.'"';
        if($value != null)
        {
            $field .= ' value="'.$value.'"';
        }
        if($class != null)
        {
            $field .= ' class="'.$class.'"';
        }
        $field .= ' id="id_'.$this->getFormName().'_'.$name.'">';
        return $field;  
    }   
    public function createResetField($class = null)
    {
        $field = '<input type="reset"';
        if($class != null)
        {
            $field .= ' class="'.$class.'"';
        }
        $field .= ' id="id_'.$this->getFormName().'_reset">';
        return $field;
    }   
  
    public function createUrlField($name, $value = null ,$class = null)
    {
     
        $field = '<input type="url" name="'.$name.'"';
        if($value != null)
        {
            $field .= ' value="'.$value.'"';
        }
        if($class != null)
        {
            $field .= ' class="'.$class.'"';
        }
        $field .= ' id="id_'.$this->getFormName().'_'.$name.'_'.$value.'">';
        return $field;
    }   
    public function createSubmitField($class = null)
    {

        $field = '<input type="submit"';
        if($class != null)
        {
            $field .= ' class="'.$class.'"';
        }
        $field .= ' id="id_'.$this->getFormName().'_submit">';
        return $field;
    }   


}