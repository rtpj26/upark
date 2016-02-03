<?php
	include_once "../dbconnect.php";
	
	public static $pdo;
	public static $db_obj;
		
	public static function Start($db_obj) {
		self::$db_obj = $db_obj; //similar to this.db_obj = db_obj
		if (isset($db_obj)) { 
			if ($db_obj->isConnected()) {
				self::$pdo = $db_obj->get_db_connect();
			}
		}
	}
	public function selectPendingUsers() {
		$pdo_1 = self::$pdo->prepare("SELECT ADS.ADS_ID, A.APPLICANT_FNAME, S.STATUS_DESCRIPTION 
			FROM `tbl_applicant` A, `tbl_status` S, `tbl_applicant_details_status_link` ADS  
			WHERE ADS.APPLICANT_ID = A.APPLICANT_ID and S.STATUS_ID = 3");
		$pdo_1->execute();
		$result = $pdo_1->fetch(PDO::FETCH_ASSOC);
		json_encode($result);
	}

	selectPendingUsers();
?>