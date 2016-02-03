<!DOCTYPE html>
<?php
	session_start();
	if($_SESSION['SESSION_ID'] < 0) header('location: ../content_control_login.php');
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
								<span class="glyphicon glyphicon-dashboard"></span> Number of Users: <div id="numUsers"></div>
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
					<div class="whitebg text-center">
						<br>
						<img id="logo" src="../img/uparkLogo.png" width="200px" height="200px" /><br>
						<p>WELCOME TO YOUR</p>
						<strong style="font-size: 250%;">UPARK CONTENT CONTROL SYSTEM</strong><br>
					</div>
				</li>
				<li>
					<div class="greenbg arrow_box_g justify" id="description" style="padding: 30px;">
						<strong style="font-size: 120%; margin-top:30px;">What does your UPARK CC do?</strong>
						<br><p style="margin-top:20px;">Your content control system is basically a resource management handler that will allow you to customize
						       the contents of your updates and news page. Why bother creating a new HTML or PHP page if you have can have this neat feature instead?
					           The UPARK CC does have its limitations. It can only update the "UPDATES" and "NEWS" page. The post generation is database driven, which
							   means that if your database was not set up properly, it would create some problems when viewing the page itself. But don't worry
							   as long as you have filled out all the necessary fields when creating a new post, everything would be ok. Well, that's about it! 
							   enjoy creating new posts and have fun with your UPARK system</p>
						<em style="float: right;">-UPARK Development Team</em>
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
</html>