<?php

$name = $_POST['name'] ?? "nome";
$email = $_POST['email'] ?? "email";
$phone = $_POST['phone'] ?? "Não enviado";
$message = $_POST['message'] ?? "mensagem";

$to = "graficarapida@grafky.com.br";
//$to = "vendas@atrativapropaganda.com.br";
$subject = "Contato realizado por cliente";

$text = "Enviado por " . $name;
$text .= "\nEmail: " . $email;
$text .= "\nTelefone: " . $phone;
$text .= "\nMensagem: " . $message;

$resp = mail($to, $subject, $text);

if ($resp) {
	exit(header("location:../views/core/contato.php?sended#divform"));
} else {
	exit(header("location:../views/core/contato.php"));
}