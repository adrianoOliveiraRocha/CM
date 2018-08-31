<?php
include_once CONNECT . 'connect.php';

class Promotion
{
	private static $connect;

	private $id;
	private $description;
	private $image;

	public function setId($id){
		$this->id = $id;
	}
	public function getId(){
		return $this->id;
	}

	public function setDescription($description){
		$this->description = $description;
	}
	public function getDescription(){
		return $this->description;
	}

	public function setImage($image){
		$this->image = $image;
	}
	public function getImage(){
		return $this->image;
	}

	public function save()
	{
		$statement = "insert into promotion (description, image)
    values('{$this->getDescription()}', '{$this->getImage()}')";

		self::$connect = Connect::getInstance();
		$stmt = self::$connect->prepare ( $statement );
		$stmt->execute ();
		if ($stmt->rowCount () > 0) {
			return true;
		} else {
			return false;
		}

	}

	public static function getAllPromotions($offset=0)
	{
		self::$connect = Connect::getInstance ();
		$response = self::$connect->query ( "select * from promotion" );
		$products = $response->fetchAll ( PDO::FETCH_ASSOC );
		self::$connect = null;
		return $products;
	}

	public static function getThisPromotion($id) {
		self::$connect = Connect::getInstance ();
		$q = "select * from promotion where id = :id";
		$statement = self::$connect->prepare ( $q );
		$statement->execute(array(':id' => $id));
		self::$connect = null;

		if ($statement->rowCount() > 0) {
			$info = $statement->fetch(PDO::FETCH_ASSOC);
			return $info;
		} else {
			return false;
		}

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

	public function delete($id) {
		self::$connect = Connect::getInstance ();
		$stmt = self::$connect->prepare ( "delete from promotion where id = {$id}" );
		$stmt->execute ();
		self::$connect = null;
		if ($stmt->rowCount () > 0) {
			return true;
		} else {
			return false;
		}
	}

}
