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
						<li class="link"><a href="application_RN.php">APPLICATION</a></li>
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
					<div class="whitebg" style="margin-top:10px;">
						<div class="row text-center">
							<div class="col-md-3">
								<button class="btn btn-default text-center" id="lotA" style="padding-left:80px; padding-right: 80px;">Lot A</button>
							</div>
							<div class="col-md-3">
								<button class="btn btn-default text-center" id="lotB" style="padding-left:80px; padding-right: 80px;">Lot B</button>
							</div>
							<div class="col-md-3">
								<button class="btn btn-default text-center" id="lotC" style="padding-left:80px; padding-right: 80px;">Lot C</button>
							</div>
							<div class="col-md-3">
								<button class="btn btn-default text-center" id="lotD" style="padding-left:80px; padding-right: 80px;">Lot D</button>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="whitebg" id="la">
						<h3 class="text-center">Lot A</h3>
						<img class = "text-center" src="../img/lotA.png">
					</div>
				</li>
				<li>
					<div class="whitebg" id="lb">
						<h3 class="text-center">Lot B</h3>
						<img class = "text-center" src="../img/lotB.png">
					</div>
				</li>
				<li>
					<div class="whitebg" id="lc">
						<h3 class="text-center">Lot C</h3>
						<img class = "text-center" src="../img/lotA.png">
					</div>
				</li>
				<li>
					<div class="whitebg" id="ld">
						<h3 class="text-center">Lot D</h3>
						<img class = "text-center" src="../img/lotB.png">
					</div>
				</li>
				<li>
					<div class="greenbg text-center" style="margin-top:20px;">
						<p style="padding-top: 20px; font-size: 150%;">FOLLOW US ON</p>
						<div class="row text-center">
							<div class="col-md-2" style="padding:10px;"></div>
							<div class="col-md-2" style="padding:10px;">
								<strong style="font-size: 200%;">Facebook</strong><br>
								<img src="../img/facebook.png" width="50px" height="50px" />
							</div>
							<div class="col-md-2" style="padding:10px;">
								<strong style="font-size: 200%;">Twitter</strong><br>
								<img src="../img/twitter.png" width="50px" height="50px" />
							</div>
							<div class="col-md-2" style="padding:10px;">
								<strong style="font-size: 200%;">Google</strong><br>
								<img src="../img/google.png" width="50px" height="50px" />
							</div>
							<div class="col-md-2" style="padding:10px;">
								<strong style="font-size: 200%;">USLS</strong><br>
								<img src="../img/google.png" width="50px" height="50px" />
							</div>
							<div class="col-md-2" style="padding:10px;"></div>
						</div>
						
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
	<script type="text/javascript" src="../js/admin.js"></script>
	<script src="../js/stt.js"></script>
</html>