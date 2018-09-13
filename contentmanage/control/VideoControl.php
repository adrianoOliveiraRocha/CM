<?php

session_start();
include_once '../config.php';
include_once MODEL . 'Video.php';

if (isset($_GET['key'])) {

	switch ($_GET['key']) {
		case 'newvideo':
			$description = $_REQUEST['video_description'];
			$url = $_REQUEST['video_url'];
			$video = new Video();
			$video->setDescription($description);
			$video->setUrl($url);
			if ($video->save()) {
				exit(header("location:../views/admin/index.php?msg=success"));
			} else {
				exit(header("location:../views/admin/include/error.php?msg=nosave"));
			}
			break;

		case 'editvideo':
			if (isset($_POST['url'])) {
				$id = $_POST['id'];
				$description = $_POST['description'];
				$url = $_POST['url'];
				$q = "update video set description = '$description', url = '$url' where id = $id";
				if (Video::update($q)) {
					exit(header('location:../views/admin/index.php?msg=success'));
				} else {
					exit(header('location:../views/admin/include/error.php?msg=nosave'));
				}
			} else {
				exit(header('location:../views/admin/edit_video.php?id='.$_GET['id']));
			}

			break;

		case 'del':				
				if (Video::delete($_REQUEST['id'])) {
					exit(header('location:../views/admin/index.php?msg=success'));
				} else {
					exit(header('location:../views/admin/include/error.php?msg=nodel'));	
				}
			break;

		default:
			# code...
			break;
	}
}
