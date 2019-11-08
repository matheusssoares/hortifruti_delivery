<!DOCTYPE html>
<html>
<head>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<meta name="description" content="Site de delivery de frutas e vegetais em Belém do Pará, com o intuito de levar ao cliente os melhores produtos para o consumo, levando em conta o conforto e a comodidade em fazer o pedido em site agradável e aguardar a retirada em seu lar, tudo simples com um site moderno e eficaz!" />
		<meta name="keywords" content="Frutas,Vegetais,Belém,Pará,Norte" />
		<meta name="robots" content="noodp,index,follow" />
		<meta name='revisit-after' content='1 days' />
		<title><?php echo $title ; ?> </title>
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
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
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/site/css/browser.css') ?>" media="all"/>
		<style type="text/css">
			.box-vendas2 {
				margin: 40px;
			}
			.box-vendas2 img{
				width: 250px;
				height: 200px;
			}
			.linkcat:hover{
				cursor: pointer;
			}
			.badge-type {
				position: relative;
			    top: -22px;
			    left: 26px;
			    background-color: red;
			}
			.iten-cart{
				position: relative;
				right: 15px;
			}
			.addcart-link:hover{
				cursor: pointer;
			}
		</style>		
		<!-- <link rel="stylesheet" type="text/css" href="css/rtl.css" media="all"/> -->

	</head>
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
									<a href="<?php echo base_url('politica-de-entrega') ?>">
										<h5 class="entrega" style="color: red; cursor: pointer;">
											No momento entregamos somente em Belém-PA 
										</h5>
									</a>
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
										<a href="<?php echo base_url()?>">INÍCIO</a>
									</li>
									<?php 
										foreach ($categorias as $cv) {
									?>
									<?php
										 $teste = $this->uri->segment(3);
										 if($teste == $cv->id_cat){
									?>
									<li class="current-menu-item">
										<a href="<?php echo base_url('categoria/segmento/')?><?php echo $cv->id_cat ?>"><?php echo $cv->nome_cat ?></a>
									</li>
									<?php } else { ?>
									<li>
										<a href="<?php echo base_url('categoria/segmento/')?><?php echo $cv->id_cat ?>">		<?php echo $cv->nome_cat ?>											
										</a>
									</li>
									<?php } ?>
									<?php } ?>
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
	<!-- End Header -->
	<section id="content">	 
		 <div class="container">
			<div class="shop-banner banner-adv line-scale zoom-image">
				<a href="#" class="adv-thumb-link">
					<img src="<?php echo base_url('assets/site/images/page/about.jpg')?>">
				</a>
				<div class="banner-info">
					<h2 class="title30 color">POLÍTICA DE ENTREGA</h2>
				</div>						
		    </div>
		    <div class="row">
		    	<div class="col-12">
		    		<h3 style="text-align: center; color: #45BF61;">Entregas e Horários</h3>
		    	</div>
		    	<div class="conteudo">
		    		<p style="text-align: justify;">
		    			<b>Atualmente entregamos somente em Belém PA.</b>
		    			Pedidos realizados após às 11:00h, a entrega poderá ser feita no próximo período: Vespertino, das 12:00 às 18:00h.
Pedidos realizados após às 17:00h, a entrega poderá ser feita no próximo dia útil.


Veja as regiões atendidas:
Zonas Sul, Oeste e Centro
Zona Norte
Zona Leste e Guarulhos
Santo André, São Bernardo do Campo, São Caetano do Sul e Diadema
Granja Viana, Barueri, Santana de Parnaíba e Cotia


Se o seu CEP não consta nessa faixa, pedimos desculpas, pois o Fruta Delivery ainda está em estudando a entrega em outras regiões.

O preço do Frete é fixo:
R$ 15,00 para compras abaixo de R$ 120,00
Frete Grátis para compras acima de R$ 120,00

O Pedido mínimo para entrega é de R$ 30,00

As entregas feitas pelo Fruta Delivery são realizadas de segunda-feira a sexta-feira, das 8hs às 22hs.

Nosso prazo de entrega é de até 2hrs contado a partir da confirmação do pagamento para pedidos menores. Para pedidos muito grande que necessite de um meio de transporte maior, a entrega pode levar de 3 a 4 horas. Não entregamos nos sábados, domingos e feriados. Pedidos realizados nesses dias serão entregues no próximo dia útil.

A disponibilidade dos produtos está sujeita a safra e estoque. Caso não encontre o produto que deseja, entre em contato conosco para vermos a possibilidade de encomendá-lo. Após isso avisaremos sobre a solicitação.

Solicitamos que tenha uma pessoa autorizada pelo comprador(a) no endereço informado, e que ela seja maior de 18 anos, portando um documento de identificação para receber o pedido e assinar o protocolo.

Após o pedido ser finalizado não será possível alterar a forma de entrega, solicitar adiantamento ou prioridade. Nossos prazos de entrega levam em consideração o estoque, a região, o processo de emissão da nota fiscal e o tempo de preparo ou separação do pedido. Em cada atualização no status do pedido o sistema envia, automaticamente, e-mails de alerta. Por isso, é importante manter seu e-mail atualizado no cadastro.

					</p>
		    	</div>
		    </div>
		</div>
		
		<?php foreach ($config as $ok): ?>
									
		<?php endforeach ?>
	</div><!-- End Wrap -->
	</section>
	<!-- End Content -->
	<?php require_once("includes/footer.php"); ?>
	<!-- End Footer -->
	<div id="loading">
		<div id="loading-center">
			<div id="loading-center-absolute">
				<div class="object" id="object_four"></div>
				<div class="object" id="object_three"></div>
				<div class="object" id="object_two"></div>
				<div class="object" id="object_one"></div>
			</div>
		</div>
	</div>
	<!-- End Preload -->

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
</body>
</html>