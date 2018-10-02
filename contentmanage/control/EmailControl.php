<?php

$name = $_POST['name'] ?? "nome";
$email = $_POST['email'] ?? "email";
$phone = $_POST['phone'] ?? "Não enviado";
$message = $_POST['message'] ?? "mensagem";

$to = "adriano.qwe32@gmail.com";
$subject = "Mensagem do Site";
$text = "Enviado por {$name}\nEmail: {$email}\nTelefone: {$phone}\nMensagem: {$message}";

$resp = mail($to, $subject, $text);

if ($resp) {
	exit(header("location:../views/core/contato.php?emailsended=true"));
} else {
	echo "ops!!";
}

