<!DOCTYPE html>
<html>
<head>
	<title>Exibir Categorias</title>
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
		include_once MODEL . 'Category.php';

		$categories = Category::getAllCategories();

	?>

	<div class="container-fluid">
		<div class="panel-body"
			style="width: 70%; margin-left: auto;
			margin-right: auto; margin-top: 5%;">
			<h3>Área Administrativa -> Exibir Cateorias</h3>

			<?php if ($categories) {
			?>

			<table id="table" class="display">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nome</th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach ($categories as $category) {
						echo "
						<tr>
							<td>
								<a href='../../control/CategoryControl.php?key=editcategory&id={$category ['id']}'
								 title='Editar categoria'>
									{$category ['id']}
								</a>
							</td>
							<td>{$category ['name']}</td>
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
