<!DOCTYPE html>
<html>
<head>
	<title>Editar Portifólio</title>
	<?php include_once 'include/links.php' ?>
</head>
<body>
	
	<?php include_once 'include/menu.php' ?>

	<?php
		include_once '../../config.php';
		include_once MODEL . 'Portifoli.php';

		$banner = Portifoli::getThisBanner($_GET['id']);

	?>

	<div class="container-fluid">
		<div class="panel-body"
			style="width: 50%; margin-left: auto;
			margin-right: auto; margin-top: 5%;">
			<h3>Área Administrativa -> Editar Portifólio</h3>

			<form action="../../control/PortfoliControl.php?key=edit"
			method="POST" enctype="multipart/form-data">
				<?php
					echo "
          <input type= 'hidden' name='id'
						value='{$banner['id']}'>

					<div class='form-group'>
						<label>Título:</label>
						<textarea class='form-control' name='title'>
            {$banner['title']}
            </textarea>
					</div>

					<div class='form-group'>
						<label>Descrição:</label>
						<textarea class='form-control' name='description'>
            {$banner['description']}
            </textarea>
					</div>

          ";

          echo "
          <div class='form-group' style='width: 50%;'>
            <label>Imagem atual:</label>
            <image class='form-control' alt='{$banner['image']}'
            src='../../upload/{$banner['image']}'>
          </div>

          <div class='form-group'>
  	        <label>Substituir imagem:</label>
  	        <input type='file' name='image' class='form-control'>
  				</div>

          ";

				?>
				<button type="submit" class="btn btn-primary">Alterar</button>

				<?php
				echo "
				<a type='button' class='btn btn-danger' style='color: white'
        href='../../control/BannerControl.php?key=del&id={$banner['id']}'>
        	Deletar
				</a>
				";
				?>

			</form>

		</div>
	</div>

</body>

</html>
