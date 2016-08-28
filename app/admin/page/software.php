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
	$u = explode(',', $del);
	$id = $u[0];
	// echo '<script language="javascript">';
	// echo 'alert("Do you want to delete this software '.$u[1].' ")';
	// echo '</script>';
	$software->deleteSoftware($id);
	header('Location: '.$urlWithoutParam);
	 exit;
}

	
?>
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
		<div class="col-lg-12">
			<div class="table-responsive">
				<table class="table table-bordered  table-striped  ">
					<thead>
						<tr>
							<th class="col-lg-1">ID</th>
							<th class="col-lg-1 ">name</th>
							<th class="col-lg-2 hidden-xs-down ">description</th>
							<th class="col-lg-2">size</th>
							<th class="col-lg-1">release_date</th>
							<th class="col-lg-2">total_download</th>
							<th class="col-lg-2">rating</th>
							<th class="col-lg-3">download_name</th>
							<th class="col-lg-2">path</th>
							<th class="col-lg-1" colspan="2">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($softwareList as $software) { ?>
						<tr>
							<td><?php echo $software['id'] ?></td>
							<td><?php echo $software['name'] ?></td>
							<td class="hidden-xl-down " ><?php echo $software['description'] ?></td>
							<td><?php echo $software['size'] ?></td>
							<td><?php echo $software['release_date'] ?></td>
							<td><?php echo $software['total_download'] ?></td>
							<td><?php echo $software['rating'] ?></td>
							<td><?php echo $software['download_name'] ?></td>
							<td><?php echo $software['path'] ?></td>
							<td>
								<p data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p>
							</td>
							<td>
								<a  href="<?php echo $urlWithoutParam.'?delete='.base64_encode( $software['id'].','.$software['username'] ) ?>" data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" onclick=" return confirm('Delete User <?php echo $software['username'] ?> ?')" ><span class="glyphicon glyphicon-trash"></span></button></a>
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