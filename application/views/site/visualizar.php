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
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/site/css/color2.css') ?>" media="all"/>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/site/css/theme.css') ?>" media="all"/>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/site/css/responsive.css') ?>" media="all"/>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/site/css/browser.css') ?>" media="all"/>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/site/css/visualizar.css') ?>">   
		
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
	<section id="content">		
		<div class="container">
			<div class="shop-banner banner-adv line-scale zoom-image">
				<a href="#" class="adv-thumb-link">
					<img src="<?php echo base_url('assets/site/images/shop/banner-detail.jpg')?>">
				</a>
				<div class="banner-info">
					<h2 class="title30 color">Detalhes</h2>
					<div class="bread-crumb white">
						<a href="<?php echo base_url();?>" class="white">Início</a>
						<span>Detalhes - Produtos</span>
					</div>
				</div>						
		    </div>	
			<!-- ENd Banner -->

			<div class="content-shop">
				<div class="row">
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="sidebar-left sidebar-shop">							
							<!-- End Widget -->
							<div class="widget widget-category">
								<h2 class="title18 title-widget font-bold">Carrinho de compras <i class="fa fa fa-shopping-cart"></i></h2>
								<?php if (isset($_SESSION['carrinho'])){ ?>
								<div class="carrinho-left">
									<div style="padding: 10px;" class="row">
	                                    <h6 class="txt-header col-md-3 col-sm-3 col-xs-3">Produto</h6>
	                                    <h6 class="txt-header text-center col-md-3 col-sm-3 col-xs-3">Qtde</h6>
	                                    <h6 class="txt-header text-center col-md-3 col-sm-3 col-xs-3">Preço</h6>
	                                    <h6 class="txt-header col-md-3 text-right col-sm-3  col-xs-3">Subtotal</h6>
                                	</div> 
                                	<hr style="margin-top: -2px;">
                                	<?php    
	                                  $pdo = new PDO('mysql:host=localhost;dbname=sisgel', 'root', '');
	                                  $cont = count($_SESSION['carrinho']);
	                                  $total = 0;
	                                  foreach ($_SESSION['carrinho'] as $chave => $value){
	                                      $idProduto = $value['produto_id'];
	                                      $con = $pdo->prepare("SELECT * FROM produtos WHERE id_prod = $idProduto");
	                                      $con->execute();
	                                      $ln = $con->fetch(PDO::FETCH_ASSOC);
	                          
	                                      $id = $chave;
	                                      $nome = ucwords(utf8_encode(strtolower($ln['nome_prod'])));
	                                      $qtd = $value['qtd'];
	                                      
	                                      $valor = number_format($ln['preco_prod'], 2, ",", ".");
	                                      $sub = number_format($ln['preco_prod'] * $value['qtd'], 2, ",", ".");
	                                      
	                                      //SOMA TUDO
	                                      $total += $ln['preco_prod'] * $value['qtd'];
	                                      $totalCarrinho = number_format($total, 2, ",",".");

	                                ?>
                                	<div style="margin-top: -15px; padding: 10px;" class="row">
	                                    <h6 class="col-md-3 text-truncate col-sm-3 col-xs-3"><?php echo $nome ?></h6>
	                                    <h6 class="col-md-3 text-center col-sm-3 col-xs-3"><?php echo $qtd ?></h6>
	                                    <h6 class="col-md-3 text-center col-sm-3 col-xs-3"><?php echo $valor ?></h6>
	                                    <h6 class="col-md-3 text-right col-sm-3 col-xs-3"><?php echo $sub ?></h6>                     
	                                </div>
	                                <?php } ?>	                                
								</div>
								<?php } else { ?>
									<div class="carrinho-left">
										<p style="padding: 10px;" class="text-danger text-center">Seu carrinho está vazio :(</p>
									</div>
									<?php } ?>
									<div class="button">										
										<a href="<?php echo base_url('#todas') ?>" class="col-md-6 col-sm-6 col-xs-6 checkout mdl-button">
											Voltar
										</a>
										<a href="<?php echo base_url('checkout') ?>" class="col-md-6 col-sm-6 col-xs-6 voltar mdl-button">
											Checkout
										</a>
									</div>
							</div>							
						</div>
						
					</div>
					<?php foreach ($produtos as $chave) { ?>
						<div class="col-md-8 col-sm-8 col-xs-12">
						<div class="product-detail">
							<div class="row">
								<div class="col-md-6 col-sm-12 col-xs-12">
									<div class="detail-gallery">
										<div class="mid">
											<img src="<?php echo  base_url('upload/fotos_produtos/')?><?php echo $chave->img_prod;?>">
										</div>										
									</div>
									<!-- End Gallery -->
								</div>
								<div class="col-md-6 col-sm-12 col-xs-12">
									<div class="detail-info">
										<h2 class="title30 font-bold"><?php echo $chave->nome_prod;  ?></h2>
										<div class="product-price">
											<ins class="color"><span> <?php echo $chave->medida ?> - R$ <?php echo number_format($chave->preco_prod, 2, ',','.'); ?></span></ins>
										</div>
										<div class="product-rate">
											<div class="product-rating" style="width:100%"></div>
										</div>
										<p class="desc"><?php echo $chave->ingrediente_prod;  ?></p>
										<ul class="list-inline-block wrap-qty-extra">
											<li>
												<div class="detail-qty">
													<a href="#" class="qty-down silver"><i class="fa fa-arrow-circle-down" aria-hidden="true"></i></a>
													<span class="qty-val" id="qtde-cart">1</span>
													<a href="#" class="qty-up silver"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i></a>
												</div>
											</li>
											<li>
												<div class="product-extra-link">
													<a class="addcart-link" id="<?php echo base64_encode($chave->id_prod);?>">Fazer Pedido</a>
												</div>
											</li>
										</ul>
										<p class="desc info-extra">
											<label>Categoria:</label><a href="#" class="color"><?php echo $chave->nome_categoria ?></a>
										</p>
										<p class="desc info-extra">
											<label>ID Produto:</label><span class="color"><?php echo $chave->id_prod ?></span>
										</p>
										<p class="desc info-extra">
											<label>Compartilhar:</label>
											<a href="#" class="silver"><i class="fa fa-facebook"></i></a>
											<a href="#" class="silver"><i class="fa fa-twitter"></i></a>
											<a href="#" class="silver"><i class="fa fa-instagram"></i></a>
										</p>
									</div>			
								</div>
							</div>
						</div>
				</div>
				<?php } ?>
				</div>
			</div>	
		</div>
<div class="modal fade" id="retorno" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">      
      <div class="modal-body">
        <div class="carregando">           
            <img class="gif-carregar" src="<?php echo base_url('assets/clientes/images/carregando.gif') ?>">
            <h3 style="margin-top: -50px;" class="text-center">Adicionando ao carrinho, aguarde...</h3>
        </div>
        <div class="sucesso-modal">
            <img class="foto-card-success" src="<?php echo base_url('assets/site/images/card-success.png') ?>">
            <h3 class="text-center">Parabéns, produto adicionado!</h3>
        </div>
        <div class="erro-modal">
            <img class="foto-card-success" src="<?php echo base_url('assets/site/images/card-error.png') ?>">
            <h3 style="margin-top: 10px;" class="text-center">Desculpe, houve um erro em sua solicitação!</h3>
        </div>

      </div>      
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
		</section>	
		<?php foreach ($config as $ok): ?>
									
		<?php endforeach ?>
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
    //adicionar ao carrinho
    $('.addcart-link').click(function(){
    	var qtdecart = document.getElementById('qtde-cart').innerHTML;
    	var idproduto = $(this).attr('id');
    	var url = "<?php echo base_url('carrinho/add_cart') ?>";
    	console.log(url);
    	$.ajax({
           url: url,
           type: 'POST',
           data: 'produto='+idproduto+'&acao=add'+'&qtde_prod='+qtdecart,
           success: function(data){              
              if(data){
              	$('#retorno').modal('show');                  
                      setTimeout(function(){
                          $('.carregando').hide();
                          $('.sucesso-modal').show();
                          setTimeout(function(){
                                window.location.reload();
                            }, 3*1000)
                        
                        }, 5*1000) 
              }
           }
        });
    });
 });
 </script>
</body>
</html>