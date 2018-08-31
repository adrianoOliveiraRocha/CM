<!DOCTYPE html>
<html>
<head>
	<title>Editar Promoção</title>
	<?php include_once 'include/links.php' ?>
</head>
<body>
	<?php include_once 'include/menu.php' ?>

	<?php
		include_once '../../config.php';
		include_once MODEL . 'Promotion.php';

		$promotion = Promotion::getThisPromotion($_GET['id']);

	?>

	<div class="container-fluid">
		<div class="panel-body"
			style="width: 50%; margin-left: auto;
			margin-right: auto; margin-top: 5%;">
			<h3>Área Administrativa -> Editar Promoção</h3>

			<form action="../../control/PromotionControl.php?key=edit"
			method="POST" enctype="multipart/form-data">
				<?php
					echo "
          <input type= 'hidden' name='id'
						value='{$promotion['id']}'>

					<div class='form-group'>
						<label>Descrição:</label>
						<textarea class='form-control' name='description'>
            {$promotion['description']}
            </textarea>
					</div>

          ";

          echo "
          <div class='form-group' style='width: 50%;'>
            <label>Imagem atual:</label>
            <image class='form-control' alt='{$promotion['image']}'
            src='../../upload/{$promotion['image']}'>
          </div>

          <div class='form-group'>
  	        <label>Substituir imagem:</label>
  	        <input type='file' name='image' class='form-control'>
  				</div>

          ";

				?>
				<button type="submit" class="btn btn-primary">Editar</button>

				<?php
				echo "
				<a type='button' class='btn btn-danger' style='color: white'
        href='../../control/PromotionControl.php?key=del&id={$promotion['id']}'>
        	Deletar
				</a>
				";
				?>

			</form>

		</div>
	</div>

</body>

</html>
