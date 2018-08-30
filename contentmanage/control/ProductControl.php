<?php
session_start();

include_once '../config.php';
include_once MODEL . 'Product.php';
include_once DAO . 'ProductDAO.php';
include_once CONNECT . 'Utils.php';

if (isset($_GET['key'])) {

	switch ($_GET['key']) {
		case 'newproduct':
			$description = $_POST['description'];
			$value = $_POST['value'];
			$category = $_POST['category'];
			$image = $_FILES['image'];

			$imageName = Utils::uploadImage($image);

			$product = new Product();
			$product->setCategoryId($category);
			$product->setValue($value);
			$product->setDescription($description);
			$product->setImage($imageName);

			if (ProductDAO::save($product)) {
				header('location:../views/admin/index.php?msg=success');
			} else {
				header('location:../views/admin/include/error.php?msg=nosave');
			}

			break;

		case 'editcategory':
			if ($_POST['category_name']) {
				$id = $_POST['id'];
				$name = $_POST['category_name'];
				$q = "update category set name = '$name' where id = $id";
				if (CategoryDAO::update($q)) {
					header('location:../views/admin/index.php?msg=success');
				} else {
					header('location:../views/admin/include/error.php?msg=nosave');
				}
			} else {
				header('location:../views/admin/edit_category.php?id='.$_GET['id']);
			}
			break;

		default:
			# code...
			break;
	}
}
