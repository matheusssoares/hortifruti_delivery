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
	<?php foreach ($name_cat as $key) {}  ?>
	<!-- End Header -->
	<section id="content">
		<div class="container">
			<div class="shop-banner banner-adv line-scale zoom-image">
				<a href="#" class="adv-thumb-link">
					<img src="<?php echo base_url('assets/site/images/page/about.jpg')?>">
				</a>
				<div class="banner-info">
					<h2 class="title30 color"><?php echo $key->nome_cat ?></h2>
				</div>						
		    </div>
		    <div class="filtros">
		    	<div class="row">
		    		<div class="col-md-10">
		    			<p><b><?php echo $num_prod ?></b> Produtos encontrados</p>
		    		</div>
		    		<div class="col-md-2">
		    			<select class="filtrar form-control" name="filtro">
				    		<option  value="0" > Ordenar por:</option>
				    		<option  value="1"> Ordem alfabética, A - Z</option>
				    		<option  value="2"> Ordem alfabética, Z - A</option>
				    		<option  value="3"> Preço, do menor ao maior</option>
				    		<option  value="4"> Preço, do maior ao menor</option>
				    	</select>
		    		</div>
		    	</div>
		    </div>
		    <div class="box-vendas2">

			</div>
		</div> 
		 
		
		<?php foreach ($config as $ok): ?>
									
		<?php endforeach ?>
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
		    	$('.filtrar').change(function() {
		    	   var id = "<?php echo $teste ?>";
				   var filtro = $('.filtrar option:selected').val();
				   if(filtro != 0){
				   		$.ajax({
				          url: "<?php echo base_url('admin/homevendas/filtrar');?>",
				          type: 'POST',
				          data: 'filtro='+filtro+'&id_cat='+id,
				          success: function (data) {
				             $('.box-vendas2').html(data);
				              //console.log(data);			           
				          }
				        });
				   } else {
				   	console.log('É igual: ', filtro);
				   }

				}); 

			      atualiza();
			      function atualiza(){
			        var url = "<?php echo base_url('admin/homevendas');?>";
			        var id = "<?php echo $teste ?>";
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