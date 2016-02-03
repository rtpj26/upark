<?php
	include "../dbfunctions.php";
	session_start();
	if(isset($_POST['l1_content_1'])){
		if($_POST['l1_content_1'] == 1){
			$_SESSION['l1'] = 1;
			$_SESSION['l2'] = $_POST['l2_content_1'];
			$_SESSION['l3'] = $_POST['l3_content_1'];
			$_SESSION['l4'] = "";
		}else if($_POST['l1_content_1'] == 2){
			$_SESSION['l1'] = 2;
			$_SESSION['l2'] = $_POST['l2_content_2'];
			$_SESSION['l3'] = "";
			$_SESSION['l4'] = "";
		}else if($_POST['l1_content_1'] == 4){
			$_SESSION['l1'] = 4;
			$_SESSION['l2'] = "";
			$_SESSION['l3'] = "";
			$_SESSION['l4'] = $_POST['l1_content_4_other'];
		}else{
			$_SESSION['l1'] = 3;
			$_SESSION['l2'] = "";
			$_SESSION['l3'] = "";
			$_SESSION['l4'] = "";
		}
	}
	if(isset($_SESSION['l1']) && isset($_SESSION['l2']) && isset($_SESSION['l3']) && isset($_SESSION['l4'])){
		$applicant_id = dbhelper::addApplicant($_SESSION['s2_car_owner_fname'], $_SESSION['s2_gender'], $_SESSION['s2_car_owner_birthdate'], $_SESSION['s2_car_owner_complexion'], $_SESSION['s2_car_owner_height'], $_SESSION['s2_car_owner_built'], $_SESSION['dname_1'], $_SESSION['dtel_1'], $_SESSION['dname_2'],$_SESSION['dtel_2']);
		$status_id = dbhelper::addStatus($_SESSION['l1'], $_SESSION['l2'], $_SESSION['l3'], $_SESSION['l4']);
		$ud_id = dbhelper::addUserDetails($_SESSION['s1_car_owner'], $_SESSION['s1_owner_address'], $_SESSION['s1_owner_tel1'], $_SESSION['s1_owner_province'], $_SESSION['s1_owner_tel2'], $_SESSION['s1_d1_name'], $_SESSION['s1_d1_rel'],$_SESSION['s1_d1_address'], $_SESSION['s1_d1_tel'], $applicant_id, $status_id);
		$car_id = dbhelper::addVehicleDetails($_SESSION['s1_car_make'], $_SESSION['s1_car_model'], $_SESSION['s1_car_plate'], $_SESSION['s1_car_color'], $_SESSOPM['s1_vehicle_type']);
		dbhelper::linkApplicantCar($applicant_id, $car_id);
		dbhelper::linkStatusApplicantUD($applicant_id, $ud_id, $status_id);
		header('location:../confirmation.php');
	}
	//session_destroy(); //destroy session after insert. do not use while debugging
?>