<!DOCTYPE html>
<html>
<head>
	<title>Exibir Banners</title>
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
		include_once MODEL . 'Banner.php';

		$banners = Banner::getAllBanners();

	?>

	<div class="container-fluid">
		<div class="panel-body"
			style="width: 70%; margin-left: auto;
			margin-right: auto; margin-top: 5%;">
			<h3>Área Administrativa -> Exibir Banners</h3>

			<?php if ($banners) {
			?>

			<table id="table" class="display">
				<thead>
					<tr>
						<th>ID</th>
						<th>Descrição</th>
						
					</tr>
				</thead>
				<tbody>
					<?php
					foreach ($banners as $banner) {
						echo "
						<tr>
							<td>
								<a href='../../control/BannerControl.php?key=edit&id={$banner ['id']}'
								 title='Detalhes'>
									{$banner ['id']}
								</a>
							</td>
							<td>{$banner ['description']}</td>

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
