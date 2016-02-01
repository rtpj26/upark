<?php
	session_start();
	if(isset($_POST['s2_car_owner_fname']) && isset($_POST['s2_car_owner_gender']) && isset($_POST['s2_car_owner_birthdate'])
		&& isset($_POST['s2_car_owner_complexion']) && isset($_POST['s2_car_owner_height']) && isset($_POST['s2_car_owner_built'])
		&& isset($_POST['dname_1']) && isset($_POST['dtel_1']) && isset($_POST['dname_2']) && isset($_POST['dtel_2'])){
		$_SESSION['s2_car_owner_fname'] = $_POST['s2_car_owner_fname'];
		$_SESSION['s2_gender'] = $_POST['s2_car_owner_gender'];
		$_SESSION['s2_car_owner_birthdate'] = $_POST['s2_car_owner_birthdate'];
		$_SESSION['s2_car_owner_complexion'] = $_POST['s2_car_owner_complexion'];
		$_SESSION['s2_car_owner_height'] = $_POST['s2_car_owner_height'];
		$_SESSION['s2_car_owner_built'] = $_POST['s2_car_owner_built'];
		$_SESSION['dname_1'] = $_POST['dname_1'];
		$_SESSION['dtel_1'] = $_POST['dtel_1'];
		$_SESSION['dname_2'] = $_POST['dname_2'];
		$_SESSION['dtel_2'] = $_POST['dtel_2'];
		
		header("location: ../application_s3.php");
	}else{
		header("location: ../application_s2.php");
	}

?>