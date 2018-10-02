<!DOCTYPE html>
<html>
<head>
	<title>Qume Somos</title>
	<?php include_once 'include/links.php' ?>
</head>
<body>
	<?php include_once 'include/menu.php' ?>

	<?php

		include_once '../../config.php';
		include_once MODEL . 'W2a.php';

    $key = (int) $_GET['key'];
    $w2a = null;
    $action = null;
    if ($key) {
      $action = "../../control/W2aControl.php?key=edit";
      $w2a = W2a::getCurrent();
    } else {
      $action = "../../control/W2aControl.php?key=save";
    }
        
	?>

	<div class="container-fluid" style="margin-bottom: 2%;">
		<div class="panel-body"
			style="width: 50%; margin-left: auto;
			margin-right: auto; margin-top: 5%;">
			<h3>Área Administrativa -> Quem Somos</h3>

			<form action=<?php echo $action; ?> method="post" 
        enctype="multipart/form-data">

        <?php
        echo "<input type='hidden' name='id' value='{$w2a['id']}'/>";
        ?>

				<div class="form-group">
					<label>Texto</label>
					<textarea class="form-control" rows="10" name="text">
            <?php
            if ($w2a) {
              echo $w2a['text'];
            }
            ?>
           
          </textarea>
				</div>

        <!-- top banner -->
        <?php
          if ($w2a) {

            if ($w2a['large_banner'] != 'not_sended') {
              echo "
              <div class='form-group' style='width: 50%;'>
                <label>Banner Superior:</label>
                <image class='form-control' alt='banner superior' name='largeBanner'
                src='../../upload/{$w2a['large_banner']}'>
              </div>";
              echo "
              <div class='form-group'>
                <label>Substituir imagem 1:</label>
                <input type='file' name='largeBanner' class='form-control'>
              </div>
              ";
            } else {
              echo "<div class='form-group'>
                <label>Banner superior:</label>
                <input type='file' name='largeBanner' class='form-control'>
              </div>
              ";
            } 

          } else {
            echo "
            <div class='form-group'>
              <label>Banner superior:</label>
              <input type='file' name='largeBanner' class='form-control'>
            </div>
            ";
          }
        ?>
        <!-- end img1 -->
        <br />
        
        <!-- img1 -->
        <?php
          if ($w2a) {

            if ($w2a['img1'] != 'not_sended') {
              echo "
              <div class='form-group' style='width: 50%;'>
                <label>Imagem 1 atual:</label>
                <image class='form-control' alt='{$w2a['img1']}'
                src='../../upload/{$w2a['img1']}'>
              </div>";
              echo "
              <div class='form-group'>
                <label>Substituir imagem 1:</label>
                <input type='file' name='img1' class='form-control'>
              </div>
              ";
            } else {
              echo "
              <div class='form-group'>
                <label>Enviar imagem 1:</label>
                <input type='file' name='img1' class='form-control'>
              </div>
              ";
            }
           
          } else {
            echo "
              <div class='form-group'>
                <label>Enviar imagem 1:</label>
                <input type='file' name='img1' class='form-control'>
              </div>
              ";
          }
        ?>
        <!-- end img1 -->
        <br />

        <!-- img2 -->
        <?php
          if ($w2a) {

            if ($w2a['img2'] != 'not_sended') {
              echo "
              <div class='form-group' style='width: 50%;'>
                <label>Imagem 2 atual:</label>
                <image class='form-control' alt='{$w2a['img2']}'
                src='../../upload/{$w2a['img2']}'>
              </div>";
              echo "
              <div class='form-group'>
                <label>Substituir imagem 2:</label>
                <input type='file' name='img2' class='form-control'>
              </div>
              ";
            } else {
              echo "
              <div class='form-group'>
                <label>Enviar imagem 2:</label>
                <input type='file' name='img2' class='form-control'>
              </div>
              ";
            }
            
          } else {
            echo "
              <div class='form-group'>
                <label>Enviar imagem 1:</label>
                <input type='file' name='img2' class='form-control'>
              </div>
              ";
          }
        ?>
        <!-- end img2 -->
        <br />


        <!-- img3 -->
        <?php
          if ($w2a) {

            if ($w2a['img3'] != 'not_sended') {
              echo "
              <div class='form-group' style='width: 50%;'>
                <label>Imagem 3 atual:</label>
                <image class='form-control' alt='{$w2a['img3']}'
                src='../../upload/{$w2a['img3']}'>
              </div>";
              echo "
              <div class='form-group'>
                <label>Substituir imagem 3:</label>
                <input type='file' name='img3' class='form-control'>
              </div>
              ";
            } else {
              echo "
              <div class='form-group'>
                <label>Enviar imagem 3:</label>
                <input type='file' name='img3' class='form-control'>
              </div>
              ";
            }
            
          } else {
            echo "
              <div class='form-group'>
                <label>Enviar imagem 1:</label>
                <input type='file' name='img3' class='form-control'>
              </div>
              ";
          }
        ?>
        <!-- end img1 -->
        <br />
        

        <?php

        if ($key) {
          echo "
          <a href='../../control/W2aControl.php?key=edit&id={$w2a['id']}'>
          <button type='submit' class='btn btn-primary'>Editar</button>
          </a>

          <a href='../../control/W2aControl.php?key=delete&id={$w2a['id']}'>
          <button type='button' class='btn btn-primary btn-danger'>Deletar</button>
          </a>
          ";
        } else {
          echo "
          <button type='submit' class='btn btn-primary'>Salvar</button>
          ";
        }

        ?>
				

			</form>

		</div>
	</div>

</body>

</html>
