<?php
$home = new home;

$softwerelist = $home->getSoftwerelist();

$home = new home();
$form = $home->generateForm();
?>
<table>
<?php foreach ($softwerelist as $key => $value) { ?>
	<tr>
		<td><?php echo $key ?></td>
		<td><?php echo $value ?></td>
	</tr>
<?php } ?>
</table>
<pre>

<?php echo $form['startForm'] ?>

<?php echo $form['lable']['fname']; ?>
<?php echo $form['Text']['fname']; ?>

<?php echo $form['lable']['password']; ?>
<?php echo $form['password']['password']; ?>

<?php echo $form['lable']['email']; ?>
<?php echo $form['email']['email']; ?>

<?php echo $form['Button']['button']; ?>
<?php echo $form['Hidden']['234234']; ?>

<?php echo $form['Radio']['male']; ?>
<?php echo $form['lable']['gender'][0]; ?>

<?php echo $form['Radio']['female']; ?>
<?php echo $form['lable']['gender'][0]; ?>

<?php echo $form['Radio']['other']; ?>
<?php echo $form['lable']['gender'][3]; ?>


<?php echo $form['checkbox']['s1']; ?>
<?php echo $form['lable']['asd'][0]; ?>

<?php echo $form['checkbox']['s2']; ?>
<?php echo $form['lable']['asd'][1]; ?>

<?php echo $form['checkbox']['s3']; ?>
<?php echo $form['lable']['asd'][2]; ?>


<?php echo $form['submit']; ?>
<?php echo $form['endForm']; ?>
