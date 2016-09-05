<?php

$software = new software;
//$softwareList = $user->getUserList();

if (isset($_GET['p']))
{
	$pageNo = $_GET['p'];
	$softwareList = $software->getSoftwareList($_GET['p']);

}
else
{
	$pageNo = 1;
	$softwareList = $software->getSoftwareList(null);
}
if (isset($_GET['delete']))
{
	$del = base64_decode($_GET['delete']);
	$s = explode(',', $del);
	$id = $s[0];
	$software->deleteSoftware($id);
	header('Location: '.$urlWithoutParam);
	 exit;
}
if (isset($_GET['detail']))
{
	$detail = base64_decode($_GET['detail']);
	$s = explode(',', $detail);
	$detailId = $s[0];
	$sd = $software->getSoftwareDetailById($detailId);
	$softwareDetail = $sd[0];
}
if (isset($_GET['edit']))
{
	$edit = base64_decode($_GET['edit']);
	$s = explode(',', $edit);
	$editId = $s[0];
}
if (isset($_GET['new']))
{
	$new = base64_decode($_GET['new']);
	$n = explode(',', $new);
	if($n[0]=='new')
	{
		$newId = $n[0];
		$softForm = $software->gerAdeOrEditSoftwaerForm();
		//var_dump($softForm);
	}
	else
	{
		header('Location: '.$urlWithoutParam);
	}
}
$pageCount = $software->getSoftwarePageListCount(25);
	
?>
<!---------------------------------------------------------------------------->
<?php if(isset($editId)) : ?>

<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
					Software <small>Add or Edit Software info</small>
				</h1>
				<ol class="breadcrumb">
					<li class="active">
						<i class="fa fa-download"></i> <a href="<?php echo $urlWithoutParam ?>" > Software</a>
					</li>
					<li>
						<i class="fa fa-download"></i> Edit
					</li>		
				</ol>
			</div>
		</div>
		<div class="row">

            <button type="button" class="btn btn-default" id="someButton" >Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
    </div>
</div>
<script type="text/javascript">
	$('#someButton').click(function() {
	    window.location.href = '/admin/software';
	    return false;
	});
</script>


<!-------------------------------------------------------------------------->
<?php elseif(isset($newId)) : ?>

<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
					Software <small>Add NEW Software</small>
				</h1>
				<ol class="breadcrumb">
					<li class="active">
						<i class="fa fa-download"></i><a href="<?php echo $urlWithoutParam ?>" > Software</a>
					</li>
					<li>
						<i class="fa fa-download"></i> New
					</li>		
				</ol>
			</div>
		</div>
		<div class="content">
			<?php echo $softForm['startForm']  ?><br> 
			<?php echo $softForm['lable']['fname']  ?>
			<?php echo $softForm['Text']['fname'] ?><br>
			<?php echo $softForm['lable']['category']  ?>
			<?php echo $softForm['DropDown']['category'] ?><br>
            <button type="button" class="btn btn-default" id="someButton" >Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
    </div>
</div>
<script type="text/javascript">
	$('#someButton').click(function() {
	    window.location.href = '/admin/software';
	    return false;
	});
</script>


<!---------------------------------------------------------------------------->
<?php elseif(isset($detailId)) : ?>

<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
					Software <small> Software detail</small>
				</h1>
				<ol class="breadcrumb">
					<li class="active">
						<i class="fa fa-download"></i><a href="<?php echo $urlWithoutParam ?>" > Software</a>
					</li>
					<li>
						<i class="fa fa-download"></i> New
					</li>		
				</ol>
				<a href="<?php echo $urlWithoutParam.'?edit='.base64_encode( $detailId ) ?>" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-info" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span>edit</button></a>
				<a href="<?php echo $urlWithoutParam.'?delete='.base64_encode( $detailId ) ?>" data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-primary btn-danger" data-title="Delete" data-toggle="modal" data-target="#delete" onclick=" return confirm('Delete software ?')" ><span class="glyphicon glyphicon-trash"></span>delete</button></a>
				<br><br>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="table-responsive">
					<table class="table table-hover  ">
						<tr>
							<td class="col-lg-3"><b class="pull-right">id  </b></td>
							<td class="col-lg-9"><?php echo $softwareDetail['id'] ?></td>
						</tr>
						<tr>
							<td class="col-lg-3"><b class="pull-right">name  </b></td>
							<td class="col-lg-9"><?php echo $softwareDetail['name'] ?></td>
						</tr>
						<tr>
							<td class="col-lg-3"><b class="pull-right">category id  </b></td>
							<td class="col-lg-9"><?php echo $softwareDetail['cat_id'] ?></td>
						</tr>
						<tr>
							<td class="col-lg-3"><b class="pull-right">description  </b></td>
							<td class="col-lg-9"><?php echo $softwareDetail['description'] ?></td>
						</tr>
						<tr>
							<td class="col-lg-3"><b class="pull-right">size  </b></td>
							<td class="col-lg-9"><?php echo $softwareDetail['size'] ?></td>
						</tr>
						<tr>
							<td class="col-lg-3"><b class="pull-right">release date  </b></td>
							<td class="col-lg-9"><?php echo $softwareDetail['release_date'] ?></td>
						</tr>
						<tr>
							<td class="col-lg-3"><b class="pull-right">total download  </b></td>
							<td class="col-lg-9"><?php echo $softwareDetail['total_download'] ?></td>
						</tr>
						<tr>
							<td class="col-lg-3"><b class="pull-right">rating  </b></td>
							<td class="col-lg-9"><?php echo $softwareDetail['rating'] ?></td>
						</tr>
						<tr>
							<td class="col-lg-3"><b class="pull-right">download name  </b></td>
							<td class="col-lg-9"><?php echo $softwareDetail['download_name'] ?></td>
						</tr>
						<tr>
							<td class="col-lg-3"><b class="pull-right">update_at  </b></td>
							<td class="col-lg-9"><?php echo $softwareDetail['update_at'] ?></td>
						</tr>
						<tr>
							<td class="col-lg-3"><b class="pull-right">path  </b></td>
							<td class="col-lg-9"><?php echo $softwareDetail['path'] ?></td>
						</tr>
						<tr>
							<td class="col-lg-3"><b class="pull-right">level  </b></td>
							<td class="col-lg-9"><?php echo $softwareDetail['level'] ?></td>
						</tr>
						<tr>
							<td class="col-lg-3"><b class="pull-right">parent cat_id  </b></td>
							<td class="col-lg-9"><?php echo $softwareDetail['parent_cat_id'] ?></td>
						</tr>
						<tr>
							<td class="col-lg-3"><b class="pull-right">slug  </b></td>
							<td class="col-lg-9"><?php echo $softwareDetail['slug'] ?></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
    </div>
