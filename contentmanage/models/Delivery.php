<?php


class Delivery
{
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

}
