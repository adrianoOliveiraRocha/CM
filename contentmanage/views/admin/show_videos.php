<!DOCTYPE html>
<html>
<head>
	<title>Exibir Vídeos</title>
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
		include_once MODEL . 'Video.php';

		$videos = Video::getAllVideos();

	?>

	<div class="container-fluid">
		<div class="panel-body"
			style="width: 70%; margin-left: auto;
			margin-right: auto; margin-top: 5%;">
			<h3>Área Administrativa -> Exibir Vídeos</h3>

			<?php if ($videos) {
			?>

			<table id="table" class="display">
				<thead>
					<tr>
						<th>ID</th>
						<th>Descrição</th>
						<th>Vídeo</th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach ($videos as $video) {
						echo "
						<tr>
							<td>
								<a href='../../control/VideoControl.php?key=editvideo&id={$video ['id']}'
								 title='Editar vídeo'>
									{$video ['id']}
								</a>
							</td>
							<td>{$video ['description']}</td>
							<td>
								<a href='{$video['url']}' target='_blank'>Vêr no Youtube</a>
							</td>
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
