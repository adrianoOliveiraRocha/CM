<!DOCTYPE html>
<html>
<head>
	<title>Nova Categoria</title>
	<?php include_once 'include/links.php' ?>
</head>
<body>
	<?php include_once 'include/menu.php' ?>

	<?php
		include_once '../config.php';
	?>

	<div class="container-fluid">
		<div class="panel-body"
			style="width: 50%; margin-left: auto;
			margin-right: auto; margin-top: 5%;">
			<h3>Área Administrativa -> Editar Categoria</h3>
			<form action="../../control/CategoryControl.php?key=editcategory" 
			method="POST">
				<div class="form-group">
					<label>Nome da Categoria:</label>
					<input class="form-control" name="category_name"
					value="Test">
				</div>

				<button type="submit" class="btn btn-primary">Salvar</button>
			</form>

		</div>
	</div>

</body>

</html>