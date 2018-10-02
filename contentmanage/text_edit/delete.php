<?php

include_once '../config.php';
include_once MODEL . 'W2a.php';

$q = "update w2a set text = '' where id = 1";

if (W2A::update($q)) {
  exit(header("location:index.php"));
} else {
  echo "Problema ao tentar deletar";
}

?>
