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
						<form role="form" method="post" action="protected/application_s3_proc.php" id="application_form3">
						<p class="text-center" style="font-size: 200%;">STATUS IN THE UNIVERSITY</p>
						<br>
						<div class="row">
							<div class="col-md-3"></div>
							<div id="l1" class="col-md-2">
								<input type="radio" id="l1_content_1" name="l1_content_1" value="1" /> Employee <br>
								<input type="radio" id="l1_content_2" name="l1_content_1" value="2" /> Student <br>
								<input type="radio" id="l1_content_3" name="l1_content_1" value="3" /> Alumni <br>
								<input type="radio" id="l1_content_4" name="l1_content_1" value="4" /> Others <br>
							</div>
							<div id="l2" class="col-md-2">
								<div id="l2_1">
									<input type="radio" id="l2_content_1_1" name="l2_content_1" value="1" /> Staff<br>
									<input type="radio" id="l2_content_1_2" name="l2_content_1" value="2" /> Faculty<br>
								</div>
								<div id="l2_2">
									<input type="radio" id="l2_content_2_1" name="l2_content_2" value="1"/> Integrated School (IS) <br>
									<input type="radio" id="l2_content_2_2" name="l2_content_2" value="2" /> College<br>
									<input type="radio" id="l2_content_2_3"name="l2_content_2" value="3" /> Graduate School <br>
								</div>
							</div>
							<div id="l3" class="col-md-2">
								<input type="radio" id="l3_content_1" name="l3_content_1" value="1" /> Full Time <br>
								<input type="radio" id="l3_content_2" name="l3_content_1" value="2" /> Part Time <br>
							</div>
							<div class="col-md-3"></div>
						</div>
						<div class="row">
							<div class="col-md-3"></div>
							<div class="col-md-6"><input type="text" class="form-control input-sm" id="l1_content_4_other"name="l1_content_4_other" /></div>
							<div class="col-md-3"></div>
						</div>
						<div class="row text-center">
							<div class="col-md-4"></div>
							<div class="col-md-4">Name of Student(s)</div>
							<div class="col-md-4"></div>
						</div>
						<div class="row text-center">
							<div class="col-md-3"></div>
							<div class="col-md-6">
								<input type="text" style="margin-bottom: 5px;" class="form-control input-sm" id="l1_content_3"name="l1_content" />
								<input type="text" style="margin-bottom: 5px;" class="form-control input-sm" id="l1_content_3"name="l1_content" />
								<input type="text" style="margin-bottom: 5px;" class="form-control input-sm" id="l1_content_3"name="l1_content" />
							</div>
							<div class="col-md-3"></div>
						</div>
						<div class="row">
							<div class="col-md-3"></div>
							<div class="col-md-3">
								<a href="application_s2.php"><button class="btn btn-default blackbg" style="padding-top: 20px; padding-bottom: 20px; margin-top:10px;">BACK</button></a>
							</div>
							<div class="col-md-3">
								<button class="btn btn-default blackbg" type="submit" form="application_form3" style="padding-top: 20px; padding-bottom: 20px; margin-top:10px;">SUBMIT</button>
							</div>
							<div class="col-md-3"></div>
						</div>
					</div>
				</li>
				<!--Footer-->
				<li>
					
				</li>
			</ul>
			</div>
			<!--End of main content-->
			<div class="blackbg text-center" style="padding-top: 20px; padding-bottom: 10px; position: fixed; bottom: 0px; left:0px;">
				<p>Copyright &copy 2015<br>ALL RIGHTS RESERVED </p>
			</div>
		</div>
		<a href="#" class="scrollToTop text-center"><span class="glyphicon glyphicon-menu-up text-center" style="margin-top: 30%;"></span></a>
	</body>
	
	<!--JQuery scripts-->
	<script src="../js/application.js"></script>
	<script src="../js/stt.js"></script>
</html>