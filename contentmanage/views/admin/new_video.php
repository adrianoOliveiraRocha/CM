<!DOCTYPE html>
<html>
<head>
	<title>Novo Vídeo</title>
	<?php include_once 'include/links.php' ?>
</head>
<body>
	<?php include_once 'include/menu.php' ?>

	<div class="container-fluid">
		<div class="panel-body"
			style="width: 50%; margin-left: auto;
			margin-right: auto; margin-top: 5%;">
			<h3>Área Administrativa -> Novo Vídeo</h3>

			<form action="../../control/VideoControl.php?key=newvideo" 
			method="POST">
			
				<div class="form-group">
					<label>Descrição:</label>
					<input class="form-control" name="video_description">
				</div>

				<div class="form-group">
					<label for="basic-url">URL do Vídeo</label>
					<div class="input-group mb-3">
					  <div class="input-group-prepend">
					    <span class="input-group-text" id="basic-addon3">
					    	youtube:
					  	</span>
					  </div>
					  <input type="text" class="form-control" name="video_url" 
					  	aria-describedby="basic-addon3">
					</div>
				</div>

				<button type="submit" class="btn btn-primary">Salvar</button>
			</form>

		</div>
	</div>

</body>

</html>