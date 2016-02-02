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
					<div class="whitebg text-center">
						<strong style="font-size: 200%;margin-top:20px; margin-bottom:20px;">CAR APPLICATION FORM</strong>
						<form role="form" method="post" action="protected/application_s2_proc.php" id="application_form2">
						<div class="row" style="margin-bottom:20px;">
							<div class="col-md-3"></div>
							<div class="col-md-2">
								<label style="padding-top:15px;">First Name: </label>
							</div>
							<div class="col-md-4">
								<input class="form-control input-sm" style="padding:20px; margin-top:10px;" id="s2_car_owner_fname" name="s2_car_owner_fname" required/>
							</div>
							<div class="col-md-3"></div>
						</div>
						<div class="row" style="margin-bottom:20px;">
							<div class="col-md-4"></div>
							<div class="col-md-1"><label>Age</label></div>
							<div class="col-md-1">
								<select id="s2_age" name="s2_age">
									<?php
										for($i=15; $i < 80; $i++){
											echo "<option value=\"$i\">$i</option>";
										}
									?>
								</select>
							</div>
							<div class="col-md-1"><label>Gender</label></div>
							<div class="col-md-1">
								<select id="s2_car_owner_gender"  name="s2_car_owner_gender" required>
									<option value="1">Male</option>
									<option value="2">Female</option>
								</select>
							</div>
							<div class="col-md-4"></div>
						</div>
						<div class="row" style="margin-bottom:20px;">
							<div class="col-md-3"></div>
							<div class="col-md-3">
								<label>Birthdate</label>
								<input type="date" class="form-control input-sm text-center" style="padding:20px; margin-top:10px;" id="s2_car_owner_birthdate" name="s2_car_owner_birthdate" required/>
							</div>
							<div class="col-md-3">
								<label>Complexion</label>
							
								<input type="text" class="form-control input-sm text-center" style="padding:20px; margin-top:10px;" id="s2_car_owner_complexion" name="s2_car_owner_complexion" required/>
							</div>
							<div class="col-md-3"></div>
						</div>
						<div class="row">
							<div class="col-md-3"></div>
							<div class="col-md-3">
								<label>Height</label>
								<input type="text" class="form-control input-sm text-center" style="padding:20px; margin-top:10px;" id="s2_car_owner_height" name="s2_car_owner_height" required/>
							</div>
							<div class="col-md-3">
								<label>Built</label>
							
								<input type="text" class="form-control input-sm text-center" style="padding:20px; margin-top:10px;" id="s2_car_owner_built" name="s2_car_owner_built" required/>
							</div>
							<div class="col-md-3"></div>
						</div>
						<div class="row">
							<div class="col-md-3"></div>
							<div class="col-md-3"><label>Driver's Name</label></div>
							<div class="col-md-6"></div>
						</div>
						<div class="row">
							<div class="col-md-3"></div>
							<div class="col-md-6"><input type="text" class="form-control input-sm" style="padding:20px; margin-top: 10px; margin-bottom: 20px;" id="dname_1" name="dname_1" required/></div>
							<div class="col-md-3"></div>
							
						</div>
						<div class="row">
							<div class="col-md-3"></div>
							<div class="col-md-2"><label style="float:right;">Tel. No.: </label></div>
							<div class="col-md-4"><input type="text" class="form-control input-sm" style="padding:20px; margin-top: 10px; margin-bottom: 20px;" id="dtel_1" name="dtel_1" required/></div>
							<div class="col-md-3"></div>
						</div>
						<div class="row">
							<div class="col-md-3"></div>
							<div class="col-md-3"><label>Driver's Name</label></div>
							<div class="col-md-6"></div>
						</div>
						<div class="row">
							<div class="col-md-3"></div>
							<div class="col-md-6"><input type="text" class="form-control input-sm" style="padding:20px; margin-top: 10px; margin-bottom: 20px;" id="dname_2" name="dname_2"/></div>
							<div class="col-md-3"></div>
							
						</div>
						<div class="row">
							<div class="col-md-3"></div>
							<div class="col-md-2"><label style="float:right;">Tel. No.: </label></div>
							<div class="col-md-4"><input type="text" class="form-control input-sm" style="padding:20px; margin-top: 10px; margin-bottom: 20px;" id="dtel_2" name="dtel_2"/></div>
							<div class="col-md-3"></div>
						</div>
						<div class="row">
							<div class="col-md-3"></div>
							<div class="col-md-3">
								<a href="application_s1.php"><button class="btn btn-default blackbg" style="padding-top: 20px; padding-bottom: 20px; margin-top:10px;">BACK</button></a>
							</div>
							<div class="col-md-3">
								<button class="btn btn-default blackbg" type="submit" form="application_form2" style="padding-top: 20px; padding-bottom: 20px; margin-top:10px;">SUBMIT</button>
							</div>
							<div class="col-md-3"></div>
						</div>
						</form>
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
	<script src="../js/stt.js"></script>
</html>