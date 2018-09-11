<?php
include_once CONNECT . 'connect.php';

class Delivery
{
	private static $connect;

	private $id;
	private $neighborhood;
  private $value;

	public function setId($id)
	{
		$this->id = $id;
	}
	public function getId()
	{
		return $this->id;
	}

	public function setNeighborHood($neighborhood)
	{
		$this->neighborhood = $neighborhood;
	}
	public function getNeighborHood()
	{
		return $this->neighborhood;
	}

  public function setValue($value)
	{
		$this->value = $value;
	}
	public function getValue()
	{
		return $this->value;
	}

	public function save()
	{
		$statement = "insert into delivery (neighborhood, value)
    values('{$this->getNeighborHood()}', '{$this->getValue()}')";
		self::$connect = Connect::getInstance();
		$stmt = self::$connect->prepare ( $statement );
		$stmt->execute ();
		if ($stmt->rowCount () > 0) {
			return true;
		} else {
			return false;
		}
	}

	public static function getAllDeliveries()
	{
		self::$connect = Connect::getInstance ();
		$response = self::$connect->query ( "select * from delivery" );
		$deliveries = $response->fetchAll ( PDO::FETCH_ASSOC );
		self::$connect = null;
		return $deliveries;
	}

	public static function getThisDelivery($id) {
		self::$connect = Connect::getInstance ();
		$q = "select * from delivery where id = :id";
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

	public static function delete($id) {
		self::$connect = Connect::getInstance ();
		$stmt = self::$connect->prepare ( "delete from delivery where id = {$id}" );
		$stmt->execute ();
		self::$connect = null;
		if ($stmt->rowCount () > 0) {
			return true;
		} else {
			return false;
		}
	}

}
