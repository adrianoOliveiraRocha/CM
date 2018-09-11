<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Admin</title>
	<?php include_once 'include/links.php'; ?>

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

<?php include_once 'include/menu.php'; ?>

<div class="container-fluid">

	<div class="panel-body"
		style="width: 70%; margin-left: auto;
		margin-right: auto; margin-top: 5%;">
		<?php

		if (isset($_GET['msg'])) {
			switch ($_GET['msg']) {
				case 'success':
					echo '<div class="alert alert-success alert-dismissible">
					  <button type="button" class="close" data-dismiss="alert">&times;</button>
					  <strong>Sucesso!</strong> Operação realizada com sucesso.
					</div>';
					break;

					case 'nochange':
						echo '<div class="alert alert-warning alert-dismissible">
						  <button type="button" class="close" data-dismiss="alert">&times;</button>
						  <strong>Ops!</strong> Você não fez nenhuma mudança.
						</div>';
						break;

				default:
					# code...
					break;
			}
		}


		include_once '../../config.php';
		include_once MODEL . 'Product.php';
		
		$products = Product::getAllProducts();



		?>

		<h3>Área Administrativa -> Exibir Produtos</h3>

			<?php if ($products) {
			?>

			<table id="table" class="display">
				<thead>
					<tr>
						<th>ID</th>
						<th>Descrição</th>
            <th>Valor</th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach ($products as $product) {
						echo "
						<tr>
							<td>
								<a href='../../control/ProductControl.php?key=edit&id={$product ['id']}'
								 title='Detalhes'>
									{$product ['id']}
								</a>
							</td>
							<td>{$product ['description']}</td>
              <td>{$product ['value']}</td>
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
