<!DOCTYPE html>
<html>
<head>
	<title>Nova Categoria</title>
	<?php include_once 'include/links.php' ?>
</head>
<body>
	<?php include_once 'include/menu.php' ?>

	<div class="container-fluid">
		<div class="panel-body"
			style="width: 50%; margin-left: auto;
			margin-right: auto; margin-top: 5%;">
			<h3>Área Administrativa -> Nova Categoria</h3>
			<form action="../../control/CategoryControl.php?key=newcategory" 
			method="POST">
			
				<div class="form-group">
					<label>Nome da Categoria:</label>
					<input class="form-control" name="category_name">
				</div>

				<button type="submit" class="btn btn-primary">Salvar</button>
			</form>

		</div>
	</div>

</body>

</html>