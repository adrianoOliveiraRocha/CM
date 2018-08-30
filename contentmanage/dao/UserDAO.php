<?php
include_once CONNECT . 'connect.php';
/*
as the classes will be called from the controllers and they already call the config file,
the CONNECT constant must be passed to the dao class from the controller
*/
class UserDAO {
	private static $connect;

	public static function userValidation($email, $password){

		self::$connect = Connect::getInstance();
		$statement = "select id from user " .
		"where email = '$email' " .
		"and password = '$password'";

		$query = self::$connect->query($statement);
		$info = $query->fetch(PDO::FETCH_ASSOC);
		return $info['id'];
	}

	public static function update($q) {
		try {
			self::$connect = Connect::getInstance();
			$stmt = self::$connect->prepare( $q );
			$stmt->execute();
			self::$connect = null;
			return true;
		} catch (Exception $e) {
			return false;
		}
	}

}
