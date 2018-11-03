<?php
session_start();

include_once '../config.php';
include_once MODEL . 'Portifoli.php';
include_once CONNECT . 'Utils.php';

if (isset($_GET['key'])) {

	switch ($_GET['key']) {
		case 'newbanner':
			$title = $_POST['title'];
			$description = $_POST['description'];
			$image = $_FILES['image'];

			$imageName = Utils::uploadImage($image);

			$portifoli = new Portifoli();
			$portifoli->setTitle($title);
			$portifoli->setDescription($description);
			$portifoli->setImage($imageName);

			if ($portifoli->save()) {
				exit(header('location:../views/admin/index.php?msg=success'));
			} else {
				exit(header('location:../views/admin/include/error.php?msg=nosave'));
			}

			break;

		case 'edit':

			if (isset($_POST['description'])) {

				$idBanner = $_POST['id'];
				$title = $_POST['title'];
				$description = $_POST['description'];
				$image = $_FILES['image'];

				$q = "";
				if (!empty($image['name'])) { //image sended
					$banner = Portifoli::getThisBanner($idBanner);
					$currentImageName = $banner['image'];
					unlink(UPLOAD . $currentImageName);
					$imageName = Utils::uploadImage($image);
					$q = "update portifoli set title = '{$title}',
					description = '{$description}', 
					image = '{$imageName}' where id = {$idBanner}";
				} else {
					$q = "update portifoli set title = '{$title}', description = '{$description}'
          				where id = {$idBanner}";
				}
				echo $q;
				if (Portifoli::update($q)) {
					exit(header('location:../views/admin/index.php?msg=success'));
				} else {
					exit(header('location:../views/admin/include/error.php?msg=nosave'));
				}

			} else {
				exit(header('location:../views/admin/edit_portifoli.php?id='.$_GET['id']));
			}
			break;

		case 'del':
			$idBanner = $_GET['id'];
			$banner = Banner::getThisBanner($idBanner);
			$currentImageName = $banner['image'];
      unlink(UPLOAD . $currentImageName);
      if (Banner::delete($idBanner)) {
				exit(header('location:../views/admin/index.php?msg=success'));
			} else {
				exit(header('location:../views/admin/include/error.php?msg=nodel'));
			}
			break;

		default:
			echo "We are in default case";
			break;

		case 'test':
			echo "ok";
	}
}
