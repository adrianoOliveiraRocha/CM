<?php

session_start();
include_once '../config.php';
include_once MODEL . 'Delivery.php';
include_once DAO . 'DeliveryDAO.php';

if (isset($_GET['key'])) {

	switch ($_GET['key']) {
		case 'newdelivery':
			if (empty($_POST['neighborhood']) || empty($_POST['value'])) {
				header('location:../views/admin/include/error.php?msg=empty');
			} else {
				$delivery = new Delivery();
				$delivery->setNeighborHood($_POST['neighborhood']);
        $delivery->setValue($_POST['value']);
				if (DeliveryDAO::save($delivery)) {
					header('location:../views/admin/index.php?msg=success');
				} else {
					header('location:../views/admin/include/error.php?msg=nosave');
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
        echo $q;
				if (DeliveryDAO::update($q)) {
					header('location:../views/admin/index.php?msg=success');
				} else {
					header('location:../views/admin/include/error.php?msg=nosave');
				}

			} else {
				header('location:../views/admin/edit_delivery.php?id='.$_GET['id']);
			}


			break;

		case 'del':
			$id = $_GET['id'];

			if (DeliveryDAO::delete($id)) {
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
