<?php
session_start();

include_once '../config.php';
include_once MODEL . 'Promotion.php';
include_once CONNECT . 'Utils.php';

if (isset($_GET['key'])) {

	switch ($_GET['key']) {
		case 'newpromotion':
			$description = $_POST['description'];
			$image = $_FILES['image'];

			$imageName = Utils::uploadImage($image);

			$promotion = new Promotion();
			$promotion->setDescription($description);
			$promotion->setImage($imageName);

			if ($promotion->save()) {
				exit(header('location:../views/admin/index.php?msg=success'));
			} else {
				exit(header('location:../views/admin/include/error.php?msg=nosave'));
			}

			break;

		case 'edit':

			if ($_POST['description']) {

				$idPromotion = $_POST['id'];
				$description = $_POST['description'];
				$image = $_FILES['image'];

				$q = "";
				if (!empty($image['name'])) { //image sended
					$promotion = Promotion::getThisPromotion($idPromotion);
					$currentImageName = $promotion['image'];
					unlink(UPLOAD . $currentImageName);
					$imageName = Utils::uploadImage($image);
					$q = "update promotion set description = '{$description}',
					image = '{$imageName}' where id = {$idPromotion}";
				} else {
					$q = "update promotion set description = '{$description}'
          				where id = {$idPromotion}";
				}
       
				if (Promotion::update($q)) {
					exit(header('location:../views/admin/index.php?msg=success'));
				} else {
					exit(header('location:../views/admin/include/error.php?msg=nosave'));
				}

			} else {
				exit(header('location:../views/admin/edit_promotion.php?id='.$_GET['id']));
			}
			break;

		case 'del':
			$idPromotion = $_GET['id'];
			$promotion = Promotion::getThisPromotion($idPromotion);
			$currentImageName = $promotion['image'];
      unlink(UPLOAD . $currentImageName);
      if (Promotion::delete($idPromotion)) {
				exit(header('location:../views/admin/index.php?msg=success'));
			} else {
				exit(header('location:../views/admin/include/error.php?msg=nodel'));
			}
			break;

		case 'allpromotions':
			// code...
			break;

		default:
			# code...
			break;
	}
}
