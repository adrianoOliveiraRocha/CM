<?php
include_once CONNECT . 'connect.php';


class W2a
{
	private static $connect;

	private $text = null;
	private $largeBanner = null;
	private $img1 = null;
	private $img2 = null;
	private $img3 = null;

	public function setText($text){
		$this->text = $text;
	}
	public function getText(){
		return $this->text;
	}

	public function setLargeBanner($largeBanner){
		$this->largeBanner = $largeBanner;
	}
	public function getLargeBanner(){
		return $this->largeBanner;
	}

	public function setImg1($img){
		$this->img1 = $img;
	}
	public function getImg1(){
		return $this->img1;
	}

	public function setImg2($img){
		$this->img2 = $img;
	}
	public function getImg2(){
		return $this->img2;
	}

	public function setImg3($img){
		$this->img3 = $img;
	}
	public function getImg3(){
		return $this->img3;
	}

	public function save()
	{

		$statement = "insert into w2a (text, large_banner, img1, img2, img3)
    values('{$this->getText()}', '{$this->getLargeBanner()}', ".
    "'{$this->getImg1()}', '{$this->getImg2()}', '{$this->getImg3()}')";

		self::$connect = Connect::getInstance();
		$stmt = self::$connect->prepare ( $statement );
		$stmt->execute ();
		if ($stmt->rowCount () > 0) {
			return true;
		} else {
			return false;
		}

	}

	public static function getCurrent(){

		self::$connect = Connect::getInstance ();
		$q = "select * from w2a";
		$statement = self::$connect->prepare ( $q );
		$statement->execute();
		self::$connect = null;

		if ($statement->rowCount() > 0) {
			$info = $statement->fetch(PDO::FETCH_ASSOC);
			return $info;
		} else {
			return false;
		}
	}

	public static function getW2a($id){

		self::$connect = Connect::getInstance ();
		$q = "select * from w2a where id = {$id}";
		$statement = self::$connect->prepare ( $q );
		$statement->execute();
		self::$connect = null;

		if ($statement->rowCount() > 0) {
			$info = $statement->fetch(PDO::FETCH_ASSOC);
			return $info;
		} else {
			return false;
		}
	}

	public static function delete($id) {
		self::$connect = Connect::getInstance ();
		$stmt = self::$connect->prepare ( "delete from w2a" );
		$stmt->execute ();
		self::$connect = null;
		if ($stmt->rowCount () > 0) {
			return true;
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
			echo $e;
			return false;
		}
	}

}
