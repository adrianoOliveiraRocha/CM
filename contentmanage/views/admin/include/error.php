<!DOCTYPE html>
<html>
<head>
	<title>Erro</title>
	<?php include_once 'links.php'; ?>
</head>
<body>

	<?php

	if (isset($_GET['msg'])) {
		if ($_GET['msg'] == 'forbidden') {
			echo "<div class='alert alert-danger' style='margin: 5%;'>
				  <strong>Erro!</strong> Você não tem permissão para acessar essa página.
				  <a type='button' class='btn btn-warning'
				 style='margin-left: auto; margin-right: auto;'
				 href='../../../index.php'>Voltar</a>
				</div>";

		} elseif ($_GET['msg'] == 'notfound') {
			echo "<div class='alert alert-danger' style='margin: 5%;'>
				  <strong>Erro!</strong> Usuário não encontrado.
				  <a type='button' class='btn btn-warning'
				 style='margin-left: auto; margin-right: auto;'
				 href='../../../index.php'>Voltar</a>
				</div>";

		} elseif ($_GET['msg'] == 'empty') {
			echo "<div class='alert alert-danger' style='margin: 5%;'>
				  <strong>Erro!</strong> Campo vazio.
				  <div class='panel'
				style='width: 50%;
				margin-left: auto;
				margin-right: auto;'>
				<a type='button' class='btn btn-warning'
				 style='margin-left: auto; margin-right: auto;''
				 href='../index.php'>Voltar</a>
				</div>";

		} elseif ($_GET['msg'] == 'prod_empty') {
			echo "<div class='alert alert-danger' style='margin: 5%;'>
				  <strong>Erro!</strong> Por favor, preencha todas as informações
				  do produto.
				  <div class='panel'
				style='width: 50%;
				margin-left: auto;
				margin-right: auto;'>
				<a type='button' class='btn btn-warning'
				 style='margin-left: auto; margin-right: auto;''
				 href='../new_product.php'>Voltar</a>
				</div>";

		} elseif ($_GET['msg'] == 'nosave') {
			echo "<div class='alert alert-danger' style='margin: 5%;'>
				  <strong>Erro!</strong> Não foi possível realizar esta operação.
				  <div class='panel'
				style='width: 50%;
				margin-left: auto;
				margin-right: auto;'>
				<a type='button' class='btn btn-warning'
				 style='margin-left: auto; margin-right: auto;''
				 href='../index.php'>Voltar</a>
				</div>";

		} elseif ($_GET['msg'] == 'nodel') {
			echo "<div class='alert alert-danger' style='margin: 5%;'>
				  <strong>Erro!</strong> Não foi possível deletar esta informação.
				  <div class='panel'
				style='width: 50%;
				margin-left: auto;
				margin-right: auto;'>
				<a type='button' class='btn btn-warning'
				 style='margin-left: auto; margin-right: auto;''
				 href='../index.php'>Voltar</a>
				</div>";

		}

	}

	?>

</body>
</html>
