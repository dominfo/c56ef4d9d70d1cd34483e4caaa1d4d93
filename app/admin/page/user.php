<?php

$user = new user;
//$userList = $user->getUserList();

if (isset($_GET['p']))
{
	$pageNo = $_GET['p'];
	$userList = $user->getUserList($_GET['p']);
}
else
{
	$pageNo = 1;
	$userList = $user->getUserList(null);
}
if (isset($_GET['delete']))
{
	$del = base64_decode($_GET['delete']);
	$u = explode(',', $del);
	$id = $u[0];
	// echo '<script language="javascript">';
	// echo 'alert("Do you want to delete this user '.$u[1].' ")';
	// echo '</script>';
	$user->deleteUser($id);
	header('Location: '.$urlWithoutParam);
	 exit;
}
$pageCount = $user->getUserPageListCount(10);
	
?>
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
					User <small>Add or Edit User info</small>
				</h1>
				<ol class="breadcrumb">
					<li class="active">
						<i class="fa fa-user"></i> User
					</li>
				</ol>
			</div>
		</div>
		<div class="col-lg-12">
			<div class="table-responsive">
				<table class="table table-bordered  table-striped  ">
					<thead>
						<tr>
							<th class="col-lg-1">User ID</th>
							<th class="col-lg-2">Username</th>
							<th class="col-lg-2">First name</th>
							<th class="col-lg-2">Last name</th>
							<th class="col-lg-3">email id</th>
							<th class="col-lg-1" colspan="2">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($userList as $user) { ?>
						<tr>
							<td><?php echo $user['id'] ?></td>
							<td><?php echo $user['username'] ?></td>
							<td><?php echo $user['first_name'] ?></td>
							<td><?php echo $user['last_name'] ?></td>
							<td><?php echo $user['email'] ?></td>
							<td>
								<p data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p>
							</td>
							<td>
								<a  href="<?php echo $urlWithoutParam.'?delete='.base64_encode( $user['id'].','.$user['username'] ) ?>" data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" onclick=" return confirm('Delete User <?php echo $user['username'] ?> ?')" ><span class="glyphicon glyphicon-trash"></span></button></a>
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
<!-- /.container-fluid -->

<?php 



?>