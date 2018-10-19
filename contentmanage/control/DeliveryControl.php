<?php

session_start();
include_once '../config.php';
include_once MODEL . 'Delivery.php';

if (isset($_GET['key'])) {

	switch ($_GET['key']) {
		case 'newdelivery':
			if (empty($_POST['neighborhood']) || empty($_POST['value'])) {
				header('location:../views/admin/include/error.php?msg=empty');
			} else {
				$delivery = new Delivery();
				$delivery->setNeighborHood($_POST['neighborhood']);
        $delivery->setValue($_POST['value']);
				if ($delivery->save()) {
					exit(header('location:../views/admin/index.php?msg=success'));
				} else {
					exit(header('location:../views/admin/include/error.php?msg=nosave'));
				}
			}
			break;

		case 'editdelivery':

			if ($_POST['neighborhood']) {
				$id = $_POST['id'];
				$neighborhood = $_POST['neighborhood'];
       				$value = $_POST['value'];
				$q = "update delivery set neighborhood = '{$neighborhood}',
        			value ='{$value}' where id = $id";
        
				if (Delivery::update($q)) {
					exit(header('location:../views/admin/index.php?msg=success'));
				} else {
					exit(header('location:../views/admin/include/error.php?msg=nosave'));
				}

			} else {
				exit(header('location:../views/admin/edit_delivery.php?id='.$_GET['id']));
			}


			break;

		case 'del':
			$id = $_GET['id'];

			if (Delivery::delete($id)) {
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
