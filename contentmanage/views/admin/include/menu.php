<?php

@session_start();

if (isset($_SESSION['loged'])) {
	if ($_SESSION['loged'] == false) {
		exit(header('location:include/error.php?msg=forbiden'));
	}
} else {
	exit(header('location:include/error.php?msg=forbidden'));
}

?>

<!-- MENU -->
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
	<a class="navbar-brand" href="index.php">Início</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
	<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="collapsibleNavbar">
	<ul class="navbar-nav">

		<li class="nav-item">
    	<a class="nav-link" href="show_mydata.php">
    		Meus Dados
    	</a>
    </li>

    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Categorias
      </a>
      <div class="dropdown-menu">

        <a class="dropdown-item"
        	href="new_category.php">
        	Nova Categoria
        </a>

        <a class="dropdown-item"
        	href="show_categories.php">
        	Exibir Categorias
        </a>

      </div>
    </li>

    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Produtos
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="new_product.php">
        	Novo Produto
        </a>
        <a class="dropdown-item" href="show_products.php">Exibir Produtos</a>

      </div>
    </li>

    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Promoções
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="new_promotion.php">Nova Promoção</a>
        <a class="dropdown-item" href="show_promotions.php">Exibir Promoções</a>

      </div>
    </li>

		<li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Entrega
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="new_delivery.php">Nova Área</a>
        <a class="dropdown-item" href="show_deliveries.php">Exibir Áreas</a>

      </div>
    </li>

    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Vídeo
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="new_video.php">Novo Vídeo</a>
        <a class="dropdown-item" href="show_videos.php">Exibir Vídeos</a>
      </div>
    </li>

    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Banners
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="new_banner.php">Novo Banner</a>
        <a class="dropdown-item" href="show_banners.php">Exibir Banners</a>

      </div>
    </li>

    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Portifólio
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="new_port_banner.php">Novo Banner</a>
        <a class="dropdown-item" href="show_port_banners.php">Exibir Banners</a>

      </div>
    </li>

    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Quem Somos
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="../../control/W2aControl.php?key=text">
					Editar Texto
				</a>
				<a class="dropdown-item" href="../../control/W2aControl.php?key=verify">
					Editar Imagens
				</a>

      </div>
    </li>



    <li class="nav-item">
    	<a class="nav-link" href="../../control/UserControl.php?key=logout">
    		Sair
    	</a>
    </li>

    <li class="nav-item">
    	<a class="nav-link" href="../../index.php" target="_blanck">
    		Ir para o site
    	</a>
    </li>

	</ul>
	</div>
</nav>
