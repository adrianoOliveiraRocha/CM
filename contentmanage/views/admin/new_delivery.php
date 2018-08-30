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
			<h3>Área Administrativa -> Nova Área de Entrega</h3>
      
			<form action="../../control/DeliveryControl.php?key=newdelivery"
			method="POST">

				<div class="form-group">
					<label>Bairro:</label>
					<input class="form-control" name="neighborhood">
				</div>

        <div class="form-group">
					<label>Valor R$:</label>
					<input class="form-control" name="value">
				</div>

				<button type="submit" class="btn btn-primary">Salvar</button>
			</form>

		</div>
	</div>

</body>

</html>
