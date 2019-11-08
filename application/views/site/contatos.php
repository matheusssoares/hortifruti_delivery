<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<meta name="description" content="Carrinho de compras para finalizar pedido e processar os dados para a entrega em delivery" />
		<meta name="keywords" content="Frutas,Vegetais,Belém,Pará,Norte" />
		<meta name="robots" content="noodp,index,follow" />
		<meta name='revisit-after' content='1 days' />
		<title><?php echo $title ; ?> </title>
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.min.css">
		<link rel="stylesheet" href="<?php echo base_url('assets/site/css/libs/font-awesome.min.css') ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/site/css/libs/ionicons.min.css') ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/site/css/libs/bootstrap.min.css') ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/site/css/libs/bootstrap-theme.min.css') ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/site/css/libs/jquery.fancybox.css') ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/site/css/libs/jquery-ui.min.css') ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/site/css/libs/owl.carousel.css') ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/site/css/libs/owl.transitions.css') ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/site/css/libs/jquery.mCustomScrollbar.css') ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/site/css/libs/owl.theme.css') ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/site/css/libs/slick.css') ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/site/css/libs/animate.css') ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/site/css/libs/hover.css') ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/site/css/color2.css') ?>" media="all"/>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/site/css/theme.css') ?>" media="all"/>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/site/css/responsive.css') ?>" media="all"/>
		<style type="text/css">
			.texto{
				font-size: 18px;
				color: #555;
			}
			.texto-titulo{
				font-size: 40px;
			}
		</style>
		
</head>
<body class="preload">
	<div class="wrap">
	<header id="header">
		<div class="header">
			<div class="top-header top-header2">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-sm-4 hidden-xs">
							<ul class="currency-language list-inline-block pull-left">
								<li>
									<div class="language-box">
										<a href="#" class="language-current"><img src="<?php echo base_url('assets/site/images/icon/flag-pt-br.png')?>" alt=""><span>Brasil</span></a>
										<ul class="language-list list-none">
											<li><a href="#"><img src="<?php echo base_url('assets/site/images/icon/flag-pt-br.png')?>" alt=""><span>Brasil</span></a></li>											
										</ul>
									</div>
								</li>
								<li>
									<div class="currency-box">
										<a href="#" class="currency-current"><span>Moeda</span></a>
										<ul class="currency-list list-none">
											<li><a href="#"><span class="currency-index">R$</span>BRL</a></li>
										</ul>
									</div>
								</li>
							</ul>
						</div>
						<div class="col-md-8 col-sm-8 col-xs-12">
							<ul class="info-account list-inline-block pull-right">
								<li><a href="<?php echo base_url('cadastrar')?>"><span class="color"><i class="fa fa-user-o"></i></span>Criar Conta</a></li>
								<li><a href="<?php echo base_url('entrar')?>"><span class="color"><i class="fa fa-key"></i></span>Login</a></li>
								<li><a href="<?php echo base_url('checkout')?>"><span class="color"><i class="fa fa-check-circle-o"></i></span>Checkout</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- End Top Header -->
			<div class="main-header2">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="logo logo2 pull-left">
								<h1 class="hidden">Frutas Belém</h1>
								<a href="#"><img src="<?php echo base_url('assets/site/images/home/home2/logo-frutasbelem.png')?>" alt="" /></a>
							</div>
							<div class="mini-cart-box mini-cart1 pull-right">
								<a class="mini-cart-link" href="<?php echo base_url('checkout')?>">
									<span class="mini-cart-icon title18 color"><i class="fa fa-shopping-basket"></i></span>
									<span class="mini-cart-number" id="item-carrinho">0 Item - <span id="total-carrinho" class="color">R$ 0,00</span></span>
								</a>
								
							</div>
							<form class="search-form search-form2 pull-right">
								<input onblur="if (this.value=='') this.value = this.defaultValue" onfocus="if (this.value==this.defaultValue) this.value = ''" value="Pesquisar no site" type="text">
								<input type="submit" value="">
								<div class="dropdown-box">
									<a href="#" class="dropdown-link"><i class="fa fa-angle-down"></i></a>
									<ul class="dropdown-list list-none">
										<li><a href="#">Produtos secos</a></li>
										<li><a href="#">Vegetais</a></li>
										<li><a href="#">Frutas</a></li>
										<li><a href="#">Sucos</a></li>
									</ul>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- End Main Header -->
			<div class="nav-header2 bg-color header-ontop">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<nav class="main-nav main-nav2 pull-left">
								<ul>
									<li>
										<a href="<?php echo base_url() ?>">INÍCIO</a>
									</li>
									<li>
										<a href="<?php echo base_url('sobre') ?>">SOBRE</a>
									</li>
									<li><a href="<?php echo base_url('galeria') ?>">GALERIA</a></li>
									<li><a href="<?php echo base_url('dicas') ?>">DICAS</a></li>
									<li>
										<a href="<?php echo base_url('promocoes') ?>">PROMOÇÕES</a>
									</li>
									<li class="current-menu-item menu-item-has-children">
										<a href="<?php echo base_url('contatos') ?>">CONTATOS</a>
									</li>
								</ul>
								<a href="#" class="toggle-mobile-menu"><span></span></a>
							</nav>
							<div class="top-social pull-right">
								<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
								<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
								<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
								<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Nav Header -->
		</div>
	</header>
