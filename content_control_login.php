<!DOCTYPE html>
<?php
	session_start();
	$_SESSION['SESSION_ID'] = -1;
	include "php/dbfunctions.php";
	if(isset($_POST['control_password']) && isset($_POST['control_username'])){

		$id = dbhelper::authenticateContentLogin($_POST['control_username'], $_POST['control_password']);
		if($id > 0){
			$_SESSION['SESSION_ID'] = $id;
			header('location: php/content_control_dashboard.php');
		}else{
			echo "<script>
					alert('Invalid Credentials. Please make sure that the username and password is correct and try again')
				  </script>";
		}
	}
?>
<html>
	<head>
		<title>UPark: USLS Parking Content Control</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
			<!--Main Content-->
			<div>
			<ul class="page-content">
				<li>
					<div class="whitebg text-center">
						<img src="img/uparkLogo.png" width="200px" height="200px" /><br>
						<strong style="margin-top:10px;">UPARK CONTENT CONTROL LOGIN</strong>
						<div class="row">
							<div class="col-md-4"></div>
							<div class="col-md-4">
								<form role="form" method="POST">
									<input type="text" class="form-control input-sm  text-center" style="margin-top:10px;" name="control_username" placeholder="USERNAME"/>
									<input type="password" class="form-control input-sm  text-center" style="margin-top:10px;" name="control_password"  placeholder="PASSWORD"/>
									<button type="submit" class="btn btn-primary" style="margin-top:10px; padding-left: 155px; padding-right: 155px;">Login</button>
								</form>
								<p></p>
								<a href="index.php"><button type="button" class="btn btn-default" style="margin-top:10px; padding-left: 121px; padding-right: 121px;">Back to UPARK</button></a>
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
	<script>
		$(document).ready(function(){
			$(window).scroll(function(){
				if ($(this).scrollTop() > 100) {
					$('.scrollToTop').fadeIn(); //if scroll from top is > 100 fade in (show glyphicon) !Important: change glyphicon
					//to arrow up, background color: #fff
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