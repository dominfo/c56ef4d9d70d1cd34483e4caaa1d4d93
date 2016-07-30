<?php
$home = new home;
$softwerelist = $home->getSoftwerelist();
?>
<table>
<?php foreach ($softwerelist as $key => $value) { ?>
	<tr>
		<td><?php echo $key ?></td>
		<td><?php echo $value ?></td>
	</tr>
<?php } ?>
</table>


