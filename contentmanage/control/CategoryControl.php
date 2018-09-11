<?php

session_start();
include_once '../config.php';
include_once MODEL . 'Category.php';
include_once MODEL . 'Product.php';

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
			if ($_POST['category_name']) {
				$id = $_POST['id'];
				$name = $_POST['category_name'];
				$q = "update category set name = '$name' where id = $id";
				if (Category::update($q)) {
					header('location:../views/admin/index.php?msg=success');
				} else {
					header('location:../views/admin/include/error.php?msg=nosave');
				}
			} else {
				header('location:../views/admin/edit_category.php?id='.$_GET['id']);
			}
			break;

		case 'del':
			$id = $_GET['id'];
			$howMany = Category::howManyProducts($id);
			if ($howMany > 0) { //there are products in this category

				$products = Product::getAllProductsThisCategory($id);
				foreach ($products as $product) {
					unlink(UPLOAD . $product['image']);
				}

				$q = "delete from product where category_id = {$id}";
				Product::update($q);

			}

			if (Category::delete($id)) {
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
