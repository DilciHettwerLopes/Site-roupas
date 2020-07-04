<?php
	include_once("conexao.php");
?>

<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Diva | eCommerce</title>
	<meta charset="UTF-8">
	<meta name="description" content=" Diva | eCommerce">
	<meta name="keywords" content="Diva, eCommerce">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/jquery-ui.min.css"/>
	<link rel="stylesheet" href="css/style.css"/>

	</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Sessão header-->
	<header class="header-section">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 text-center text-lg-left">
						<!-- logo -->
						<a href="./index.html" class="site-logo">
							<img src="img/logo.jfif" alt="" width="100px">
						</a>
					</div>
					<div class="col-xl-6 col-lg-5">
						<form class="header-search-form">
							<input type="text" placeholder="Lady's ....">
							<button><i class="flaticon-search"></i></button>
						</form>
					</div>
					<div class="col-xl-4 col-lg-5">
						<div class="user-panel">
							<div class="up-item">
								<i class="flaticon-profile"></i>
								<a href="#">Entrar</a> ou <a href="#">Criar conta</a>
							</div>
							<div class="up-item">
								<div class="shopping-card">
									<i class="flaticon-bag"></i>
									<span>0</span>
								</div>
								<a href="#">Carrinho</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<nav class="main-navbar">
			<div class="container">
				<!-- menu -->
				<ul class="main-menu">
					<li><a href="#">Home</a></li>
					<li><a href="#">Feminino</a></li>
					<li><a href="#">Sapatos</a></li>
					<li><a href="#">Acessorios</a></li>
					<li><a href="#">Contato</a>
					</ul>
			</div>
		</nav>
	</header>
	<!-- Header carousel -->	
<!-- Indicators -->
<div class="espaco-topo">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/carrosel/chapeu.jpg" class="rounded mx-auto d-block w-100" alt="chapeu" width="100%" height="500px">
			<div class="offer-card text-white">
						</div>
    <div class="carousel-item">
        <img src="img/carrosel/inverno.jpg" class="rounded mx-auto d-block w-100" alt="sapato" width="100%" height="500px">
                        </div>
    <div class="carousel-item">
        <img src="img/carrosel/sapato.jpg" img-fluid class="rounded mx-auto d-block w-100" alt="inverno" width="100%" height="500px">
                        </div>
    <div class="carousel-item">
        <img src="img/carrosel/promocao.jpg" class="rounded mx-auto d-block w-100" alt="promocao" width="100%" height="500px">
                        </div>
</div> <br> <br>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Proximo</span> <br><br>
                    </a>
                </div>
            </div>
        </div>
	</div>
</div>
	</section>
	<!-- Features section end -->
	<!-- letest product section -->
	<section class="top-letest-product-section">
		<div class="container">
			<div class="section-title">
				<h2>LANÇAMENTO</h2>
			</div>
			<div class="product-slider owl-carousel">
				<div class="product-item">
					<div class="pi-pic">
						<img src="./img/produtos/1.jpg" alt="">
						<div class="pi-links">
							<a href="#" class="add-card"><i class="flaticon-bag"></i><span>Carrinho</span></a>
							<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
						</div>
					</div>
					<div class="pi-text">
						<h6>R$45,90</h6>
						<p>Regata</p>
					</div>
				</div>
				<div class="product-item">
					<div class="pi-pic">
						<div class="tag-new">Novo</div>
						<img src="./img/produtos/2.jpg" alt="">
						<div class="pi-links">
							<a href="#" class="add-card"><i class="flaticon-bag"></i><span>Carrinho</span></a>
							<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
						</div>
					</div>
					<div class="pi-text">
						<h6>R$29,90</h6>
						<p>T-shirt</p>
					</div>
				</div>
				<div class="product-item">
					<div class="pi-pic">
						<img src="./img/produtos/3.jpg" alt="">
						<div class="pi-links">
							<a href="#" class="add-card"><i class="flaticon-bag"></i><span>Carrinho</span></a>
							<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
						</div>
					</div>
					<div class="pi-text">
						<h6>$ 69,90</h6>
						<p>Calça Jeans</p>
					</div>
				</div>
				<div class="product-item">
						<div class="pi-pic">
							<img src="./img/produtos/4.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>carrinho</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>R$45,00</h6>
							<p>Flamboyant Pink Top </p>
						</div>
					</div>
				<div class="product-item">
						<div class="pi-pic">
							<img src="./img/produtos/6.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>Carrinho</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>R$39,00</h6>
							<p>Flamboyant Pink Top </p>
						</div>
					</div>
			</div>
		</div>
	</section>
	<!-- letest product section end -->
	<!-- Product filter section -->
	<section class="product-filter-section">
		<div class="container">
			<div class="section-title">
				<h2>PRODUTOS MAIS VENDIDOS</h2>
			</div>
			<ul class="product-filter-menu">
				<li><a href="#">Jaquetas</a></li>
				<li><a href="#">Regatas</a></li>
				<li><a href="#">Jeans</a></li>
				<li><a href="#">Vestidos</a></li>
				<li><a href="#">Calça Jeans</a></li>
				<li><a href="#">Touca</a></li>
				<li><a href="#">T-shirt</a></li>
			</ul>
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="./img/produtos/5.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>Carrinho</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$39,90</h6>
							<p>Saia preta com branca</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<div class="tag-sale">À venda</div> 
							<img src="./img/produtos/6.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>Carrinho</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>R$29,90</h6>
							<p>Touca de lã</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="./img/produtos/7.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>Carrinho</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>R$ 49,90</h6>
							<p>Tenis</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="./img/produtos/8.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>Carrinho</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>R$ 43,90</h6>
							<p>Chapeu</p>
						</div>
					</div>
				</div>
			</div>
</div>
			<div class="text-center pt-5">
				<button class="site-btn sb-line sb-dark">Saiba mais</button>
			</div>
		</div>
	</section>
	<!-- Product filter section end -->
<!-- Footer section -->
<section class="footer-section">
		<div class="container">
			<div class="footer-logo text-center">
		<a href="index.html"><img src="./img/logo.jfif" alt=""></a> 
			</div>
					<div class="social-links-warp">
			<div class="container">
				<div class="social-links">
					<a href="" class="instagram"><i class="fa fa-instagram"></i><span>instagram</span></a>
					<a href="" class="pinterest"><i class="fa fa-pinterest"></i><span>pinterest</span></a>
					<a href="" class="facebook"><i class="fa fa-facebook"></i><span>facebook</span></a>
					<a href="" class="twitter"><i class="fa fa-twitter"></i><span>twitter</span></a>
					<a href="" class="youtube"><i class="fa fa-youtube"></i><span>youtube</span></a>
				</div>
     		</div>
		</div>
	</section>

    	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.nicescroll.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/main.js"></script>
		</body>
</html>