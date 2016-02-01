<!DOCTYPE html>
<?php
	if(isset($_POST['contact_name']) && isset($_POST['contact_email']) && isset($_POST['contact_mobile']) && isset($_POST['contact_subject']) && isset($_POST['contact_suggestion'])){
		$to = "upark.usls@gmail.com";
		$email_subject = $_POST['contact_subject'];
		$email_body = $_POST['contact_suggestion'];
		$header = "From: $_POST[contact_email] \r \n";
		if(mail($to,$email_subject,$email_body)){
			echo "<div class=\"modal-content\">";
				echo "<div id=\"myModal\" class=\"modal fade\" role=\"dialog\">";
					echo "<div class=\"modal-dialog\">";
						echo "<div class=\"modal-content\">";
							echo "<div class=\"modal-header\">";
								echo "<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>";
								echo "<h4 class=\"modal-title\">Email Status: Your email has been sent</h4>";
							echo "</div>";
							echo "<div class=\"modal-body\">";
								echo "<p>Thank you for your time and suggestion. We're sure that this will be a big help in improving the site and how we
									manage the parking spaces within the campus.We'll take careful considerations on how we can implement this in the system.
									<br><br><em>With Thanks,<br>UPark Development Team</em></p>";
							echo "</div>";
							echo "<div class=\"modal-footer\">";
								echo "<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>";
							echo "</div></div></div></div></div>";	
		}else{
			echo "<div class=\"modal-content\">";
				echo "<div id=\"myModal\" class=\"modal fade\" role=\"dialog\">";
					echo "<div class=\"modal-dialog\">";
						echo "<div class=\"modal-content\">";
							echo "<div class=\"modal-header\">";
								echo "<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>";
								echo "<h4 class=\"modal-title\">Email Status: Message Not Sent</h4>";
							echo "</div>";
							echo "<div class=\"modal-body\">";
								echo "<p>Ooops! Looks like there was a problem sending your email! Don't worry, all is not lost, you can try and send your email again
								or you can contact us using the number we have provided. <br><br><em>With Thanks,<br>UPark Development Team</em></p>";
							echo "</div>";
							echo "<div class=\"modal-footer\">";
								echo "<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>";
							echo "</div></div></div></div></div>";
		}
		echo "<script>";
		echo "$(window).load(function() {";
		echo "$('#myModal').modal('show');";
		echo "});";
		echo "</script>";
	}
?>
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
					<div class="row whitebg" style="padding: 20px;">
						<div class="col-md-4" style="padding:20px;">
							<span class="text-center">FIND US HERE</span>
							<br><img src="../img/map.png" width="325" height="185"><br>
							<a href="">View Larger Map</a>
							<p><span style="font-size:150%;">Company Information:</span><br>
							500 Lorem Ipsum Dolor St.<br>22-59-2-9 Sit Amet, Lorem, Philippines
							<br>Phone: 434-3761<br>Fax: (000) 000 00 0 0<br>
							Email Add: upark.usls@gmail.com<br></p>
							<br><span style="float:right"><a href="" style="color: #009e3d;">READ MORE</a></span>
						</div>
						<div class="col-md-8" style="padding:20px;">
							<span class="text-center"><strong>Contact Us</strong></span>
							<form role="form" method="POST">
								<label>Name</label><br>
								<input class="form-control" type="text" name="contact_name" required/>
								
								<label>E-mail</label><br>
								<input class="form-control" type="email" name="contact_email" required/>
								
								<label>Mobile</label><br>
								<input class="form-control" type="text" name="contact_mobile" required/>
								
								<label>Subject</label><br>
								<textarea class="form-control" rows="4" name="contact_subject" required></textarea>
								
								<label>Suggestion</label><br>
								<textarea class="form-control" rows="4" name="contact_suggestion" required></textarea>
								
								<button type="submit" class="btn btn-default" style="float:right; margin-top: 10px;">Submit</button>
							</form>
						</div>
					</div>
				</li>
				<li>
					<div class="blackbg">
						<div class="row">
							<div class="col-md-4" style="padding:20px;">
								<p class="text-center"><span style="font-size: 175%;"><strong>RESERVED</strong></span><br>
								<img src="../img/reserved.png"/><br>
							</div>
							<div class="col-md-4" style="padding:20px;">
								<p class="text-center"><span style="font-size: 175%;"><strong>UNAVAILABLE</strong></span><br>
								<img src="../img/unavailable.png"/><br>
							</div>
							<div class="col-md-4" style="padding:20px;">
								<p class="text-center"><span style="font-size: 175%;"><strong>AVAILABLE</strong></span><br>
								<img src="../img/available.png"/><br>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="greenbg text-center arrow_box_g" style="margin-top:-50px;">
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
	<script src="../js/stt.js"></script>
</html>