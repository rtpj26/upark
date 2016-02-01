<!DOCTYPE html>
<html>
	<head>
		<title>UPark: USLS Parking</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<script src="../js/jquery.js"></script>
		<script src="../js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="navbar navbar-fixed-top navbar-custom">
				<div class="navbar-header">
					<a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li><a class="navbar-brand" href="../index.php">U<span style="color: #009e3d;">PARK</span></a></li>
						<li class="active link"><a href="../index.php">HOME</a></li>
						<li class="link"><a href="about.php">ABOUT</a></li>
						<li class="link"><a href="admin.php">ADMIN</a></li>
						<li class="link"><a href="updates.php">UPDATES</a></li>
						<li class="link"><a href="news.php">NEWS</a></li>
						<li class="link"><a href="contact.php">CONTACT</a></li>
						<li class="link dropdown"><a id="application_hover" href="#" class="dropdown-toggle navbar-custom" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">APPLICATION<span class="caret"></span></a>
							<ul class="dropdown-menu" style="font-size: 80%; color: #009e3d;">
								<li class="subnavmenu"><a href="application_RN.php"> MOTOR APPLICATION </a></li>
								<li class="subnavmenu"><a href="application_RN.php"> CAR APPLICATION </a></li>
							</ul>
						</li>
						<li class="center_vertical" style="font-size: 75%; float: right; color: white;">
							<div>
								Already a user? <a href="enter_sticker.php" style="color: #009e3d">Sign in</a> here
							</div>
							<div>
								Admin? <a href="../content_control_login.php" style="color: #009e3d">Sign in</a> here
							</div>
						</li>
					</ul>
				</div>
			</div>
			<!--Main Content-->
			<div>
			<ul class="page-content">
				<li>
					<div class="whitebg">
						<form method="GET">
							<table class="table text-center">
								<thead>
									<th class="text-center" colspan="2">User Information</th>
								</thead>
								<tbody>
									<tr>
										<td>First Name</td>
										<td>Test FName</td>
									</tr>
									<tr>
										<td>Last Name</td>
										<td>Test LName</td>
									</tr>
									<tr>
										<td>Age</td>
										<td>100</td>
									</tr>
									<tr>
										<td>Gender</td>
										<td>Malee</td>
									</tr>
									<tr>
										<td>Birthdate</td>
										<td>1/1/1000</td>
									</tr>
								</tbody>
							</table>
						</form>
							<a href="fpdf/account_info_p.php" class="text-center"><button class="btn btn-default blackbg" style="width:100px; height:60px; padding-top: 20px; padding-bottom: 20px; margin-top:10px;">Print Page</button></a>
						
					</div>
					
				</li>
				<!--Footer-->
				<li>
					<div class="blackbg text-center" style="padding-top: 50px; padding-bottom: 10px;">
						<p>Copyright &copy 2015<br>ALL RIGHTS RESERVED </p>
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