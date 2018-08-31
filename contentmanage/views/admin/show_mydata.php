<!DOCTYPE html>
<html>
<head>
	<title>Meus Dados</title>
	<?php include_once 'include/links.php' ?>
</head>
<body>
	<?php include_once 'include/menu.php' ?>

	<div class="container-fluid">
		<div class="panel-body"
			style="width: 50%; margin-left: auto;
			margin-right: auto; margin-top: 5%;">

			<h3>Área Administrativa -> Meus Dados</h3>

      <form action="../../control/UserControl.php?key=edit" method="post">
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" name="email"
          value="<?php echo $_SESSION['email'];?>">
        </div>
        <div class="form-group">
          <label for="pwd">Senha:</label>
          <input class="form-control" name="pwd"
          value="<?php echo $_SESSION['pwd'];?>">
        </div>
        <div class="form-group form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox"> Lembre me
          </label>
        </div>
        <button type="submit" class="btn btn-primary">Editar</button>
      </form>

		</div>
	</div>

</body>

</html>
