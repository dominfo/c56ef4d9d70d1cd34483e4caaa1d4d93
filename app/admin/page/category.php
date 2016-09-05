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

//print_r($finalList);
function getsubcategories($value , $i)
{

	if (isset($value['subcategories']))
	{
			echo '<ul class="list-group">';
			$j=1;
			foreach ($value['subcategories'] as $key => $value) 
			{
				echo '<li class="list-group-item">';
				echo '<a href="#item-'.$i.'-'.$j.'" class="list-group-item" data-toggle="collapse">';
				echo '<i class="glyphicon glyphicon-chevron-right"></i>'.$value['name']; 
				echo '</a>';
				echo '</li>';
				$j++;
				//getsubsubcategories($value , $i);

			}
			$i++;
			echo '</ul>';
	}

}
?>
<!-- 
<pre>
<?php //print_r($finalList);?>
</pre> -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
		    <div class="col-lg-12">
		        <h1 class="page-header">
		            	Category
		        </h1>
		        <ol class="breadcrumb">
		            <li class="active">
		                <i class="fa fa-sitemap"></i> Category
		            </li>
		        </ol>
		    </div>
		</div>
		<div class="just-padding">
			<div class="list-group list-group-root well">
			<?php $i = 1 ?>
			  	<?php foreach ($finalList as $key => $value) : ?>
			  		
					<a href="#item-<?php echo $i ?>" class="list-group-item" data-toggle="collapse">
						<i class="glyphicon glyphicon-chevron-right"></i><?php echo $value['name']; ?>
					</a>
					<div class="list-group collapse" id="item-<?php echo $i ?>">
						<?php getsubcategories($value , $i); ?>
					</div>
				<?php $i++; ?>
			  	<?php endforeach; ?>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
// A $( document ).ready() block.
$( document ).ready(function() {
    $('.list-group-item').on('click', function() {
		$('.glyphicon', this)
		  .toggleClass('glyphicon-chevron-right')
		  .toggleClass('glyphicon-chevron-down');
		});
});

</script>