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
					<div class="whitebg text-center">
						<strong style="font-size: 200%;margin-top:20px;">APPLICATION FOR MOTOR VEHICLE STICKER</strong>
						<form role="form" method="post" action="protected/application_s1_proc.php" id="application_form1">
						<div class="row">
							<div class="col-md-3"></div>
							<div class="col-md-3">
								<input type="radio" id="s1_vehicle_type" name="s1_vehicle_type" value="1" /> Car <br>
							</div>
							<div class="col-md-3">
								<input type="radio" id="s1_vehicle_type" name="s1_vehicle_type" value="2" /> Motor <br>
							</div>
							<div class="col-md-3"></div>
						</div>
						<div class="row">
							<div class="col-md-3"></div>
							<div class="col-md-6">
								<input class="form-control input-sm text-center s1Misc1" id="s1_car_owner" name="s1_car_owner" placeholder="REGISTERED OWNER" required/>
							</div>
							<div class="col-md-3"></div>
						</div>
						<div class="row">
							<div class="col-md-3"></div>
							<div class="col-md-6">
								<input class="form-control input-sm text-center s1Misc1" id="s1_owner_address" name="s1_owner_address" placeholder="CURRENT ADDRESS" required/>
							</div>
							<!--<div class="col-md-3">
							<input type="hidden" class="form-control input-sm text-center s1Misc1" id="s1_owner_tel1" name="s1_owner_tel1" placeholder="TEL NO."/>
							<!--</div>-->
							<div class="col-md-3"></div>
						</div>
						<div class="row">
							<div class="col-md-3"></div>
							<div class="col-md-6">
								<input class="form-control input-sm text-center s1Misc1" id="s1_owner_province" name="s1_owner_province" placeholder="ADDRESS1 / ADDRESS2" />
							</div>
							<!--<div class="col-md-3">-->
								<input type="hidden"class="form-control input-sm text-center s1Misc1" id="s1_owner_tel2" name="s1_owner_tel2" placeholder="TEL NO." required/>
							<!--</div>-->
							<div class="col-md-3"></div>
						</div>
						<div class="row">
							<div class="col-md-3"></div>
							<div class="col-md-6">
								<input class="form-control input-sm text-center s1Misc1" id="s1_owner_tel1" name="s1_owner_tel1" placeholder="TEL NO." required/>
							</div>
							<div class="col-md-3"></div>
						</div>

						<strong class="applicationLabel">DESCRIPTION OF VEHICLE</strong>
						<div class="row">
							<div class="col-md-3"></div>
							<div class="col-md-3">
								<input class="form-control input-sm text-center s1Misc1" id="s1_car_make" name="s1_car_make" placeholder="MAKE" required/>
							</div>
							<div class="col-md-3">
								<input class="form-control input-sm text-center s1Misc1" id="s1_car_model" name="s1_car_model" placeholder="MODEL" required/>
							</div>
							<div class="col-md-3"></div>
						</div>
						<div class="row">
							<div class="col-md-3"></div>
							<div class="col-md-3">
								<input class="form-control input-sm text-center" style="padding:20px; margin-top:10px;" id="s1_car_color" name="s1_car_color" placeholder="COLOR" required/>
							</div>
							<div class="col-md-3">
								<input class="form-control input-sm text-center" style="padding:20px; margin-top:10px;" id="s1_car_plate" name="s1_car_plate" placeholder="PLATE NO." required/>
							</div>
							<div class="col-md-3"></div>
						</div>
						<strong class="applicationLabel">AUTHORIZED DRIVER OTHER THAN OWNER</strong>
						<div class="row">
							<div class="col-md-3"></div>
							<div class="col-md-3">
								<input class="form-control input-sm text-center" style="padding:20px; margin-top:10px;" id="s1_d1_name" name="s1_d1_name" placeholder="DRIVER NAME"/>
							</div>
							<div class="col-md-3">
								<input class="form-control input-sm text-center" style="padding:20px; margin-top:10px;" id="s1_d1_rel" name="s1_d1_rel" placeholder="RELATIONSHIP"/>
							</div>
							<div class="col-md-3"></div>
						</div>
						<div class="row">
							<div class="col-md-3"></div>
							<div class="col-md-3">
								<input class="form-control input-sm text-center" style="padding:20px; margin-top:10px;" id="s1_d1_address" name="s1_d1_address" placeholder="ADDRESS"/>
							</div>
							<div class="col-md-3">
								<input class="form-control input-sm text-center" style="padding:20px; margin-top:10px;" id="s1_d1_tel" name="s1_d1_tel" placeholder="TEL NO."/>
							</div>
							<div class="col-md-3"></div>
						</div>
						
						<div class="row">
							<div class="col-md-3"></div>
							<div class="col-md-3">
								<a href="application_RN.php"><button class="btn btn-default blackbg applicationButton">BACK</button></a>
							</div>
							<div class="col-md-3">
								<button class="btn btn-default blackbg applicationButton" type="submit" form="application_form1" >SUBMIT</button>
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
			<div class="blackbg text-center" style="padding-top: 20px; padding-bottom: 10px; position: fixed; bottom: 0px; left:0px;">
				<p>Copyright &copy 2015<br>ALL RIGHTS RESERVED </p>
			</div>
			<!--End of main content-->
		</div>
		<a href="#" class="scrollToTop text-center"><span class="glyphicon glyphicon-menu-up text-center" style="margin-top: 30%;"></span></a>
	</body>
	
	<!--JQuery scripts-->
	<script src="../js/stt.js"></script>
	<script src="../js/jquery.maskedinput.js"></script>
	<script src="../js/maskFields.js"></script>
</html>