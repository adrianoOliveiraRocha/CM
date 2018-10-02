<!DOCTYPE html>
<html>
<head>
  <?php include_once '../views/admin/include/links.php' ?>
	<title>Qume Somos</title>
  <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
	<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>


</head>
<body>

	<?php

		include_once '../config.php';
		include_once MODEL . 'W2a.php';
    $w2a = W2a::getCurrent();
    $data = str_replace("false", "true", $w2a['text']);
	?>

	<div class="container-fluid" style="width: 80%; margin-top: 2%;">

      <div id="toolbar"></div>
      <div id="editor">
        <?php
        if ($w2a) {
          echo $data;
        } else {
          echo "seu texto aqui...";
        }
         ?>
      </div>

      <script>
          var toolbarOptions = [
            ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
            ['blockquote', 'code-block'],

            [{ 'header': 1 }, { 'header': 2 }],               // custom button values
            [{ 'list': 'ordered'}, { 'list': 'bullet' }],
            [{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript
            [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
            [{ 'direction': 'rtl' }],                         // text direction

            [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
            [{ 'header': [1, 2, 3, 4, 5, 6, false] }],

            [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
            [{ 'font': [] }],
            // [{ 'align': [] }],

            ['clean']                                         // remove formatting button
          ];

          var quill = new Quill('#editor', {
            modules: {
              toolbar: toolbarOptions
            },
            theme: 'snow'
          });
      	</script>

        <div id="response" style="margin: 1%;"></div>

        <div style="margin: 2%">
          <button type="button" class="btn btn-primary" onclick="getText();">
            Enviar
          </button>
          <button type="button" class="btn btn-primary btn-danger"
          onclick="del();">
            Deletar
          </button>
          <button type="button" class="btn btn-primary"
          onclick="cancel();">
            Sair
          </button>
        </div>
        <script src="js/programm.js"></script>

	</div>

</body>

</html>
