<!DOCTYPE html>
<html>
<head>
	<title>Nova Categoria</title>
	<?php include_once 'include/links.php' ?>
</head>
<body>
	<?php include_once 'include/menu.php' ?>

	<?php 
		include_once '../../config.php';
		include_once DAO . 'CategoryDAO.php';

		$categories = CategoryDAO::getAllCategories();
		
	?>

	<div class="container-fluid">
		<div class="panel-body"
			style="width: 50%; margin-left: auto;
			margin-right: auto; margin-top: 5%;">
			<h3>Área Administrativa -> Novo Producto</h3>

			<form action="../../control/ProductControl.php?key=newproduct" 
			method="post" enctype="multipart/form-data">

				<div class="form-group">
					<label>Descrição:</label>
					<textarea class="form-control" name="description">
					</textarea>
				</div>

				<div class="form-group">
					<label>Valor R$:</label>
					<input class="form-control" name="value">
				</div>

				<div class="form-group">
			        <label>Categoria:</label>
			        <select class="form-control" name="category">

		        	<?php
		        		foreach ($categories as $category){
		        			echo "<option value='{$category ['id']}'>
		        			{$category ['name']}</option>";
		        		}
		        	?>
			        
			        </select>
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