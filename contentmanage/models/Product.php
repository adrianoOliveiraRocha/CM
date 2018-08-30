<?php


class Product
{
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

}
