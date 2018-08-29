<?php
include_once '../config.php';

class Utils {

	public static function uploadImage($image){

		$uploadDirectory = UPLOAD;

		$fileExtensions = ['jpeg','jpg','png']; // Get all the file extensions

		$fileName = $image['name'];
		$fileSize = $image['size'];
		$fileTmpName  = $image['tmp_name'];
		$fileType = $image['type'];
		$fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);

		$uploadPath = $uploadDirectory . basename($fileName);

		try {
			$didUpload = move_uploaded_file($fileTmpName, $uploadPath);
		} catch (\Exception $e) {
			echo $e->getMessage();
		}

		if ($didUpload) {
			return true;
		} else {
			return false;
		}
	}

	public static function test(){
		echo UPLOAD;
	}
}
