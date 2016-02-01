<?php
	session_start();
	if(isset($_POST['s1_car_owner']) && isset($_POST['s1_owner_address']) && isset($_POST['s1_owner_tel1']) && isset($_POST['s1_owner_province'])
		&& isset($_POST['s1_owner_tel2']) && isset($_POST['s1_car_make']) && isset($_POST['s1_car_model']) && isset($_POST['s1_car_color'])
		&& isset($_POST['s1_car_plate']) && isset($_POST['s1_d1_name']) && isset($_POST['s1_d1_rel']) && isset($_POST['s1_d1_address']) 
		&& isset($_POST['s1_d1_tel'])){
		//if all values exist, save in session and go to next step
		$_SESSION['s1_car_owner'] = $_POST['s1_car_owner'];
		$_SESSION['s1_owner_address'] = $_POST['s1_owner_address'];
		$_SESSION['s1_owner_tel1'] = $_POST['s1_owner_tel1'];
		$_SESSION['s1_owner_province'] = $_POST['s1_owner_province'];
		$_SESSION['s1_owner_tel2'] = $_POST['s1_owner_tel2'];
		$_SESSION['s1_car_make'] = $_POST['s1_car_make'];
		$_SESSION['s1_car_model'] = $_POST['s1_car_model'];
		$_SESSION['s1_car_color'] = $_POST['s1_car_color'];
		$_SESSION['s1_car_plate'] = $_POST['s1_car_plate'];
		$_SESSION['s1_d1_name'] = $_POST['s1_d1_rel'];
		$_SESSION['s1_d1_rel'] = $_POST['s1_d1_rel'];
		$_SESSION['s1_d1_address'] = $_POST['s1_d1_address'];
		$_SESSION['s1_d1_tel'] = $_POST['s1_d1_tel'];
		header("location: ../application_s2.php");
	}else{
		header("location: ../application_s1.php");
	}

?>