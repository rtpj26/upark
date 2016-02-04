<!DOCTYPE html>
<html>
	<head>
		<title>UPark: USLS Parking</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script src="js/jquery.js"></script>
		<script src="js/navbar.js"></script>
		<script src="js/bootstrap.min.js"></script>
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
						<li><a class="navbar-brand" href="index.php">U<span style="color: #009e3d;">PARK</span></a></li>
						<li class="active link"><a href="index.php">HOME</a></li>
						<li class="link"><a href="php/about.php">ABOUT</a></li>
						<li class="link"><a href="php/admin.php">ADMIN</a></li>
						<li class="link"><a href="php/news.php">NEWS</a></li>
						<li class="link"><a href="php/contact.php">CONTACT</a></li>
						<li class="link"><a href="php/application_RN.php">APPLICATION</a></li>
						<li class="center_vertical" style="font-size: 75%; float: right; color: white;">
							<div>
								Already a user? <a href="php/enter_sticker.php" style="color: #009e3d">Sign in</a> here
							</div>
							<div>
								Admin? <a href="content_control_login.php" style="color: #009e3d">Sign in</a> here
							</div>
						</li>
					</ul>
				</div>
			</div>
			<!--Main Content-->
			<div>
			<ul class="page-content">
				<li>
					<div class="greenbg text-center" style="padding-top: 30px; padding-bottom: 30px;">
						<p><span style="font-size: 500%;">Welcome</span><br><span style="font-size: 250%;">
						THE OFFICIAL LASALLIAN PARKING WEBSITE</span><br><span style="font-size: 500%;"><strong>UPARK</strong></span></p>
						
					</div>
				</li>
				<li>
					<div class="blackbg arrow_box_b" style="margin-top: -50px;">
						<div class="row">
							<div class="col-md-6" style="padding:20px;">
								<p class="text-center"><span style="font-size: 175%;"><strong>UNAVAILABLE</strong></span><br>
								<img src="img/unavailable.png"/><br>
								<span style="color: #77694c">Something here</span><br>
								<span style="font-size: 75%;">Lorem ipsum dolor sit amet, consectetur 
								adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore 
								magna aliqua. Ut enim ad minim veniam</span><br>
								<a href="#" style="color: #fff;">MORE</a></p>
							</div>
							<div class="col-md-6" style="padding:20px;">
								<p class="text-center"><span style="font-size: 175%;"><strong>AVAILABLE</strong></span><br>
								<img src="img/available.png"/><br>
								<span style="color: #77694c">Something here</span><br>
								<span style="font-size: 75%;">Lorem ipsum dolor sit amet, consectetur 
								adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore 
								magna aliqua. Ut enim ad minim veniam</span><br>
								<a href="#" style="color: #fff;">MORE</a></p>
							</div>
						</div>
					</div>
				</li>
				
				<li>
					<div class="greenbg text-center arrow_box_g">
						<ul class="spaced text-center inlinelist" style="padding-top: 20px;">
							<li class="inlineli" style="font-size: 200%;"><strong>Facebook</strong></li>
							<li class="inlineli" style="font-size: 200%;"><strong>Twitter</strong></li>
							<li class="inlineli" style="font-size: 200%;"><strong>Google</strong></li>
							<li class="inlineli" style="font-size: 200%;"><strong>USLS</strong></li>
						</ul><br><p style="font-size: 500%;"><strong>UPARK</strong></p><br>
					</div>
				</li>
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
	<script>
		$(document).ready(function(){
			$(window).scroll(function(){
				if ($(this).scrollTop() > 100) {
					$('.scrollToTop').fadeIn(); //if scroll from top is > 100 fade in (show glyphicon)
				} else {
					$('.scrollToTop').fadeOut(); //else fade out (hide glyphicon)
				}
			});
		
			$('.scrollToTop').click(function(){
				$('html, body').animate({scrollTop : 0},800); //if glyphicon is clicked, scroll to top where scrolltop = 0 @ 800ms speed
				return false;
			});	
		});
	</script>
</html>