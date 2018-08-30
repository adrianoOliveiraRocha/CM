<!DOCTYPE html>
<html>
<head>
	<title>Áreas de Entrega</title>
	<?php include_once 'include/links.php' ?>
	<!-- datatable -->
	<script type="text/javascript" language="javascript" class="init">
	  $(document).ready(function() {
	    $('#table').DataTable({
	      "language": {
	            "lengthMenu": "Exibindo _MENU_ registros por página",
	            "zeroRecords": "Nenhum registro encontrado - desculpe",
	            "info": "Exibindo a página _PAGE_ de _PAGES_",
	            "infoEmpty": "Sem registros disponíveis",
	            "infoFiltered": "(filtered from _MAX_ total records)"
	        },
	        "scrollX": true
	    });
	  } );
	</script>
</head>
<body>
	<?php include_once 'include/menu.php' ?>

	<?php
		include_once '../../config.php';
		include_once DAO . 'DeliveryDAO.php';

		$deliveries = DeliveryDAO::getAllDeliveries();

	?>

	<div class="container-fluid">
		<div class="panel-body"
			style="width: 70%; margin-left: auto;
			margin-right: auto; margin-top: 5%;">
			<h3>Área Administrativa -> Exibir Áreas de Entrega</h3>

			<?php if ($deliveries) {
			?>

			<table id="table" class="display">
				<thead>
					<tr>
						<th>ID</th>
						<th>Bairro</th>
            <th>Valor R$</th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach ($deliveries as $delivery) {
						echo "
						<tr>
							<td>
								<a href='../../control/DeliveryControl.php?key=editdelivery&id={$delivery ['id']}'
								 title='Editar área'>
									{$delivery ['id']}
								</a>
							</td>
							<td>{$delivery ['neighborhood']}</td>
              <td>{$delivery ['value']}</td>
						</tr>
						";
					}
					?>

				</tbody>
			</table>

			<?php
			} ?>

		</div>
	</div>

</body>

</html>
