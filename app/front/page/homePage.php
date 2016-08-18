<?php
$home = new home;

$softwerelist = $home->getSoftwerelist();

$form = new form("form123");

?>
<table>
<?php foreach ($softwerelist as $key => $value) { ?>
	<tr>
		<td><?php echo $key ?></td>
		<td><?php echo $value ?></td>
	</tr>
<?php } ?>
</table>

<?php $form->startForm('f1' , 'POST'); ?><br>

<?php $form->createLable('fname' , 'first name'); ?> : 
<?php $form->createTextField('fname' ,123, 'class1 class2'); ?><br>

<?php $form->createLable('password' , 'password'); ?> : 
<?php $form->createPssswordField('password' ,'1123', 'class1 class2'); ?><br>

<?php $form->createLable('email' , 'email'); ?> : 
<?php $form->createEmailField('email' , 'class1 class2'); ?><br>
 
<?php $form->createButtonField('button' , 'click me'); ?><br>

<?php $form->createHiddenField('button' , 'click me'); ?><br>

<?php $form->createRadioField('gender' , 'male'); ?><?php $form->createLable('gender' , 'male'); ?> 
<?php $form->createRadioField('gender' , 'female'); ?><?php $form->createLable('gender' , 'female'); ?> 
<?php $form->createRadioField('gender' , 'other'); ?><?php $form->createLable('gender' , 'other'); ?> <br>

<?php $form->createCheckboxField('s1' , 'ss1'); ?><?php $form->createLable('asd' , 'asdasd'); ?> 
<?php $form->createCheckboxField('s2' , 'ss2'); ?><?php $form->createLable('asd' , 'asdasd'); ?> 
<?php $form->createCheckboxField('s3' , 'ss3'); ?><?php $form->createLable('asd' , 'asdasd'); ?> <br>


<?php $form->createUrlField('button' , 'click me'); ?><br>


<?php $form->createResetField('button' ); ?><br>
<?php $form->createSublitField('button' ); ?><br>

<?php $form->endForm(); ?><br>
