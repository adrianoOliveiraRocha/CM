<!DOCTYPE html>
<html>
<head>
	<title>Editar Categoria</title>
	<?php include_once 'include/links.php' ?>
</head>
<body>
	<?php include_once 'include/menu.php' ?>

	<?php
		include_once '../../config.php';
		include_once MODEL . 'Category.php';
		$category = Category::getThisCategory($_GET['id']);
	?>

	<div class="container-fluid">
		<div class="panel-body"
			style="width: 50%; margin-left: auto;
			margin-right: auto; margin-top: 5%;">
			<h3>Área Administrativa -> Editar Categoria</h3>

			<form action="../../control/CategoryControl.php?key=editcategory"
			method="POST">
				<?php
					echo "
					<div class='form-group'>
						<label>Novo nome:</label>
						<input class='form-control' name='category_name'
						value='{$category['name']}'>
					</div>
					<input type= 'hidden' name='id'
						value='{$category['id']}'>
					";
				?>
				<button type="submit" class="btn btn-primary">Editar</button>

				<?php
				echo "
				<a type='button' class='btn btn-danger' style='color: white'
        href='../../control/CategoryControl.php?key=del&id={$category['id']}'>
        	Deletar
				</a>
				";
				?>

			</form>

		</div>
	</div>

</body>

</html>
