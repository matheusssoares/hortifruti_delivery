<!DOCTYPE html>
	<html lang="pt-br">
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
									<li class="current-menu-item">
										<a href="<?php echo base_url()?>">INÍCIO</a>
									</li>
									<?php 
										foreach ($categorias as $cv) {
									?>
									<li>
										<a href="<?php echo base_url('categoria/segmento/')?><?php echo $cv->id_cat ?>">		<?php echo $cv->nome_cat ?>											
										</a>
									</li>
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
		<div class="banner-slider bg-slider banner-slider2 parallax-slider">
			<div class="wrap-item" data-pagination="false" data-navigation="true" data-transition="fade" data-autoplay="true" data-itemscustom="[[0,1]]">
				<div class="item-slider item-slider2">
					<div class="banner-thumb"><a href="#"><img src="<?php echo base_url('assets/site/images/home/home2/slide1.jpg')?>" alt="" /></a></div>
					<div class="banner-info text-center">
						<div class="img-info animated" data-animated="zoomIn"><img src="<?php echo base_url('assets/site/images/home/home2/sl1.png')?>" alt="" /></div>
						<div class="text-info animated" data-animated="bounceInUp">
							<h2 class="title30 color paci-font">Frutas & Legumes</h2>
							<h2 class="color2 font-bold text-uppercase title30">Aproveite nossas ofertas de frutas e legumes</h2>
							<div class="banner-button">
								<a href="#" class="btn-arrow color style2">ir as compras</a>
								<a href="#" class="btn-arrow bg-color style2">mais detalhes</a>
							</div>
						</div>
					</div>
				</div>
				<div class="item-slider item-slider2">
					<div class="banner-thumb"><a href="#"><img src="<?php echo base_url('assets/site/images/home/home2/slide2.jpg')?>" alt="" /></a></div>
					<div class="banner-info text-center">
						<div class="img-info animated" data-animated="flipInY"><img src="<?php echo base_url('assets/site/images/home/home2/sl2.png')?>" alt="" /></div>
						<div class="text-info animated" data-animated="bounceInUp">
							<h2 class="title30 color paci-font">Sucos Especiais</h2>
							<h2 class="color2 font-bold text-uppercase title30">aqui você encontra os melhores sucos da região!</h2>
							<div class="banner-button">
								<a href="#" class="btn-arrow color style2">ir as compras</a>
								<a href="#" class="btn-arrow bg-color style2">mais detalhes</a>
							</div>
						</div>
					</div>
				</div>
				<div class="item-slider item-slider2">
					<div class="banner-thumb"><a href="#"><img src="<?php echo base_url('assets/site/images/home/home2/slide3.jpg')?>" alt="" /></a></div>
					<div class="banner-info text-center">
						<div class="img-info animated" data-animated="flipInX"><img src="<?php echo base_url('assets/site/images/home/home2/sl3.png')?>" alt="" /></div>
						<div class="text-info animated" data-animated="bounceInUp">
							<h2 class="title30 color paci-font">Frutas naturais</h2>
							<h2 class="color2 font-bold text-uppercase title30">confira nosso estoque de frutas naturais</h2>
							<div class="banner-button">
								<a href="#" class="btn-arrow color style2">ir as compras</a>
								<a href="#" class="btn-arrow bg-color style2">mais detalhes</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Banner -->
		<div class="container">
			
			<div class="product-bestsale best-sale6">
				<h2 class="title30 font-bold title-box1 text-center">Os Melhores Produtos</h2>
				<ul class="text-center title-tab1 list-inline-block">
					<li class="active"><a id="todas" data-toggle="tab">TODAS</a></li>
					<?php foreach ($categorias as $key) {
						$nome_cat = $key->nome_cat;
					?>
					<li><a class="linkcat" id="<?php echo $key->id_cat;?>"><?php echo $nome_cat; ?></a></li>
					<?php } ?>
				</ul>
				<div class="box-vendas2">

				</div>
			</div>
		</div><!-- End Container -->
		<div class="deal-box2">
			<div class="title-deal-box2 white bg-color">
				<h2 class="title30 paci-font">Política de Entrega</h2>
				<h2 class="title30 text-uppercase font-bold">Saiba como funciona...</h2>
			</div>			
		</div>
		<!-- End Deal Box -->
		<?php foreach ($config as $ok): ?>
									
		<?php endforeach ?>
		<div class="why-choise box-parallax">
			<div class="container">
				<div class="choise-title text-center wow zoomIn">
					<h2 class="title30 paci-font color">Delivery expresso</h2>
					<h2 class="title30 font-bold text-uppercase white"><?php echo $ok->nome ?></h2>
				</div>
				<div class="list-service2">
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6">
							<div class="item-service1 table wow fadeInRight">
								<div class="service-icon">
									<a href="#"><i class="fa fa-bus"></i></a>
								</div>								
								<div class="service-info">
									<h3 class="title18"><a href="#" class="white">Delivery Grátis</a></h3>
									<p class="desc white">Nas compras acima de R$ <?php echo number_format($ok->min_entrega, 2, ',', '.') ?> a entrega é por nossa conta :)</p>
								</div>
							</div>
							<div class="item-service1 table wow fadeInRight">
								<div class="service-icon">
									<a href="#"><i class="fa fa-refresh"></i></a>
								</div>
								<div class="service-info">
									<h3 class="title18"><a href="#" class="white">Ofertas Especiais</a></h3>
									<p class="desc white">Todos os dias preparamos ofertas imperdíveis para você aproveitar :) </p>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6">
							<div class="item-service1 table wow fadeInRight">
								<div class="service-icon">
									<a href="#"><i class="fa fa-thumbs-o-up"></i></a>
								</div>
								<div class="service-info">
									<h3 class="title18"><a href="#" class="white">Melhor Custo/Benefício</a></h3>
									<p class="desc white">Preços que cabem no seu bolso</p>
								</div>
							</div>
							<div class="item-service1 table wow fadeInRight">
								<div class="service-icon">
									<a href="#"><i class="fa fa-volume-control-phone"></i></a>
								</div>
								<div class="service-info">
									<h3 class="title18"><a href="#" class="white">Suporte/Atendimento</a></h3>
									<p class="desc white">Entre em contato conosco para tirar qualquer dúvida!</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="fruit-top wow slideInLeft"><img src="<?php echo base_url('assets/site/images/home/home2/fruit-top.png')?>" alt="" /></div>
			</div>
		</div>

		<div class="deal-box2">
			<div class="title-deal-box2 white bg-color">
				<h2 class="title30 paci-font">Faça seu Pedido</h2>
				<h2 class="title30 text-uppercase font-bold">45% de Desconto</h2>
			</div>			
		</div>
	</div><!-- End Wrap -->
	</section>
	<!-- End Content -->
	<?php require_once("includes/footer.php"); ?>
	<!-- End Footer -->
	
	<a href="" class="scroll-top round">
		<span id="itensCarrinhob" class="badge-type badge badge-danger"> 0 </span>
		<i class="iten-cart fa fa-shopping-cart" aria-hidden="true"></i>
	</a>
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
		<script type="text/javascript">
		    $(document).ready(function(){
		    	$('.round').on('click', function(){
                    window.location.href='checkout';
		    	});
			      atualiza();
			      function atualiza(){
			        var url = "<?php echo base_url('admin/homevendas');?>";
			        var id = 0;
			        $.ajax({
			          url: url,
			          type: 'POST',
			          data: 'id_cat='+id,
			          success: function (data) {
			              $('.box-vendas2').html(data);			           
			          }
			        });
			      }
			      

			      $('.linkcat').on('click', function(){
			            var url = "<?php echo base_url('admin/homevendas');?>";
			            var id = $(this).attr('id');
			            $.ajax({
			              url: url,
			              type: 'POST',
			              data: 'id_cat='+id,
			              success: function (data) {
			                  $('.box-vendas2').html(data);
			              }
			            });  
			      });//onclick

			      $('#todas').on('click', function(){
			                atualiza() ;
			      });//onclick
                     //começar funções js para adicionar produtos ao carrinho
				  $('body').on('click','.addcart-link', function(){				    
				        var idproduto = $(this).attr('id');
				        var url = "<?php echo base_url('Carrinho/add')?>";
				        $.ajax({
				           url: url,
				           type: 'POST',
				           data: 'produto='+idproduto+'&acao=add',
				           success: function(data){
				             console.log(data);
				              getCart(data);
				              getItens();
				           }
				        });
				  });//body-add
				function getItens(){
					  var url = "<?php echo base_url('Carrinho/listarcarrinho')?>";
					  $.post(url, {acao: 'getCarrinho'}, getCart, "json");
				}
				    //MOSTRA OS PRODUTOS NO CARRINHO
				getItens();
				//FUNÇÃO GETCART
				function getCart(data){
				        var countCartDoisb = $("#itensCarrinhob");
				        var itenscart = $("#item-carrinho");
				        //INSERIR INFORMAÇÕES
				        itenscart.empty().text(data.count+" itens | R$ "+data.totalCarrinho );
				        countCartDoisb.html(data.count);

				    }//final getCart
			  }); //Final Document Ready
		</script>		

	</body>
	</html>	