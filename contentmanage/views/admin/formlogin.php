<!DOCTYPE html>
<html>
<head>
	<title>Formulário Login</title>
	<?php include_once 'include/links.php'; ?>
</head>
<body>

	

	<div class="panel panel-default form-central"
	style="width: 50%; margin-left: auto; margin-right: auto;">
		<?php
			if (isset($_GET['msg'])) {
				switch ($_GET['msg']) {
					case 'empty':
						echo "<h3 style='color: red; margin: 2%;'>
							Por favor, preencha os dois campos
						</h3>";
						break;
					
					default:
						# code...
						break;
				}
			}
		?>
		<div class="panel-heading" style="margin: 2%;">
			<h1>Login</h1>
		</div>

	    <div class="panel-body">
	        <form action="../../control/UserControl.php?key=login" method="post">
	          <div class="form-group">
	            <label for="email">Email:</label>
	            <input type="email" class="form-control" name="email">
	          </div>
	          <div class="form-group">
	            <label for="pwd">Senha:</label>
	            <input type="password" class="form-control" name="pwd">
	          </div>
	          <div class="form-group form-check">
	            <label class="form-check-label">
	              <input class="form-check-input" type="checkbox"> Lembre me
	            </label>
	          </div>
	          <button type="submit" class="btn btn-primary">Enviar</button>
	        </form>
		</div>

	</div>
</body>
</html>