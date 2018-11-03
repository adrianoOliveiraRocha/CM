<?php

include_once CONNECT . 'connect.php';

class Portifoli
{
	private static $connect;

	private $id;
	private $title;
	private $description;
	private $image;

	public function setId($id){
		$this->id = $id;
	}
	public function getId(){
		return $this->id;
	}

	public function setTitle($title){
		$this->title = $title;
	}
	public function getTitle()
	{
		return $this->title;
	}

	public function setDescription($description){
		$this->description = $description;
	}
	public function getDescription()
	{
		return $this->description;
	}

	public function setImage($url){
		$this->url = str_replace(' ', '', $url);
	}
	public function getImage(){
		return $this->url;
	}

	public function save()
	{
		$statement = "insert into portifoli (title, description, image) 
		values('{$this->getTitle()}', '{$this->getDescription()}', '{$this->getImage()}')";
		self::$connect = Connect::getInstance();
		$stmt = self::$connect->prepare ( $statement );
		$stmt->execute ();
		if ($stmt->rowCount () > 0) {
			return true;
		} else {
			return false;
		}
	}

	public static function getAllBanners(){
		self::$connect = Connect::getInstance ();
		$response = self::$connect->query ( "select * from portifoli" );
		$banners = $response->fetchAll ( PDO::FETCH_ASSOC );
		self::$connect = null;
		return $banners;
	}

	public static function getThisBanner($id){
		self::$connect = Connect::getInstance ();
		$q = "select * from portifoli where id = :id";
		$statement = self::$connect->prepare ( $q );
		$statement->execute(array(':id' => $id));
		self::$connect = null;

		if ($statement->rowCount() > 0){
			$info = $statement->fetch(PDO::FETCH_ASSOC);
			return $info;
		} else {
			return false;
		}
	}

	public static function update($q){
		try {
			self::$connect = Connect::getInstance();
			$stmt = self::$connect->prepare( $q );
			$stmt->execute();
			self::$connect = null;
			return true;
		} catch (Exception $e) {
			throw new Exception($e, 1);
		}
	}

	public static function delete($id){
		self::$connect = Connect::getInstance ();
		$stmt = self::$connect->prepare ( "delete from portfolio where id = {$id}" );
		$stmt->execute ();
		self::$connect = null;
		if ($stmt->rowCount () > 0) {
			return true;
		} else {
			return false;
		}
	}

}
