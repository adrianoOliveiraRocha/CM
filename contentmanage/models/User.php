<?php


class User {

	private $id;
	private $username;
	private $email;
	private $password;

	public function setId($id) {
		$this->id = $id;
	}

	public function getId() {
		return $this->id;
	}
	public function setName($nome) {
		$this->nome = $nome;
	}
	public function getName() {
		return $this->nome;
	}
	public function setEmail($email) {
		if (filter_var ( $email, FILTER_VALIDATE_EMAIL ) == false) {
			return false;
			exit ();
		} else {
			$this->email = $email;
		}
	}
	public function getEmail($email) {
		return $this->email;
	}
	public function setPassword($password) {
		$this->password = password_hash ( $senha, PASSWORD_DEFAULT );
	}
	public function getPassword() {
		return $this->password;
	}

	public static function login($email, $psw) {
		return UserDao::userValidation($email, $psw);
	}
}
