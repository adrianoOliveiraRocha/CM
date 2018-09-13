<!DOCTYPE html>
<html>
<head>
	<title>Editar Vídeo</title>
	<?php include_once 'include/links.php'; ?>
</head>
<body>
	<?php include_once 'include/menu.php'; ?>

	<?php
		include_once '../../config.php';
		include_once MODEL . 'Video.php';
		$video = Video::getThisVideo($_GET['id']);
	?>

	<div class="container-fluid">
		<div class="panel-body"
			style="width: 50%; margin-left: auto;
			margin-right: auto; margin-top: 5%;">
			<h3>Área Administrativa -> Editar Vídeo</h3>

			<?php
			echo "
			<form action='../../control/VideoControl.php?key=editvideo' 
			method='POST'>
				<input type='hidden' name='id' value='{$video['id']}'>
			
				<div class='form-group'>
					<label>Descrição:</label>
					<input class='form-control' name='description'
					value='{$video['description']}'>
				</div>

				<div class='form-group'>
					<label for='basic-url'>URL do Vídeo</label>
					<div class='input-group mb-3'>
					  <div class='input-group-prepend'>
					    <span class='input-group-text' id='basic-addon3'>
					    	youtube:
					  	</span>
					  </div>
					  <input type='text' class='form-control' name='url' 
					  	aria-describedby='basic-addon3'
					  	value='{$video['url']}'>
					</div>
				</div>

				<button type='submit' class='btn btn-primary'>Atualizar</button>
				<a type='button' class='btn btn-danger' style='color: white'
        href='../../control/VideoControl.php?key=del&id={$video['id']}'>
        	Deletar
				</a>
				
			</form>
			";
			?>

		</div>
	</div>

</body>

</html>
