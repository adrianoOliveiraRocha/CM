<?php

include_once '../config.php';
include_once MODEL . 'User.php';

if (isset($_GET['key'])) {

	switch ($_GET['key']) {
		case 'enter':
			session_start();
			if (isset($_SESSION['loged'])) {
				if ($_SESSION['loged'] == true) {
					exit(header('location:../views/admin/index.php'));
				} else {
					exit(header('location:../views/admin/formlogin.php'));
				}
			} else {
				exit(header('location:../views/admin/formlogin.php'));
			}
			break;

		case 'login':
			if (empty($_POST['email']) || empty($_POST['pwd'])) {
				exit(header('location:../views/admin/formlogin.php?msg=empty'));
			} else {
				$id = User::login($_POST['email'], $_POST['pwd']);
				if ($id) {
					session_start();
					$_SESSION['loged'] = true;
					$_SESSION['id'] = $id;
					$_SESSION['email'] = $_POST['email'];
					$_SESSION['pwd'] = $_POST['pwd'];
					exit(header('location:../views/admin/index.php'));
					return $id;
				} else {
					exit(header('location:../views/admin/include/error.php?msg=notfound'));
				}

			}
			break;

		case 'logout':
			session_start();
			session_destroy();
			exit(header('location:../index.php'));
			break;

		case 'edit':
			$email = $_POST['email'];
			$pwd = $_POST['pwd'];
			$id = $_SESSION['id'];
			if ($email == $_SESSION['email'] && $pwd == $_SESSION['pwd']) {
				exit(header('location:../views/admin/index.php?msg=nochange'));
			} else {
				$q = "update user set email = '{$email}', password = '{$pwd}'
				where id = {$id}";
				if (User::update($q)) {
					$_SESSION['email'] = $email;
					$_SESSION['pwd'] = $pwd;
					exit(header('location:../views/admin/index.php?msg=success'));
				}
			}
			break;

		default:
			# code...
			break;
	}
}
