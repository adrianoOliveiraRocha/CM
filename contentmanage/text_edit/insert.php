<?php

include_once '../config.php';
include_once MODEL . 'W2a.php';

if (isset($_POST['data'])) {
  // $data = str_replace("true", "false", $_POST['data']);
  $data = $_POST['data'];

  if (W2a::getCurrent()) {
    $exists = true;
    insert($data, true);
  } else {
    insert($data, false);
  }

} else {
  echo "Ops! Anything is wrong";
}

function insert($data, $exists){
  $id = 1;
  if ($exists) {//update
    $q = "UPDATE w2a set text = '{$data}' where id = {$id}";

    if (W2a::update($q)) {
      echo "Atualizado com sucesso!";
    } else {
      echo "Problema ao tentar atualizar texto";
    }

  } else {//save
    $q = "INSERT INTO w2a (text) VALUES ('{$data}')";
    if (W2a::insertText($data)) {
      echo "Salvo com sucesso!";
    } else {
      echo "Problem ao tentar salvar o texto";
    }

  }

}

 ?>
