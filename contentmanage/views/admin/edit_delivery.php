<!DOCTYPE html>
<html>
<head>
	<title>Editar Área</title>
	<?php include_once 'include/links.php' ?>
</head>
<body>
	<?php include_once 'include/menu.php' ?>

	<?php
		include_once '../../config.php';
		include_once MODEL . 'Delivery.php';
		$delivery = Delivery::getThisDelivery($_GET['id']);
	?>

	<div class="container-fluid">
		<div class="panel-body"
			style="width: 50%; margin-left: auto;
			margin-right: auto; margin-top: 5%;">
			<h3>Área Administrativa -> Editar Área de Entrega</h3>

			<form action="../../control/DeliveryControl.php?key=editdelivery"
			method="POST">
				<?php
					echo "
          <input type= 'hidden' name='id'
						value='{$delivery['id']}'>

					<div class='form-group'>
						<label>Bairro</label>
						<input class='form-control' name='neighborhood'
						value='{$delivery['neighborhood']}'>
					</div>
          <div class='form-group'>
						<label>Valor R$</label>
						<input class='form-control' name='value'
						value='{$delivery['value']}'>
					</div>

					";
				?>
				<button type="submit" class="btn btn-primary">Editar</button>

				<?php
				echo "
				<a type='button' class='btn btn-danger' style='color: white'
        href='../../control/DeliveryControl.php?key=del&id={$delivery['id']}'>
        	Deletar
				</a>
				";
				?>

			</form>

		</div>
	</div>

</body>

</html>
