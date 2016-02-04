<?php
	include_once "dbconnect.php";
	
	dbhelper::Start($db_obj); //coming from dbconnect db_obj
	
	class dbhelper{
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
		public function authenticateContentLogin($username, $password) {
			$pdo_1 = self::$pdo->prepare("SELECT * FROM `tbl_content_login` WHERE BINARY LOGIN_USERNAME = :username AND BINARY LOGIN_PASSWORD = :password");
			$pdo_1->execute(array(':username' => $username, ':password' => $password));
			$result = $pdo_1->fetch(PDO::FETCH_ASSOC);
			if($result)	return $result['LOGIN_ID'];
			else return 0;
		}

		public function addApplicant($fname, $gender, $birthdate, $complexion, $height, $built, $driver1_name, $driver1_tel, $driver2_name, $driver2_tel) {
			$pdo_1 = self::$pdo->prepare("INSERT INTO `tbl_applicant` VALUES(NULL, :FNAME, :GENDER, :BIRTHDATE, :COMPLEXION, :HEIGHT, :BUILT, :DRIVER1_NAME, :DRIVER1_TEL, :DRIVER2_NAME, :DRIVER2_TEL)");
			$pdo_1->execute(array(':FNAME' => $fname, ':GENDER' => $gender, ':BIRTHDATE' => $birthdate, ':COMPLEXION' => $complexion, ':HEIGHT' => $height, ':BUILT' => $built, ':DRIVER1_NAME' => $driver2_name, 
				':DRIVER1_TEL' => $driver1_tel, ':DRIVER2_NAME' => $driver2_name, ':DRIVER2_TEL' => $driver2_tel));
			$id = self::$pdo->lastInsertId('APPLICANT_ID');
			return $id;
		}

		public function addStatus($l1, $l2, $l3, $l4) {
			$pdo_1 = self::$pdo->prepare("INSERT INTO `tbl_university_status` VALUES(NULL, :L1, :L2, :L3, :L4)");
			$pdo_1->execute(array(':L1' => $l1, ':L2' => $l2, ':L3' => $l3, ':L4' => $l4));
			$id = self::$pdo->lastInsertId('USTATUS_ID');
			return $id;
		}

		public function addUserDetails($regowner, $city, $telno, $province, $provTelno, $drName, $rel, $drAdd, $drTelno, $aid1, $uid1){
			$pdo_1 = self::$pdo->prepare("INSERT INTO `tbl_user_details` VALUES(NULL, 3, :regowner, :city, :telno, :prov, :provtelno, :drName,
				:rel, :drAdd, :drTelNo, :aid, :uid)");
			$pdo_1->execute(array(':regowner' => $regowner, ':city' => $city, ':telno' => $telno, ':prov' => $province, ':provtelno' => $provTelno, 
				':drName' => $drName, ':rel' => $rel, ':drAdd' => $drAdd, ':drTelNo' => $drTelno, ':aid' => $aid1, ':uid' => $uid1));
			$id = self::$pdo->lastInsertId('UD_ID');
			return $id;
		}

		public function addVehicleDetails($make, $model, $plate, $color){
			$pdo_1 = self::$pdo->prepare("INSERT INTO `tbl_applicant_vehicle` VALUES(NULL, :make, :model, :plate, :color");
			$pdo_1->execute(array(':make' => $make, ':model' => $model, ':plate' => $plate, ':color' => $color));
			$id = self::$pdo->lastInsertId('AC_ID');
			return $id;
		}	

		public function linkApplicantCar($aid, $vid){
			$pdo_1 = self::$pdo->prepare("INSERT INTO `tbl_applicant_car_link` VALUES(NULL, :AID, :VID)");
			$pdo_1->execute(array(':AID' => $aid, ':VID' => $vid));
			$id = self::$pdo->lastInsertId('ACL_ID');
			return $id;
		}
			

		public function linkStatusApplicantUD($aid, $uid, $sid){
			$pdo_1 = self::$pdo->prepare("INSERT INTO `tbl_applicant_details_status_link` VALUES(NULL, :AID, :UID, :SID, 3)");
			$pdo_1->execute(array(':AID' => $aid, ':UID' => $uid, ':SID' => $sid));
			$id = self::$pdo->lastInsertId('ADS_ID');
			return $id;
		}

		public function getPendingApplicants(){
			$pdo_1 = self::$pdo->prepare("SELECT ADS.ADS_ID, A.APPLICANT_FNAME, S.STATUS_DESCRIPTION 
										FROM `tbl_applicant` A, `tbl_status` S, `tbl_applicant_details_status_link` ADS  
										WHERE ADS.APPLICANT_ID = A.APPLICANT_ID and S.STATUS_ID = 3");
			$pdo_1->execute();
			$result = $pdo_1->fetch(PDO::FETCH_ASSOC);
			if($result)	{
				while($row = $pdo_1->fetch(PDO::FETCH_ASSOC)){
					echo '<tbody><tr><td>' . $row['ADS_ID'] . '</td>
								<td>' . $row['APPLICANT_FNAME'] . '</td>
								<td>' . $row['STATUS_DESCRIPTION'] . '</td>
								<td><button class="btn btn-default"> Approve </button> </tr></tbody>';
				}

			}
		}

		public function getActiveUserCount(){
			$pdo_1 = self::$pdo->prepare("SELECT COUNT(ADS_ID) As activeCount FROM `tbl_applicant_details_status_link` WHERE STATUS_ID = 1");
			$pdo_1->execute();
			$result = $pdo_1->fetch(PDO::FETCH_ASSOC);
			if($result)	echo $result['activeCount'];
			else echo 0;
		}


	}
?>