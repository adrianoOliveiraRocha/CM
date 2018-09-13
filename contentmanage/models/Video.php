<?php

include_once CONNECT . 'connect.php';

class Video
{
	private static $connect;

	private $id;
	private $description;
	private $url;

	public function setId($id){
		$this->id = $id;
	}
	public function getId(){
		return $this->id;
	}

	public function setDescription($description){
		$this->description = $description;
	}
	public function getDescription()
	{
		return $this->description;
	}

	public function setUrl($url){
		$this->url = str_replace(' ', '', $url);
	}
	public function getUrl(){
		return $this->url;
	}

	public function save()
	{
		$statement = "insert into video (description, url) 
		values('{$this->getDescription()}', '{$this->getUrl()}')";
		self::$connect = Connect::getInstance();
		$stmt = self::$connect->prepare ( $statement );
		$stmt->execute ();
		if ($stmt->rowCount () > 0) {
			return true;
		} else {
			return false;
		}
	}

	public static function getAllVideos(){
		self::$connect = Connect::getInstance ();
		$response = self::$connect->query ( "select * from video" );
		$videos = $response->fetchAll ( PDO::FETCH_ASSOC );
		self::$connect = null;
		return $videos;
	}

	public static function getThisVideo($id){
		self::$connect = Connect::getInstance ();
		$q = "select * from video where id = :id";
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
			return false;
		}
	}

	public static function delete($id){
		self::$connect = Connect::getInstance ();
		$stmt = self::$connect->prepare ( "delete from video where id = {$id}" );
		$stmt->execute ();
		self::$connect = null;
		if ($stmt->rowCount () > 0) {
			return true;
		} else {
			return false;
		}
	}

}
