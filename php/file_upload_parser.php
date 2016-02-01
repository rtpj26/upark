<?php
	$fileName = $_FILES["image1"]["name"];
	$filetmpLoc = $_FILES["image1"]["tmp_name"];
	$fileType = $_FILES["image1"]["type"];
	$fileSize = $_FILES["image1"]["size"];
	$fileErrorMsg = $_FILES["image1"]["error"];
	if(!$fileTmpLoc){
		if file not chosen echo "ERROR: No file chosen";
		exit();
	}
	if(move_uploaded_file($fileTmpLoc, "article_img/$fileName")){
		echo "$fileName upload complete";
	}else{
		echo "Upload failed";
	}
?>