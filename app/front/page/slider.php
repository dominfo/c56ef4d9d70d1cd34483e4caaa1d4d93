<?php
$home = new home;
$softwerelist = $home->getSoftwerelist();
?>
<div class="slider">
<!--  slider heading -->
<div class="slider-haeding">
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">New Added</a></li>
      <li><a href="#">Top 10</a></li>
      <li><a href="#">Most download</a></li>
    </ul>
</div>

<!--  slider cantent

after db create work -->
<ul>
	<?php foreach ($softwerelist as $key => $value) { ?>
	<li><?php echo $value?></li>
	<?php }?> 
</ul>
</div>