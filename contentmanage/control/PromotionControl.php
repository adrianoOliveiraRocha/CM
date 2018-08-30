<?php
session_start();

include_once '../config.php';
include_once MODEL . 'Promotion.php';
include_once DAO . 'PromotionDAO.php';
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

			if (PromotionDAO::save($promotion)) {
				header('location:../views/admin/index.php?msg=success');
			} else {
				header('location:../views/admin/include/error.php?msg=nosave');
			}

			break;

		case 'edit':

			if ($_POST['description']) {

				$idPromotion = $_POST['id'];
				$description = $_POST['description'];
				$image = $_FILES['image'];

				$q = "";
				if (!empty($image['name'])) { //image sended
					$promotion = PromotionDAO::getThisPromotion($idPromotion);
					$currentImageName = $promotion['image'];
					unlink(UPLOAD . $currentImageName);
					$imageName = Utils::uploadImage($image);
					$q = "update promotion set description = '{$description}',
					image = '{$imageName}' where id = {$idPromotion}";
				} else {
					$q = "update promotion set description = '{$description}'
          where id = {$idPromotion}";
				}
        echo $q;
				if (PromotionDAO::update($q)) {
					header('location:../views/admin/index.php?msg=success');
				} else {
					header('location:../views/admin/include/error.php?msg=nosave');
				}

			} else {
				header('location:../views/admin/edit_promotion.php?id='.$_GET['id']);
			}
			break;

		case 'del':
			$idPromotion = $_GET['id'];
			$promotion = PromotionDAO::getThisPromotion($idPromotion);
			$currentImageName = $promotion['image'];
      unlink(UPLOAD . $currentImageName);
      if (PromotionDAO::delete($idPromotion)) {
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
