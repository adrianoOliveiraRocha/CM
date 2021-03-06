<?php
include_once '../config.php';

class Utils {

	public static function uploadImage($image){

		$uploadDirectory = UPLOAD;

		$fileName = $image['name'];
		$fileSize = $image['size'];
		$fileTmpName  = $image['tmp_name'];
		$fileType = $image['type'];
		$fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);
		$imageName = time() . basename($fileName);
		$uploadPath = $uploadDirectory . $imageName;

		try {
			$didUpload = move_uploaded_file($fileTmpName, $uploadPath);
		} catch (\Exception $e) {
			echo $e->getMessage();
		}

		return $imageName;

	}

	public static function uploadImageW2a($image, $name_part){

		$uploadDirectory = UPLOAD;

		$fileName = $image['name'];
		$fileSize = $image['size'];
		$fileTmpName  = $image['tmp_name'];
		$fileType = $image['type'];
		$fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);
		$imageName = $name_part. time() . basename($fileName);
		$uploadPath = $uploadDirectory . $imageName;

		try {
			$didUpload = move_uploaded_file($fileTmpName, $uploadPath);
		} catch (\Exception $e) {
			echo $e->getMessage();
		}

		return $imageName;

	}
}
