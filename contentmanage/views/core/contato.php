<!DOCTYPE html>
<html lang="pt-br">
  <head>
  <!-- Meta tags Obrigatórias -->
  <meta charset="utf-8">
	<title>Grafky</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

	<!-- Estilo css -->
	<link href="../../static/css/estilo.css" rel="stylesheet" style="text.css">
	<link href="../../static/css/fontello.css" rel="stylesheet" style="text.css">

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
	
	<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = 'RdML1V2hqd';var d=document;var w=window;function l(){
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
<!-- {/literal} END JIVOSITE CODE -->

</head>
<body>
<section id="topo">
	<div class="container">
		<div class="row">
			<div class="col-md-9">


			</div>
			<div class="col-md-3 sociais_top">
				<ul>
					<li><a href="contato.html" target="_blanck""><img class="zoom_in" src="../../static/imagens/sociais_local.png"/></a></li>
					<li><a href="http://www.youtube.com" target="_blanck""><img class="zoom_in" src="../../static/imagens/sociais_youtube.png"/></a></li>
					<li><a href="https://www.instagram.com/grafkyimpressao/" target="_blanck"><img class="zoom_in" src="../../static/imagens/sociais_instagram.png"/></a></li>
					<li><a href="https://www.facebook.com/grafky/" target="_blanck"><img class="zoom_in" src="../../static/imagens/sociais_face.png"/></a></li>
					<li><a href="https://api.whatsapp.com/send?phone=558588654037" target="_blanck"><img class="zoom_in" src="../../static/imagens/sociais_whatsapp.png"/></a></li>

				</ul>

			</div>

		</div>

	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-4 logo_top">
				<a href="../../index.php"><img class="img-responsive" src="../../static/imagens/logo.png"></a>

			</div>

		</div>

	</div>

</section>

	<!-- MENÚ -->
	<section id="menu">
		<div class="container">
			<div class="row">
				<div class="col-md-12 menu_mob">
					<p><span class="icon-menu"></span>MENU</p>
					<p><a href="../../index.php">Início</a></p>
					<p><a href="quemsomos.php">Quem Somos</a></p>
					<p><a href="contato.php">Contato</a></p>
					<p><a href="portfolio.php">Portfólio</a></p>
					<p><a href="../../index.php#videos">Vídeos</a></p>
					<p><a href="../../index.php#pagamentos">Form/Pagamento</a></p>
					<p><a href="../../control/UserControl.php?key=enter" target="_blanck">Área Restrita</a></p>

				</div>

			</div>
		</div>
	</section>
	<!-- //MENÚ -->

	<div class="container">
		<div class="row">
			<div class="col-md-12 img_quemsomos">
				<img class="img-responsive" src="../../static/imagens/img_contato.jpg"/>

			</div>

		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-6 formulario">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.17536154283!2d-38.63243658582746!3d-3.771991644450508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c74c964f7a7f55%3A0x88cdbd99aa45a147!2sGrafky+Impress%C3%A3o+Digital!5e0!3m2!1spt-BR!2sus!4v1531927308706" width="100%" height="410" frameborder="0" style="border:0" allowfullscreen></iframe>

			</div>

			<div class="col-md-6 formulario" id="divform">
				<?php
				if (isset($_REQUEST['sended'])) {
					echo "
						<div class='alert alert-success alert-dismissible'>
						  <button type='button' class='close' data-dismiss='alert'>&times;</button>
						  <strong>Obrigado!</strong> Sua mensagem foi enviada.
						</div>
					";
				}

				
				?>
				
				<form action="../../control/EmailControl.php" method="post" 
				class="form-horizontal" data-wow-delay="0.6s">
					<fieldset>

						<!-- Form Name -->
						<div class="col-md-12">
							<legend>ORÇAMENTO RÁPIDO</legend>

						</div>

						<!-- Text input-->

							<div class="col-md-12">
								<input id="name" name="name" type="text" placeholder="Digite seu nome e sobrenome" class="form-control input-md" required=""></p>

							</div>

							<div class="col-md-12">
								<input id="phone" name="phone" type="text" placeholder="Informe um numero para contato" class="form-control input-md"></P>

							</div>

							<div class="col-md-12">
								<input id="email" name="email" type="text" placeholder="Informe um e-mail válido" class="form-control input-md" required=""></p>

							</div>

							<div class="col-md-12">
								<textarea class="form-control" id="text" name="message">Digite sua mensagem...</textarea></P>

							</div>

							<div class="col-md-4">
								<button id="button" name="button" class="btn btn-primary btn_form">Enviar</button>

							</div>

						</fieldset>

			</form>

			</div>

		</div><!--row-fluid-->
	</div><!--container-fluid-->

	<section id="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-2 rodape">
					<p>MAPA DO SITE</p>
						<a href="../../index.php">Início</a>
						<a href="quemsomos.php">Quem Somos</a>
						<a href="index.php#produtos">Produtos</a>
						<a href="../../index.php#videos">Vídeos</a>
						<a href="contato.php">Contato</a>

				</div>
				<div class="col-md-3 rodape">
					<p>CONTATO</p>
					<span class="icon-phone"></span>3011.0876 / <span class="icon-whatsapp"></span>98865.4037</br>
					<span class="icon-mail-alt"></span>grafica&shyrapida@grafky&shy.com.br </br>
					<span class="icon-home"></span>Av. São Vicente de Paula, 248 C - Araturi / Caucaia /CE


				</div>
				<div class="col-md-4 rodape map_rodape">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.17536154283!2d-38.63243658582746!3d-3.771991644450508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c74c964f7a7f55%3A0x88cdbd99aa45a147!2sGrafky+Impress%C3%A3o+Digital!5e0!3m2!1spt-BR!2sus!4v1531927308706" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>

				</div>
				<div class="col-md-3 rodape">
					<img class="img-responsive" src="../../static/imagens/logo.png"/>

				</div>

			</div>

		</div>

	</section> <!-- // Final Footer -->

	<section id="copy">
		<p>&copy 2018 - <span>Gráfica Rápida Grafky</span> - Todos os direitos reservados | Desenvolvido por <span>Atrativa Propaganda</span>.</p>

	</section>



    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

	</body>
</html>