<section id="content">
<div class="container">
			<div class="content-page">
				<div class="contact-map border">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.6123023111363!2d-48.43975578604025!3d-1.4087985989725367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x92a48b086738b0b7%3A0xc408cbdabadfd14b!2sdiCasa!5e0!3m2!1spt-BR!2sbr!4v1510204208390" style="border:0" allowfullscreen="" width="1170" height="380"></iframe>
				</div>
				<div class="contact-info-page">
					<div class="list-contact-info">
						<div class="row">
							<div class="col-md-4 col-sm-4 col-xs-12">
								<div class="item-contact-info text-center">
									<a class="contact-icon color wobble-horizontal" href="#"><i class="fa fa-mobile"></i></a>
									<h2 class="title18 text-upperrcase font-bold">Celular: <a href="#">(91)99940-0826</a></h2>
								</div>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<div class="item-contact-info text-center">
									<a class="contact-icon color wobble-horizontal" href="#"><i class="fa fa-phone"></i></a>
									<h2 class="title18 text-upperrcase font-bold">Telefoe Fixo: <a href="#">(91)3271-7575</a></h2>
								</div>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<div class="item-contact-info text-center">
									<a class="contact-icon color wobble-horizontal" href="mailto:7uptheme@gmail.com"><i class="fa fa-envelope"></i></a>
									<h2 class="title18 text-upperrcase font-bold"><a href="mailto:7uptheme@gmail.com">contato@nortescript.com.br</a></h2>
								</div>
							</div>
						</div>
					</div>
					<p class="desc">Em casos de dúvidas, reclamações ou sugestões utilize um de nossos canais de atendimento. Lembre-se, estamos aqui para esclarer quaisquer dúvidas e estreitar nossa relação entre cliente e empresa</p>
				</div>
				<div class="contact-form-page">
					<h2 class="title30 text-uppercase font-bold">Formulário de Contato</h2>
					<div class="form-contact">
						<form method="post">
							<div class="row">
								<div class="col-md-4 col-sm-4 col-xs-12">
									<input name="name" value="Nome *" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue" type="text">
								</div>
								<div class="col-md-4 col-sm-4 col-xs-12">
									<input name="email" value="Email *" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue" type="text">
								</div>
								<div class="col-md-4 col-sm-4 col-xs-12">
									<input name="celular" value="Celular" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue" type="text">
								</div>
								<div class="col-md-12 col-sm-12 col-xs-12">
									<textarea name="message" cols="30" rows="8" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue"></textarea>
									<input class="shop-button" value="Enviar Mensagem" type="submit">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>	
			<!-- End Content Page -->
		</div>

</section>
	<?php require_once("includes/footer.php"); ?>					
</div>




<script type="text/javascript" src="<?php echo base_url('assets/site/js/libs/jquery-3.2.1.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/site/js/libs/bootstrap.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/site/js/libs/jquery.fancybox.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/site/js/libs/jquery-ui.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/site/js/libs/owl.carousel.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/site/js/libs/jquery.jcarousellite.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/site/js/libs/jquery.elevatezoom.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/site/js/libs/jquery.mCustomScrollbar.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/site/js/libs/slick.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/site/js/libs/popup.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/site/js/libs/timecircles.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/site/js/libs/wow.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/site/js/theme.js') ?>"></script>
<script type="text/javascript">
	$(document).ready(function(){
	 getItens();
	function getItens(){
				  var url = "<?php echo base_url('Carrinho/listarcarrinho')?>";
				  $.post(url, {acao: 'getCarrinho'}, getCart, "json");
				}
	    
	//FUNÇÃO GETCART
	function getCart(data){
	        var countCartDoisb = $("#itensCarrinhob");
	        var itenscart = $("#item-carrinho");
	        //INSERIR INFORMAÇÕES
	        itenscart.empty().text(data.count+" itens | R$ "+data.totalCarrinho );
	        countCartDoisb.html(data.count);

	    }//final getCart
	});
</script>
</body>
</html>