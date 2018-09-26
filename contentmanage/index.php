<?php

include_once 'config.php';
include_once MODEL . 'Category.php';
include_once MODEL . 'Promotion.php';
include_once MODEL . 'Product.php';
include_once MODEL . 'Video.php';
include_once MODEL . 'Banner.php';

$categories = Category::getAllCategories();
$topPpromotions = Promotion::getTopPromotions();
$videos = Video::getAllVideos();
$banners = Banner::getAllBanners();

if (isset($_GET['promo'])) { // show promotions
  $catName = 'Promoções';
  $page = 1;
  $nPages = Promotion::getNPages();
  if (isset($_GET['page'])) {
    $page = (int) $_GET['page'];
    $valueOfseet = ($page - 1) * 6;
    $promotions = Promotion::getGroupSixPromotions($offset=$valueOfseet);
  } else {
    $promotions = Promotion::getGroupSixPromotions();
  }

} else { //show products

  $products = null;

  $page = 1;
  $cat = 0;

  if (isset($_GET['cat'])) {
    $cat = (int) $_GET['cat'];
  }
  $nPages = Product::getNPages($cat);

  if (isset($_GET['page'])) {
    $page = (int) $_GET['page'];

    $previous = $page - 1;
		$next = $page + 1;
		if ($page == 1) {
			$previous = 1;
		}
		if ($next >= $nPages) {
			$next = $nPages;
		}

    $valueOfseet = ($page - 1) * 6;
    $valueCat = $cat;
    $products = Product::getGroupSixProducts($offset=$valueOfseet, $cat=$valueCat);
  } else {
  	$page = 1;

    $previous = $page - 1;
		$next = $page + 1;

		if ($page == 1) {
			$previous = 1;
		}
		if ($next >= $nPages) {
			$next = $nPages;
		}
    $products = Product::getGroupSixProducts();
  }
  // defibe the category name
  $catName = 'Todas as Categorias';
  if ($cat > 0) {
    $catName = Category::getCategoryName($cat);
  }

}

