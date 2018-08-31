<?php

include_once CONNECT . 'connect.php';
define( 'LIMIT', 6 );

class Product
{
	private static $connect;

	private $id;
	private $categoryId;
	private $value;
	private $description;
	private $image;

	public function setId($id){
		$this->id = $id;
	}
	public function getId(){
		return $this->id;
	}

	public function setCategoryId($categoryId){
		$this->categoryId = $categoryId;
	}
	public function getCategoryId(){
		return $this->categoryId;
	}

	public function setValue($value){
		$this->value = $value;
	}
	public function getValue(){
		return $this->value;
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

	public static function getGroupSixProducts($offset=0, $cat=0)	{
		$q = null;
		if ($offset == 0) {
			if ($cat > 0) {
				$q = "select * from product where category_id = {$cat} limit " . LIMIT;
			} else {
				$q = "select * from product limit " . LIMIT;
			}

		} else {
			if ($cat > 0) {
				$q = "select * from product where category_id = {$cat} limit ". LIMIT . " offset {$offset}";
			} else {
				$q = "select * from product limit ". LIMIT . " offset {$offset}";
			}

		}

		self::$connect = Connect::getInstance ();
		$response = self::$connect->query ( $q );
		$products = $response->fetchAll ( PDO::FETCH_ASSOC );
		self::$connect = null;
		return $products;
	}

	public function save()	{
		$statement = "insert into product (category_id, value, description, image)
    values({$this->getCategoryId()}, '{$this->getValue()}',
    '{$this->getDescription()}', '{$this->getImage()}')";

		self::$connect = Connect::getInstance();
		$stmt = self::$connect->prepare ( $statement );
		$stmt->execute ();
		if ($stmt->rowCount () > 0) {
			return true;
		} else {
			return false;
		}

	}

	public static function getAllProducts() {
		self::$connect = Connect::getInstance ();
		$response = self::$connect->query ( "select * from product" );
		$products = $response->fetchAll ( PDO::FETCH_ASSOC );
		self::$connect = null;
		return $products;
	}

	public static function getThisProduct($id) {
		self::$connect = Connect::getInstance ();
		$q = "select * from product where id = :id";
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
		$stmt = self::$connect->prepare ( "delete from product where id = {$id}" );
		$stmt->execute ();
		self::$connect = null;
		if ($stmt->rowCount () > 0) {
			return true;
		} else {
			return false;
		}
	}

	public static function getNPages($cat){
		$q = null;
		if ($cat > 0) {
			$q = "select count(*) as nproducts from product where category_id = {$cat}";
		} else {
			$q = "select count(*) as nproducts from product";
		}

		self::$connect = Connect::getInstance ();
		$query = self::$connect->query($q);
		$info = $query->fetch(PDO::FETCH_ASSOC);
		self::$connect = null;
		$nProducts = (int) $info['nproducts'];
		$nPages = 0;
		if ($nProducts % LIMIT == 0) {
			$nPages = $nProducts / LIMIT;
		} else {
			$nPages = $nProducts / LIMIT + 1;
		}
		return floor($nPages);
	}

}
