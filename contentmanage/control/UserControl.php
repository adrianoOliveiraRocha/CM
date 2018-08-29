<?php

session_start();
include_once '../config.php';
include_once MODEL . 'User.php';
include_once DAO . 'UserDAO.php';

if (isset($_GET['key'])) {

	switch ($_GET['key']) {
		case 'enter':
			if (isset($_SESSION['loged'])) {
				if ($_SESSION['loged'] == true) {
					header('location:../views/admin/index.php');
				} else {
					header('location:../views/admin/formlogin.php');
				}
			} else {
				header('location:../views/admin/formlogin.php');
			}
			break;

		case 'login':
			if (empty($_POST['email']) || empty($_POST['pwd'])) {
				header('location:../views/admin/formlogin.php?msg=empty');
			} else {
				$id = User::login($_POST['email'], $_POST['pwd']);
				if ($id) {
					$_SESSION['loged'] = true;
					$_SESSION['id'] = $id;
					$_SESSION['email'] = $_POST['email'];
					$_SESSION['pwd'] = $_POST['pwd'];
					header('location:../views/admin/index.php');
					return $id;
				} else {
					header('location:../views/admin/include/error.php?msg=notfound');
				}
			}
			break;

		case 'logout':
			session_destroy();
			header('location:../index.php');
			break;

		default:
			# code...
			break;
	}
}