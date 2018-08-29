<?php


class Category
{
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
		if (CategoryDAO::save($this)) {
			return true;
		} else {
			return false;
		}
	}
	public static function update($name, $id) {
		$q = "update category set name = '{$name}' where idcategory = {$id}";
		if (CategoryDAO::update($q)) {
			return true;
		} else {
			return false;
		}
	}
	public static function delete($id) {
		if (CategoryDAO::delete($id)) {
			return true;
		} else {
			return false;
		}
	}
}
