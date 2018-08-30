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

		case 'edit':
			if ($_POST['description']) {
				$idProduct = $_POST['id'];
				$description = $_POST['description'];
				$idCategory = $_POST['category'];
				$value = $_POST['value'];
				$image = $_FILES['image'];
				$q = "";
				if (!empty($image['name'])) { //image sended
					$product = ProductDAO::getThisProduct($idProduct);
					$currentImageName = $product['image'];
					unlink(UPLOAD . $currentImageName);
					$imageName = Utils::uploadImage($image);
					$q = "update product set description = '{$description}',
					category_id = {$idCategory}, image = '{$imageName}',
					value='{$value}' where id = {$idProduct}";
				} else {
					$q = "update product set description = '{$description}',
					category_id = {$idCategory}, value='{$value}'
					where id = {$idProduct}";
				}
				if (ProductDAO::update($q)) {
					header('location:../views/admin/index.php?msg=success');
				} else {
					header('location:../views/admin/include/error.php?msg=nosave');
				}

			} else {
				header('location:../views/admin/edit_product.php?id='.$_GET['id']);
			}
			break;

		case 'del':
			$idProduct = $_GET['id'];
			$product = ProductDAO::getThisProduct($idProduct);
			$currentImageName = $product['image'];
			unlink(UPLOAD . $currentImageName);
			if (ProductDAO::delete($idProduct)) {
				header('location:../views/admin/index.php?msg=success');
			} else {
				header('location:../views/admin/include/error.php?msg=nodel');
			}
			break;

		default:
			# code...
			break;
	}
}
