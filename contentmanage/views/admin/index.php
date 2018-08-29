<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Admin</title>
	<?php include_once 'include/links.php'; ?>
</head>
<body>
	
<?php include_once 'include/menu.php'; ?>

<div class="container-fluid">

	<div class="panel-body"
		style="width: 70%; margin-left: auto;
		margin-right: auto; margin-top: 5%;">
		<?php

		if (isset($_GET['msg'])) {
			switch ($_GET['msg']) {
				case 'success':
					echo '<div class="alert alert-success alert-dismissible">
					  <button type="button" class="close" data-dismiss="alert">&times;</button>
					  <strong>Sucesso!</strong> Operação realizada com sucesso.
					</div>';
					break;
				
				default:
					# code...
					break;
			}
		}

		?>

	</div>

</div>




</body>
</html>