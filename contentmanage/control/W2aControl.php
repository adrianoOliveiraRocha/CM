<?php
session_start();

include_once '../config.php';
include_once MODEL . 'W2a.php';
include_once CONNECT . 'Utils.php';

if (isset($_GET['key'])) {

  switch ($_GET['key']) {
    case 'verify':
      if (W2a::getCurrent()) {
        exit(header("location: ../views/admin/w2a.php?key=1"));
      } else { //there is not current informations
        exit(header("location: ../views/admin/w2a.php?key=0"));
      }
      break;

    case 'save':

      $largeBanner = $_FILES['largeBanner'];
      $img1 = $_FILES['img1'];
      $img2 = $_FILES['img2'];
      $img3 = $_FILES['img3'];

      $w2a = new W2a();

      if ($largeBanner['name']) {
        $w2a->setLargeBanner(Utils::uploadImage($largeBanner));
      } else {
        $w2a->setLargeBanner('not_sended');
      }
      if ($img1['name']) {
        $w2a->setImg1(Utils::uploadImageW2a($img1, '1'));
      } else {
        $w2a->setImg1('not_sended');
      }
      if ($img2['name']) {
        $w2a->setImg2(Utils::uploadImageW2a($img2, '2'));
      } else {
        $w2a->setImg2('not_sended');
      }
      if ($img3['name']) {
        $w2a->setImg3(Utils::uploadImageW2a($img3, '3'));
      } else {
        $w2a->setImg3('not_sended');
      }

      if ($w2a->save()) {
        exit(header('location:../views/admin/index.php?msg=success'));
      } else {
        exit(header('location:../views/admin/include/error.php?msg=nosave'));
      }
      break;

    case 'edit':
      $id = 1;
      $w2a = W2a::getW2a($id);

      $largeBanner = $_FILES['largeBanner'];
      $img1 = $_FILES['img1'];
      $img2 = $_FILES['img2'];
      $img3 = $_FILES['img3'];

      $q = "update w2a ";
      $init = false;

      if ($largeBanner['name']) {
        if ($w2a['large_banner'] != 'not_sended' && $w2a['large_banner'] !== null) {
          unlink(UPLOAD . $w2a['large_banner']);
        }
        $name = Utils::uploadImage($largeBanner);
        $q = $q . "set large_banner = '{$name}'";
        $init = true;
      }

      if ($img1['name']) {
        if ($w2a['img1'] != 'not_sended' && $w2a['img1'] !== null) {
          unlink(UPLOAD . $w2a['img1']);
        }
        $name = Utils::uploadImage($img1);
        if ($init) {
          $q = $q . ", img1 = '{$name}'";
        } else {
          $q = $q . "set img1 = '{$name}'";
          $init = true;
        }

      }

      if ($img2['name']) {
        if ($w2a['img2'] != 'not_sended' && $w2a['img2'] !== null) {
          unlink(UPLOAD . $w2a['img2']);
        }
        $name = Utils::uploadImage($img2);
        if ($init) {
          $q = $q . ", img2 = '{$name}'";
        } else {
          $q = $q . "set img2 = '{$name}'";
          $init = true;
        }
      }

      if ($img3['name']) {
        if ($w2a['img3'] != 'not_sended' && $w2a['img3'] !== null) {
          unlink(UPLOAD . $w2a['img3']);
        }
        $name = Utils::uploadImage($img3);
        if ($init) {
          $q = $q . ", img3 = '{$name}'";
        } else {
          $q = $q . "set img3 = '{$name}'";
          $init = true;
        }
      }

      if ($init) {
        $q = $q . " where id = {$id}";
        if (W2a::update($q)) {
          exit(header('location:../views/admin/index.php?msg=success'));
        } else {
          exit(header('location:../views/admin/include/error.php?msg=nosave'));
        }
      } else {
        exit(header('location:../views/admin/index.php?msg=success'));
      }

      break;

    // case 'delete':
    //
    //   $id = $_REQUEST['id'];
    //   $w2a = W2a::getW2a($id);
    //
    //   if (W2a::delete($id)){
    //
    //     unlink(UPLOAD . $w2a['large_banner']);
    //     unlink(UPLOAD . $w2a['img1']);
    //     unlink(UPLOAD . $w2a['img2']);
    //     unlink(UPLOAD . $w2a['img3']);
    //
    //     exit(header('location:../views/admin/index.php?msg=success'));
    //
    //   } else {
    //     exit(header('location:../views/admin/include/error.php?msg=nodel'));
    //   }
    //
    //   break;

    case 'text':
      exit(header("location: ../text_edit/index.php"));
      break;

    case 'inserttext':
      echo "I arrived";
      break;

    default:
      echo "code is not recognized";
      break;
  }

}
