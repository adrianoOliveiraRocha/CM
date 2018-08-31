<?php
include_once CONNECT . 'connect.php';

class Category
{
	private static $connect;

	private $id;
	private $name;

	public function setId($id)
	{
		$this->id = $id;
	}
	public function getId()
	{
		return $this->id;
	}
	public function setName($name)
	{
		$this->name = $name;
	}
	public function getName()
	{
		return $this->name;
	}

	public function save()
	{
		$statement = "insert into category (name) values('{$this->getName()}')";
		self::$connect = Connect::getInstance();
		$stmt = self::$connect->prepare ( $statement );
		$stmt->execute ();
		if ($stmt->rowCount () > 0) {
			return true;
		} else {
			return false;
		}
	}

	public static function getAllCategories($offset=0)
	{
		self::$connect = Connect::getInstance ();
		$response = self::$connect->query ( "select * from category" );
		$categories = $response->fetchAll ( PDO::FETCH_ASSOC );
		self::$connect = null;
		return $categories;
	}

	public static function getThisCategory($id) {
		self::$connect = Connect::getInstance ();
		$q = "select * from category where id = :id";
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
		$stmt = self::$connect->prepare ( "delete from category where id = {$id}" );
		$stmt->execute ();
		self::$connect = null;
		if ($stmt->rowCount () > 0) {
			return true;
		} else {
			return false;
		}
	}

	public static function howManyProducts($id) {
		$q = " select count(product.id) as howMany from category, product
		where category.id = product.category_id and category.id = {$id}";
		self::$connect = Connect::getInstance ();
		$query = self::$connect->query ( $q );
		$info = $query->fetch ( PDO::FETCH_ASSOC );
		self::$connect = null;
		return $info ['howMany'];
	}
}
