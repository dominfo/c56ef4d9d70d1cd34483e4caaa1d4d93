<?php

$category = new category;
$list = $category->getCategoryList();

$finalList = array();

$map = array(
    0 => array('subcategories' => array())
);
foreach ($list as &$category)
{
    $category['subcategories'] = array();
    $map[$category['id']] = &$category;
}
foreach ($list as &$category) {
    $map[$category['parent_cat_id']]['subcategories'][] = &$category;
}
$finalList = $map[0]['subcategories'];

function getsubcategories($value)
{
	if (isset($value['subcategories']))
	{
		echo "<ul>";
			foreach ($value['subcategories'] as $key => $value) 
			{
				echo "<li>";
				echo $value['name'];
				getsubcategories($value);
				echo "</li>";
			}
		echo "</ul>";
	}
}
?>
<!-- 
<pre>
<?php //print_r($finalList);?>
</pre> -->
<div>
<ul>
	<?php foreach ($finalList as $key => $value) : ?>
		<li>
			<?php if (isset($value['name'])) { ?>
				<?php echo $value['name']; ?> 
				<ul>
					<?php getsubcategories($value); ?>
				</ul>
			<?php } ?>
		</li>
	<?php endforeach; ?>
</ul>