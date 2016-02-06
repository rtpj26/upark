<?php
	include_once "../dbfunctions.php";
	header('Content-type: application/json');

	$method = $_SERVER['REQUEST_METHOD'];
	
	if($method == "GET"){
		$action = $_GET['action'];

		if($action == "getPendingUser"){
			return dbhelper::getPendingApplicants();
		}

		if($action == "getActiveUser"){
			return dbhelper::returnAllUsers();
		}
	}

	if($method == "POST"){
		$action = $_POST['action'];

		if($action == "updatePendingUser"){
			$ADS_ID = $_POST['ADS_ID'];
			return dbhelper::approveUser($ADS_ID);
		}
	
		if($action == "deletePendingUser" || $action == "deleteActiveUser"){
			$ADS_ID = $_POST['ADS_ID'];
			return dbhelper::deleteUser($ADS_ID);
		}
	}
?>