</div>
<script type="text/javascript">
	$('#someButton').click(function() {
	    window.location.href = '/admin/software';
	    return false;
	});
</script>

<!------------------------------------------------------------------------>
<?php else : ?> 
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
					Software <small>Add or Edit Software info</small>
				</h1>
				<ol class="breadcrumb">
					<li class="active">
						<i class="fa fa-download"></i> Softwares
					</li>
				</ol>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 ">
				<a href="<?php echo $urlWithoutParam.'?new='.base64_encode( 'new,'.rand(1,1000) ) ?>" class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-plus"></span> NEW</a>
			</div>
		</div>
	<br />
		<div class="row">
			<div class="col-lg-12">
				<div class="table-responsive">
					<table class="table table-bordered  table-striped  ">
						<thead>
							<tr>
								<th class="col-lg-1">ID</th>
								<th class="col-lg-1 ">name</th>
								<th class="col-lg-2">size</th>
								<th class="col-lg-2">category</th>
								<th class="col-lg-1">release_date</th>
								<th class="col-lg-2">rating</th>
								<th class="col-lg-1" colspan="2">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($softwareList as $software) { ?>
							<tr>
								<td><?php echo $software['id'] ?></td>
								<td><a href="<?php echo $urlWithoutParam.'?detail='.base64_encode( $software['id'] ) ?>" ><?php echo $software['name'] ?></a></td>
								<td><?php echo $software['size'] ?></td>
								<td><?php echo $software['cat_id'] ?></td>
								<td><?php echo $software['release_date'] ?></td>
								<td><?php echo $software['rating'] ?></td>
								<td>
									<a href="<?php echo $urlWithoutParam.'?edit='.base64_encode( $software['id'] ) ?>" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></a>
								</td>
								<td>
									<a href="<?php echo $urlWithoutParam.'?delete='.base64_encode( $software['id'].','.$software['name'] ) ?>" data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" onclick=" return confirm('Delete software <?php echo $software['name'] ?> ?')" ><span class="glyphicon glyphicon-trash"></span></button></a>
								</td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
				<div class="clearfix">
					<ul class="pagination pull-right">
						<li>
							<a href="<?php echo $urlWithoutParam.'?p=1' ?>" class="<?php echo (($pageNo-1)==0) ? 'btn btn-primary disabled': 'btn btn-primary ' ?>"><span class="glyphicon glyphicon-arrow-left"></span> FIRST</a>
						</li>
						<li>
							<a href="<?php echo $urlWithoutParam.'?p='.($pageNo-1) ?>"  class="<?php echo (($pageNo-1)==0) ? 'btn btn-primary disabled': 'btn btn-primary ' ?>" >
								<span class="glyphicon glyphicon-chevron-left"></span>
							</a>
						</li>
						<?php for($i=( (($pageNo-2)<=0) ? 1 : ($pageNo-2) );$i<=( (($pageNo+3)<=$pageCount) ? ($pageNo+3) : ($pageCount) );$i++) { ?>
						<li class="<?php echo ($i==$pageNo) ? 'active' : '' ?>" >
							<a href="<?php echo $urlWithoutParam.'?p='.$i ?>"><?php echo $i ?></a>
						</li>
						<?php } ?>
						<li>
							<a href="<?php echo $urlWithoutParam.'?p='.($pageNo+1) ?>" class="<?php echo ($pageNo==$pageCount) ? 'btn btn-primary disabled': 'btn btn-primary' ?> "><span class="glyphicon glyphicon-chevron-right"></span></a>
						</li>
						<li>

							<a href="<?php echo $urlWithoutParam.'?p='.($pageCount) ?>" class="<?php echo ($pageNo==$pageCount) ? 'btn btn-primary disabled': 'btn btn-primary ' ?>">LAST <span class="glyphicon glyphicon-arrow-right"></span></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endif ?>