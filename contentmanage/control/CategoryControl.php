<?php

session_start();
include_once '../config.php';
include_once MODEL . 'Category.php';
include_once DAO . 'CategoryDAO.php';

if (isset($_GET['key'])) {

	switch ($_GET['key']) {
		case 'newcategory':
			if (empty($_POST['category_name'])) {
				header('location:../views/admin/include/error.php?msg=empty');
			} else {
				$category = new Category();
				$category->setName($_POST['category_name']);
				if ($category->save()) {
					header('location:../views/admin/index.php?msg=success');
				} else {
					header('location:../views/admin/include/error.php?msg=nosave');
				}
			}
			break;

		case 'editcategory':
			header('location:../views/admin/edit_category.php?id='.$_GET['id']);
			break;
			
		default:
			# code...
			break;
	}
}