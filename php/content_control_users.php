<!DOCTYPE html>
<?php
	session_start();
	if($_SESSION['SESSION_ID'] < 0) header('location: ../content_control_login.php');
	include "dbfunctions.php";
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
						<li class="link"><a href="content_control_updates.php" ><span class="glyphicon glyphicon-pushpin"></span> Updates and News</a></li>
						<li class="link"><a href="content_control_set_feature.php" ><span class="glyphicon glyphicon-duplicate"></span> Featured Articles</a></li>
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
					<div class="whitebg" style="padding: 20px;">
						<button id="aPost" class="btn btn btn-primary" style="margin-right: 5px;"><span class="glyphicon glyphicon-user"></span> Add New User </button>
					</div>
					<div class="whitebg" style="padding: 20px;">
						<table class="table">
							<?php
								$res = dbhelper::returnAllUsers();
								var_dump($res);
								echo "<thead>
										<th>User</th>
										<th colspan=\"2\">Actions </th>
									  </thead>";
								foreach($res as $row){
									echo "<tr>
											<td>".$res->LOGIN_OWNER."</td>
											<td><button class=\"btn btn-primary\" value=\"".$res->LOGIN_ID."\"><span class=\"glyphicon glyphicon-pencil\"></span> Edit</td>
											<td><button class=\"btn btn-primary\" value=\"".$res->LOGIN_ID."\"><span class=\"glyphicon glyphicon-ok\"></span> Delete</td>
										  </tr>";
									}
								
							?>
						</table>
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