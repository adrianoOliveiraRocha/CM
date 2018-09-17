<!DOCTYPE html>
<html>
<head>
	<title>Novo Banner</title>
	<?php include_once 'include/links.php' ?>
</head>
<body>
	<?php include_once 'include/menu.php' ?>

	<div class="container-fluid">
		<div class="panel-body"
			style="width: 50%; margin-left: auto;
			margin-right: auto; margin-top: 5%;">
			<h3>Área Administrativa -> Novo Banner</h3>

			<form action="../../control/BannerControl.php?key=newbanner"
			method="post" enctype="multipart/form-data">

				<div class="form-group">
					<label>Descrição:</label>
					<textarea class="form-control" name="description">
					</textarea>
				</div>

				<div class="form-group">
	        <label>Imagem:</label>
	        <input type="file" name='image' class="form-control">
				</div>

				<button type="submit" class="btn btn-primary">Salvar</button>
			</form>

		</div>
	</div>

</body>

</html>
