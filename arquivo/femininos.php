<?php
$Feminino = $_GET['id'];
$Feminino = mysqli_query($link,'SELECT * FROM feminino');
if(mysqli_num_rows($Feminino)<1){
    echo 'Setor feminino não encontrado.';
}else{
    $row = mysqli_fetch_object($Feminino);
    ?>
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