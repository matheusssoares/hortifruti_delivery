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
		    <style>			       
			    .mdl-card {
				    width: 100%;
				    margin-bottom: 20px;
			    }
			    .img_checkout img {
			        width: 150px;
			        height: 130px;
			        margin-left: 20px;
			        margin-top: 15px;
			    }
			    .text-truncate {
				    overflow: hidden;
				    text-overflow: ellipsis;
				    white-space: nowrap;
				}
				.atualizar{
					border: medium none;
					background-color: #45BF61;
				    color: #fff;
				    height: 40px;
				    padding: 0 20px;
				    font-weight: 700;
				}
				.atualizar:hover{
					background-color: #333333;
					color: #FFF;
				}				
				.limpar {
					border: medium none;
					background-color: #F44336;
				    color: #fff;
				    height: 40px;
				    padding: 0 20px;
				    font-weight: 700;
				}
				.limpar:hover{
					background-color: #333333;
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
					<img src="<?php echo base_url('assets/site/images/page/about.jpg')?>">
				</a>
				<div class="banner-info">
					<h2 class="title30 color">CHECKOUT</h2>
				</div>						
		    </div>	
				<!-- ENd Banner -->
				<div style="margin-top: 20px;" class="content-cart-checkout woocommerce">
					<h2 class="title30 font-bold text-uppercase">Carrinho de Compras</h2>
					<?php 
			          $pdo = new PDO('mysql:host=localhost;dbname=sisgel', 'root', '');                 
			          if (isset($_SESSION['carrinho']) AND !empty($_SESSION['carrinho'])) { 
			         ?>
					<form class="form-cupom" method="post">
						<div class="table-responsive">
							<table class="shop_table cart table">
								<thead>
									<tr>
										<th class="product-remove">&nbsp;</th>
										<th class="product-thumbnail">&nbsp;</th>
										<th class="product-name">Produtos</th>
										<th class="product-price">Preço</th>
										<th class="product-quantity">Quantidade</th>
										<th class="product-subtotal">Total</th>
									</tr>
								</thead>
								<tbody>
									<?php    
				                        $cont = count($_SESSION['carrinho']);
				                        $total = 0;
				                        foreach ($_SESSION['carrinho'] as $key => $value){
				                          $idProduto = $value['produto_id'];
				                          $con = $pdo->prepare("SELECT * FROM produtos WHERE id_prod = $idProduto");
				                          $con->execute();
				                          $ln = $con->fetch(PDO::FETCH_ASSOC);
				              
				                          $id = $key;
				                          $nome = utf8_encode($ln['nome_prod']);
				                          $qtd = $value['qtd'];
				                          $img = $ln['img_prod'];
				                          $ing = utf8_encode($ln['ingrediente_prod']);
				                          $med = strtolower($ln['medida']);
				                          
				                          $valor = number_format($ln['preco_prod'], 2, ",", ".");
				                          $sub = number_format($ln['preco_prod'] * $value['qtd'], 2, ",", ".");
				                          
				                          //SOMA TUDO
				                          $total += $ln['preco_prod'] * $value['qtd'];
				                          $totalCarrinho = number_format($total, 2, ",",".");
				                    ?> 
									<tr class="cart_item">
										<td class="product-remove">
											<a id="excluir_prod" data-id="<?php echo $id ?>" class="remove" href=""><i class="fa fa-trash"></i></a>
										</td>
										<td class="product-thumbnail">
											<a href="#"><img  src="upload/fotos_produtos/<?php echo $img?>" alt=""/></a>					
										</td>
										<td class="product-name" data-title="Product">
											<a href="#"><?php echo $nome ?></a>					
										</td>
										<td class="product-price" data-title="Price">
											<span class="amount"><?php echo $valor ?></span>					
										</td>
										<td class="product-quantity" data-title="Quantity">
											<div class="detail-qty info-qty border radius6 text-center">
												<a href="" id="removeIten" data-id="<?php echo $id ?>" class="qty-down"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
												<span class="qty-val"><?php echo $qtd ?></span>
												<a href="" id="addItem" data-id="<?php echo $id ?>" class="qty-up"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
											</div>		
										</td>
										<td class="product-subtotal" data-title="Total">
											<span class="amount"><?php echo $sub ?></span>					
										</td>
									</tr>
									<?php } ?>
									<tr>
										<td class="actions" colspan="6">
											<div class="coupon">
												<button id="esvaziar" class="button mdl-button limpar">Esvaziar carrinho</button>
											</div>
											<a href="<?php echo base_url('#todas') ?>" class="atualizar mdl-button">Continuar comprando
											</a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</form>
		<?php foreach ($config as $ok): ?>
									
		<?php endforeach ?>
					<div class="cart-collaterals">
						<div class="cart_totals ">
							<h2>Detalhes carrinho</h2>
							<div class="table-responsive">
								<table class="table">
									<tbody>
										<tr class="cart-subtotal">
											<th>Subtotal</th>
											<td><strong class="amount">R$ <?php echo $totalCarrinho?></strong></td>
										</tr>
										<tr class="cart-subtotal">
											<th>Desconto</th>
											<td><strong class="amount">R$ 0,00</strong></td>
										</tr>
										<tr class="shipping">
											<th>Taxa de Entrega</th>
											<td>
												<ul class="list-none" id="shipping_method">								
													<?php
												 		if($total >= $ok->min_entrega){
												 		 $taxa = 0.00;
												 		} else {
												 			$taxa = $ok->taxa_entrega;
												 		}
											 		?>
													<li>
														<strong class="amount">
															R$  <?php echo number_format($taxa, 2,',', '.');?>		
														</strong>
													</li>	
													<li>
														<div class="alert alert-danger" role="alert">
								                            Sem taxa de entrega nas compras acima de R$ <?php echo number_format($ok->min_entrega, 2, ',', '.') ?>.
								                        </div>
													</li>												
												</ul>
											</td>
										</tr>
										<tr class="order-total">
											<?php $total_final = ($total + $taxa);?>									
											<th>Total</th>
											<td>
												<strong>
													<span class="amount">
														R$ <?php echo   number_format($total_final, 2,',', '.'); ?>
													
													</span>
												</strong>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="wc-proceed-to-checkout">
								<a class="checkout-button button alt wc-forward bg-color" href="<?php echo base_url('entrar');?>">Fechar conta</a>
							</div>
						</div>
					</div>
				</div>
				<?php } else { ?>	              
				<div class="jumbotron">
				  <h2>Carrinho vazio!</h2>
				  <p>Não há produtos em seu carrinho, clique no botão abaixo para ir às compras... </p>
				  <p><a class="atualizar mdl-button" href="<?php echo base_url('#todas') ?>" role="button">IR ÀS COMPRAS</a></p>
				</div>
				<?php } ?>
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
    $('.resultado_ver').hide();
    $('.resultado_fal').hide();
    $('body').on('click', '#addItem', function(e){
        var url = "<?php echo base_url('carrinho/addmaisum')?>";
        var id_Produto = $(this).attr('data-id');
        $.post(url, {acao: 'addIten', id: id_Produto}, function(retorno){
           if (retorno == 'YES') {
             window.location.reload();
           }
        }, "json");
        return false;
    });

    $('body').on('click', '#removeIten', function(e){
       var key = $(this).attr('data-id');
       var url = "<?php echo base_url('carrinho/delmenosum')?>";
        //Requisição
        $.post(url, {acao: 'deleteIten', id: key}, function(retorno){
            window.location.reload();
        }, "json");
        return false;
    });

    $('body').on('click', 'a#excluir_prod', function(e){
       var key = $(this).attr('data-id');
       var url = "<?php echo base_url('carrinho/excluir_prod')?>";
        //Requisição
        $.post(url, {acao: 'deleteIten', id: key}, function(retorno){
            window.location.reload();
        }, "json");
        return false;
    });

    $('body').on('click', '#esvaziar', function(e){
      var url = "<?php echo base_url('carrinho/esvaziarcarrinho')?>";
        $.post(url, {acao: 'esvaziar'}, function(retorno){
           if (retorno == 'SIM'){
            window.location.reload();
           }
        },"json");
        return false;
    });

    $('.validarform').on('submit', function(){
        var dados = $('.validarform').serialize();
        var url = "<?php echo base_url('carrinho/cupom')?>";
        var total = "<?php echo $total ?>";        
        $.ajax({
            url: url,
            type: 'POST',
            data: dados,
            success: function(data){
                $('.resultado_fal').show();
            }

        });
        return false;
    });

 });
 </script>
</body>
</html>