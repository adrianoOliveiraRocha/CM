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
		include_once MODEL . 'Category.php';
		include_once MODEL . 'Product.php';

		$product = Product::getThisProduct($_GET['id']);
    $categories = Category::getAllCategories();
    $currentCategory = Category::getThisCategory($product['category_id']);

	?>

	<div class="container-fluid">
		<div class="panel-body"
			style="width: 50%; margin-left: auto;
			margin-right: auto; margin-top: 5%;">
			<h3>Área Administrativa -> Editar Produto</h3>

			<form action="../../control/ProductControl.php?key=edit"
			method="POST" enctype="multipart/form-data">
				<?php
					echo "
          <input type= 'hidden' name='id'
						value='{$product['id']}'>

					<div class='form-group'>
						<label>Descrição:</label>
						<textarea class='form-control' name='description'>
            {$product['description']}
            </textarea>
					</div>

          <div class='form-group'>
						<label>ValorR$:</label>
						<input class='form-control' name='value'
						value='{$product['value']}'>
					</div>
          ";
          echo "
          <div class='form-group'>
          <label>Categoria:</label>
          <select class='form-control' name='category'>
          ";
          foreach ($categories as $category) {
            if ($category == $currentCategory) {
              echo "
              <option value='{$category['id']}' selected='selected'>
              {$category['name']}
              </option>";
            } else {
              echo "
              <option value='{$category['id']}'>
              {$category['name']}
              </option>";
            }
          }
          echo "
          </select>
          </div>
          ";

          echo "
          <div class='form-group' style='width: 50%;'>
            <label>Imagem atual:</label>
            <image class='form-control' alt='{$product['image']}'
            src='../../upload/{$product['image']}'>
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
        href='../../control/ProductControl.php?key=del&id={$product['id']}'>
        	Deletar
				</a>
				";
				?>

			</form>

		</div>
	</div>

</body>

</html>
