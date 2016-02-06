<!DOCTYPE html>
<?php
	include "dbfunctions.php";
	session_start();
	if($_SESSION['SESSION_ID'] < 0 || !isset($_SESSION['SESSION_ID'])) header('location: ../content_control_login.php');
?>
<html>
	<head>
		<title>UPark: USLS Parking Content Control</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="../css/cc_style.css">
		<script src="../js/jquery.js"></script>
		<script src="../js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="navbar navbar-fixed-top navbar-custom">
				<div class="navbar-header">
					<a class="navbar-brand" href="content_control_dashboard.php">U<span style="color: #009e3d;">PARK</span>CC</a>
					<a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li class="link"><a href="content_control_dashboard.php"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
						<li class="link"><a href="content_control_approval.php" ><span class="glyphicon glyphicon-ok"></span> Approve Users</a></li>
						<li class="link"><a href="content_control_users.php" ><span class="glyphicon glyphicon-user"></span> Users</a></li>
						<li class="link"><a href="../content_control_login.php" ><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
					</ul>
				</div>
				
			</div>
			<!--Main Content-->
			<div>
			<ul class="page-content">
				<li>
					<div class="whitebg text-center">
						<div class="row">
							<div class="col-md-4" style="padding: 20px; background-color: #ebebeb; margin-right: 1px; margin-left:-2px;">
								<span class="glyphicon glyphicon-dashboard"></span> Number of Users: <?php dbhelper::getActiveUserCount() ?>
							</div>
							<div class="col-md-4"  style="padding: 20px; background-color: #ebebeb; margin-right: 1px;">
								<span class="glyphicon glyphicon-screenshot"></span> Number of Occupied Space: <div id="occupiedSpace"></div>
							</div>
							<div class="col-md-4"  style="padding: 20px; background-color: #ebebeb;">
								<span class="glyphicon glyphicon-circle-arrow-down"></span> Number of Available Space: <div id="availableSpace"></div>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="whitebg">
						<br>
						<div class="whitebg">
							<div class="text-center">
								
							</div>
							<div>
								<table class="table table-striped" id="pendingTable">
									<thead class="text-center">
										<tr>
											<th>Pending for Approval</th>
										</tr>
										<tr>
											<th>ID</th>
											<th>Name</th>
											<th>Status</th>
											<th>Approve</th>
											<th>Delete</th>
										</tr>
									</thead>
									<!--<tbody>
										<?php dbhelper::getPendingApplicants();?>
									</tbody>-->
								</table>
							</div>
						</div>
					</div>
				</li>
				
			</ul>
			</div>
			<!--End of main content-->
		</div>
		<a href="#" class="scrollToTop text-center"><span class="glyphicon glyphicon-menu-up text-center" style="margin-top: 30%;"></span></a>
	</body>
	
	<!--JQuery scripts-->
	<script src="../js/stt.js"></script>
	<script src="protected/js/approval.js"></script>
</html>