?>
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
	<link href="static/css/estilo.css" rel="stylesheet" style="text.css">
	<link href="static/css/fontello.css" rel="stylesheet" style="text.css">

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
	
	<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = 'RdML1V2hqd';var d=document;var w=window;function l(){
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
<!-- {/literal} END JIVOSITE CODE -->

</head>

<body onload="location();">
<section id="topo">
	<div class="container">
		<div class="row">
			<div class="col-md-8">

			</div>
			<div class="col-md-4 sociais_top">
				<ul>
					<li><a href="views/core/contato.html" target="_blanck""><img class="zoom_in" src="static/imagens/sociais_local.png"/></a></li>
					<li><a href="http://www.youtube.com" target="_blanck""><img class="zoom_in" src="static//imagens/sociais_youtube.png"/></a></li>
					<li><a href="https://www.instagram.com/grafkyimpressao/" target="_blanck"><img class="zoom_in" src="static//imagens/sociais_instagram.png"/></a></li>
					<li><a href="https://www.facebook.com/grafky/" target="_blanck"><img class="zoom_in" src="static//imagens/sociais_face.png"/></a></li>
					<li><a href="https://api.whatsapp.com/send?phone=558588654037" target="_blanck"><img class="zoom_in" src="static/imagens/sociais_whatsapp.png"/></a></li>

				</ul>

			</div>

		</div>

	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-4 logo_top">
				<a href="index.html"><img class="img-responsive" src="static/imagens/logo.png"></a>

			</div>

		</div>

	</div>

</section>
		
		<div class="slider-top">

			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

			  <div class="carousel-inner">

			  <?php
			  if (isset($banners)) {
			  	$count = 0;
			  	foreach ($banners as $banner) {
			  		if ($count == 0) {
			  			echo "
					  		<div class='carousel-item active'>
								  <img class='d-block w-100' src='upload/{$banner['image']}'>
								</div>
					  	";
			  		} else {
			  			echo "
					  		<div class='carousel-item'>
								  <img class='d-block w-100' src='upload/{$banner['image']}'>
								</div>
					  	";
			  		}
			  		$count ++;
			  	}
			  }
			  	
			  ?>

				</div>

			  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			  </a>

			</div>

		</div>

	<a name="promocoes"></a>

	<section id="promocoes"> <!-- Promoções -->
		<div class="container">
			<div class="row">
        <?php
        foreach ($topPpromotions as $promotion) {
          echo "
          <div class='col-md-3 banners_promocoes'>
  					<img class='img-responsive' src='upload/{$promotion['image']}'/>
          </div>
          ";
        }

         ?>
			</div>
		</div>
	</section> <!--Final Promoções -->

	<!-- MENÚ -->
	<section id="menu">
		<div class="container">
			<div class="row">
				<div class="col-md-12 menu_mob">
					<p><span class="icon-menu"></span>MENU</p>
					<p><a href="index.php">Início</a></p>
					<p><a href="views/core/quemsomos.php">Quem Somos</a></p>
					<p><a href="views/core/contato.php">Contato</a></p>
					<p><a href="views/core/portfolio.php">Portfólio</a></p>
					<p><a href="#videos">Vídeos</a></p>
					<p><a href="control/UserControl.php?key=enter" target="_blanck">Área Restrita</a></p>

				</div>

			</div>
		</div>
	</section>
	<!-- //MENÚ -->

	<div class="container">
		<div class="row">
			<div class="col-md-12 btn_fretes">
				<a class="img-responsive" href="views/core/tabelaentregas.php"><img class="zoom_in" src="static/imagens/btn_fretes.jpg"/></a>

			</div>

		</div>

	</div>

	<a name="produtos"></a>

	<section id="divisao_produtos"> <!-- produtos -->
		<div class="container">
			<div class="row">

					<div class="container"><div class="row"><div class="espaco-linha-1"></div></div></div> <!-- Espaço 01 -->

				  <div class="col-md-4 title_secao loja">
					<h1>PRODUTOS</h1>

				</div>

			</div>

		</div>

		<div class="container"> <!-- Container Tabs -->
			<div class="row">
				<!-- Categorias -->
				<div class="col-md-3">
					<nav>
						<div  class="nav flex-column" id="nav-tab" role="tablist" aria-orientation="vertical">

              <a class="nav-item nav-link active Tabs_produtos"
              role="tab"
              href="index.php?page=1&promo#products">
                Promoções
              </a>

              <a class="nav-item nav-link active Tabs_produtos"
              role="tab"
              href="index.php#products">
                Todas as Categorias
              </a>

              <?php

              foreach ($categories as $category) {
              	if (isset($cat)) {
              		if ($category['id'] == $cat) {
	                  echo "
	                  <a class='nav-item nav-link active Tabs_produtos'
	                  role='tab'
	                  href='index.php?page={$page}&cat={$category['id']}#products'>
	                    {$category['name']}
	                  </a>
	                  ";
	                } else {
	                  echo "
	                  <a class='nav-item nav-link active Tabs_produtos'
	                  role='tab'
	                  href='index.php?page=1&cat={$category['id']}#products'>
	                    {$category['name']}
	                  </a>
	                  ";
	                }
              	} else {
              		echo "
	                  <a class='nav-item nav-link active Tabs_produtos'
	                  role='tab'
	                  href='index.php?page=1&cat={$category['id']}#products'>
	                    {$category['name']}
	                  </a>
	                  ";
              	}

              }


               ?>

						</div>

					</nav>

				</div>
				<!-- Fim categorias -->

				<div class="col-md-9">
					<div class="titulo_categoria_tab">
						<h1><span class="icon-check"></span>
              <?php echo $catName; ?>
            </h1>
					</div>

          <?php 
          if (isset($products)) {
            ?>
  					<div class="row" id="products">
              <?php
              if ($products) {

	              foreach ($products as $product) {
	                echo "
	                <div class='col-md-4 produtos'>
	                  <div class='cubo_produto'>
	                    <img class='img-responsive' src='upload/{$product['image']}'>
	    								<h3 style='font-size: 16px;'>{$product['description']}</h3>
	    								<div class='cod_preco_prod' title='Nº Referência'>
	    									<p id='cod_prod'>Ref: {$product['id']}</p>

	    								</div>
	    								<div class='cod_preco_prod'>
	    									<p id='preco_prod'>R$ {$product['value']}</p>
	                    </div>
	    								<div class='btn_comprar'>
	    									<a href='https://api.whatsapp.com/send?phone=558588654037'>
	    										Fazer Pedido
	    										<span class='icon-right-open'></span>
	    									</a>
	                    </div>
	                  </div>
	                </div>
	                ";
	              }
              	}
               ?>
  					</div>
            <ul class="pagination" style="margin: 2%;">

              <?php //pagination for products
              if ($nPages > 6) {
              	echo "
                  <li class='page-item active'>
                    <a class='page-link' href='index.php?page={$previous}&cat={$cat}#products'>
                      Anterior
                    </a>
                  </li>
                  <li class='page-item'>
                    <a class='page-link'>
                      Página {$page} de {$nPages}
                    </a>
                  </li>
                  <li class='page-item active'>
                    <a class='page-link' href='index.php?page={$next}&cat={$cat}#products'>
                      Próxima
                    </a>
                  </li>
                  ";
              } else {
	              	for ($i=1; $i <= $nPages; $i++) {
		                if ($i == $page) {
		                  echo "
		                  <li class='page-item active'>
		                    <a class='page-link' href='index.php?page={$i}&cat={$cat}#products'>
		                      {$i}
		                    </a>
		                  </li>";
		                } else {
		                  echo "
		                  <li class='page-item'>
		                    <a class='page-link' href='index.php?page={$i}&cat={$cat}#products'>
		                      {$i}
		                    </a>
		                  </li>";
		                }
	              }
              }
              	

               ?>
           </ul>

       <?php } else {
         ?>
         <div class="row" id="products">
           <?php

           if (isset($promotions)) {
           	
	           foreach ($promotions as $promotion) {
	             echo "
	             <div class='col-md-4 produtos'>
	               <div class='cubo_produto'>
	                 <img class='img-responsive' src='upload/{$promotion['image']}'>
	                 <h3 style='font-size: 16px;'>{$promotion['description']}</h3>
	                 <div class='cod_preco_prod' title='Nº Referência'>
	                   <p id='cod_prod'>Ref: {$promotion['id']}</p>

	                 </div>

	                 <div class='btn_comprar'>
	                   <a href='https://api.whatsapp.com/send?phone=558588654037'>
	                     Fazer Pedido
	                     <span class='icon-right-open'></span>
	                   </a>
	                 </div>
	               </div>
	             </div>
	             ";
	           }
       		}
            ?>
         </div>
         <ul class="pagination" style="margin: 2%;">

           <?php //pagination for promotions
           for ($i=1; $i <= $nPages; $i++) {
             if ($i == $page) {
               echo "
               <li class='page-item active'>
                 <a class='page-link' href='index.php?page={$i}&promo#products'>
                   {$i}
                 </a>
               </li>";
             } else {
               echo "
               <li class='page-item'>
                 <a class='page-link' href='index.php?page={$i}&promo#products'>
                   {$i}
                 </a>
               </li>";
             }

           }
            ?>
        </ul>
       <?php } ?>


				</div>



			</div>

		</div> <!-- //Final Container Tabs -->

	</section> <!--// Final produtos -->

	<a name="videos"></a>
	<section id="videos"> <!--Seção Vídeos -->
		<div class="container">
			<div class="row">
				<div class="col-md-12 title_secao title_videos">
					<img class="img-responsive" src="static/imagens/faixa_videos.jpg"/>

				</div>

			</div>

			<div class="container"><div class="row"><div class="espaco-linha-1"></div></div></div> <!-- Espaço 01 -->

			<div class="row">

				<?php
				if (isset($videos)) {
					foreach ($videos as $video) {
						echo "
						<div class='col-md-3 videos'>
							<iframe width='100%' src='{$video['url']}' 
							frameborder='0' allow='autoplay; encrypted-media' allowfullscreen></iframe>
						</div>
						";	
					}
				}
							
				?>

			</div>

		</div>

	</div>      <!--// Final Seção Vídeos -->

	<div class="container"><div class="row"><div class="espaco-linha-1"></div></div></div> <!-- Espaço 01 -->

	<div class="container">
		<div class="row">
			<div class="col-md-12 btn_youtube">
				<a href="http://www.youtube.com" target="_blanck"><img class="img-responsive zoom_in" src="static/imagens/btn_ver_videos.jpg"/></a>

			</div>


		</div>

	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-12 aviso_">
				<p>ESTE SITE FOI DESENVOLVIDO E PENSADO PARA MELHOR EXPERIÊNCIA DO USUÁRIO NOS DISPOSITIVOS MÓVEIS.</p>

			</div>

		</div>

	</div>

	<section id="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-2 rodape">
					<p>MAPA DO SITE</p>
						<a href="index.php">Início</a>
						<a href="views/core/quemsomos.php">Quem Somos</a>
						<a href="index.php#produtos">Produtos</a>
						<a href="index.php#videos">Vídeos</a>
						<a href="views/core/contato.php">Contato</a>

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
					<img class="img-responsive" src="static/imagens/logo.png"/>

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
