<?php
if ($this->session->userdata('logged_ins') AND (isset($_SESSION['carrinho']))) {
  $session_admin = $this->session->userdata('logged_ins');
  $nomeUsuario = $session_admin['nomeUsuario'];
  $emailUser = $session_admin['emailUser'];

  $pos_espaco = strpos($nomeUsuario, ' ');// perceba que há um espaço aqui
  $primeiro_nome = substr($nomeUsuario, 0, $pos_espaco);
?>  
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title> <?php echo $title; ?> </title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('assets/clientes/css/bootstrap.css')?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/clientes/css/style.css')?>" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="<?php echo base_url('assets/clientes/css/blue.css')?>" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<style type="text/css">
    .pedidos{
        border: 2px solid #1C81D9;
        width: 32%;
        padding: 10px;
        height: auto;
    }
    .txt-cart{
        font-weight: bold;
    }
    .borda-header{
        margin-top: -1px;
        height: 3px !important;
        width: 100%;
        background-color: #F9F9F9;
    }
    .txt-padding{
        padding-bottom: 10px;
    }
    .carregando{
        display: block;
    }
    .gif-carregar{
        width: 450px; height: 350px; margin-top: -70px;
    }
    .sucesso-modal{
        display: none;
    }
    .foto-card-success{
        width: 170px;
        height: 170px;
        margin-left: 30%;
    }
    .erro-modal{
        display: none;
    }
    .btn-fin{
        background-color: #45bf61; color: #FFF; margin-right: auto; margin-left: auto; margin-bottom: 15px;
    }
</style>
</head>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            
                            <!-- Light Logo icon -->
                            <img src="<?php echo base_url('assets/clientes/images/logo-light-icon.png')?>" alt="homepage" class="light-logo" />  
                            

                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                         
                         <!-- Light Logo text -->    
                         <img src="<?php echo base_url('assets/clientes/images/texto-logo.png')?>" class="light-logo" alt="homepage" /></span> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search & enter"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url('assets/clientes/images/1.jpg')?>" alt="user" class="profile-pic m-r-10" />
                            	<?php echo ucfirst(strtolower($primeiro_nome)) ?></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> <a class="waves-effect waves-dark" href="<?php echo base_url('clientes/dashboard') ?>" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Início</span></a>
                        </li>
                        <li class="active"> <a class="waves-effect waves-dark" href="<?php echo base_url('clientes/pedidos') ?>" aria-expanded="false"><i class="mdi mdi-account-check"></i><span class="hide-menu">Pedidos</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="<?php echo base_url('clientes/endereco') ?>" aria-expanded="false"><i class="mdi mdi-table"></i><span class="hide-menu">Endereços</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="<?php echo base_url('clientes/perfil') ?>" aria-expanded="false"><i class="mdi mdi-emoticon"></i><span class="hide-menu">Perfil</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="<?php echo base_url('clientes/avaliacoes') ?>" aria-expanded="false"><i class="mdi mdi-earth"></i><span class="hide-menu">Avaliações</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="<?php echo base_url('clientes/ajuda') ?>" aria-expanded="false"><i class="mdi mdi-help-circle"></i><span class="hide-menu">Ajuda</span></a>
                        </li>
                    </ul>                    
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <!-- Bottom points-->
            <div class="sidebar-footer">
                <!-- item--><a href="" class="link" data-toggle="tooltip" title="Perfil"><i class="ti-settings"></i></a>
                <!-- item--><a href="" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
                <!-- item--><a href="<?php echo base_url('autenticar/logout') ?>" class="link" data-toggle="tooltip" title="Desconectar"><i class="mdi mdi-power"></i></a> </div>
            <!-- End Bottom points-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Pedidos</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Pedidos</a></li>
                <li class="breadcrumb-item active">Finalizar</li>
            </ol>
        </div>
        <div class="col-md-7 col-4 align-self-center">
            <a href=" <?php echo base_url() ?> " class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down"> Voltar ao site</a>
        </div>
    </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <div class="row">    <!-- Start Page Content -->
        <!-- ============================================================== -->
            <div class="col-12">
                <div class="card">
                    <div class="card-block">
                        <div class="row">
                            <div class="col-12 col-md-4 card pedidos">
                                <div class="row">
                                    <h6 class="col s3 txt-cart text-truncate">Produto</h6>
                                    <h6 class="col text-center s3 txt-cart text-truncate">Qtde</h6>
                                    <h6 class="col text-center s3 txt-cart text-truncate">Preço</h6>
                                    <h6 class="col s3 txt-cart text-truncate">SubTotal</h6>
                                </div>
                                <hr class="borda-header"></hr>
                                <?php    
                                  $pdo = new PDO('mysql:host=localhost;dbname=norte587_sisgel', 'norte587_root', 'm87585256'); 
                                  $cont = count($_SESSION['carrinho']);
                                  $total = 0;
                                  foreach ($_SESSION['carrinho'] as $key => $value){
                                      $idProduto = $value['produto_id'];
                                      $con = $pdo->prepare("SELECT * FROM produtos WHERE id_prod = $idProduto");
                                      $con->execute();
                                      $ln = $con->fetch(PDO::FETCH_ASSOC);
                          
                                      $id = $key;
                                      $nome = ucwords(utf8_encode(strtolower($ln['nome_prod'])));
                                      $qtd = $value['qtd'];
                                      
                                      $valor = number_format($ln['preco_prod'], 2, ",", ".");
                                      $sub = number_format($ln['preco_prod'] * $value['qtd'], 2, ",", ".");
                                      
                                      //SOMA TUDO
                                      $total += $ln['preco_prod'] * $value['qtd'];
                                      $totalCarrinho = number_format($total, 2, ",",".");

                                ?>
                                <div style="margin-top: -7px;" class="row">
                                    <h6 class="col-3 text-truncate txt-padding"><?php echo $nome ?></h6>
                                    <h6 class="col-3 text-center txt-padding"><?php echo $qtd ?></h6>
                                    <h6 class="col-3 text-right txt-padding"><?php echo $valor ?></h6>
                                    <h6 class="col-3 text-right txt-padding"><?php echo $sub ?></h6>                     
                                </div> 
                                <?php } ?>
                                <hr class="borda-header"></hr>
                                <div style="margin-top: -7px;" class="row">
                                    <h6 class="col-9 font-weight-bold">SubTotal: </h6>
                                    <h6 class="col-3 font-weight-bold text-right"> <?php echo $totalCarrinho?> </h6>
                                </div>
                                <div class="row">
                                    <h6 class="col-9 font-weight-bold">Taxa de Entrega: </h6>
                                    <h6 class="col-3 font-weight-bold text-right"> <?php if($total >= 50.00){ $taxa = 0.00;} else {$taxa = 20.00;} echo number_format($taxa, 2,',', '.');?> </h6>
                                    <?php $total_final = ($total + $taxa);?>
                                </div>
                                <div class="row">
                                    <h6 class="col-9 font-weight-bold">Total a pagar: </h6>
                                    <h6 class="col-3 font-weight-bold text-right"> <?php echo   number_format($total_final, 2,',', '.'); ?> </h6>                                    
                                </div>
                                <hr class="borda-header"></hr>
                                <div class="row">   
                                    <h6 class="col-12 font-weight-bold">Endereço p/ entrega:</h6> 
                                    <?php foreach ($ende as $ok) { ?>
                                    <p class="col-12"><?php echo $ok->city ?>,  <?php echo $ok->cep; ?>, <?php echo $ok->bairro ?>, <?php echo $ok->endereco ?>, <?php echo $ok->num; ?>.</p>  
                                    <?php } ?>
                                    <a style="left: 4%; font-size: 16px;" href="<?php echo base_url('clientes/endereco') ?>" class="col-11 btn btn-primary btn-block">
                                        Alterar Endereço
                                    </a>    
                                </div>
                            </div>
<div class="col-12 col-md-8 card pedidos">
     <div class="row">
            <div class="col-12 col-md-12" id="accordion" role="tablist">
                <div class="card">
                    <div class="card-header" role="tab" id="headingTwo">
                      <h5 class="mb-0">
                        <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          <i style="font-size: 20px;" class="mdi mdi-credit-card"></i> &nbsp;PAGAR COM CARTÃO (CRÉDITO OU DÉBITO)
                        </a>
                      </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            <div class="col alert alert-info" role="alert">
                                Não se preocupe, nós levaremos a máquina até você!
                            </div>
                            <!--FORM PAGAMENTO CARTÃO -->
                            <form class="maq" method="post">                                
                                <div class="row">
                                    <h5 style="margin-left: 20px;" class="col-12">Receber ligação em caso de cancelamento do pedido?</h5>
                                    <p style="margin-left: 25px;" class="col-3">
                                      <input name="radio2" checked="" type="radio" id="test3" value="not" onchange="escondernum()" />
                                      <label for="test3">Não</label>
                                    </p>
                                    <p class="col-6">
                                      <input name="radio2" type="radio" id="test4" onchange="mostrarnum()" />
                                      <label for="test4">Sim</label>
                                    </p>    
                                    <div style="display: none; margin-left: 25px; margin-top: -15px; margin-bottom: 15px;" id="cmpcel" class="input-field col-12">
                                      <input id="first_name" placeholder="Informe o número para contato" name="celcont" type="text" class="col-6 campoCel form-control">                          
                                    </div>                                                      
                                </div>  

                                <div class="row">
                                    <h5 style="margin-left: 20px;" class="col-12">Deseja informar alguma observação?</h5>
                                    <p style="margin-left: 25px;" class="col-3">
                                      <input name="radio3" checked="" type="radio" id="test5" value="not" onchange="esconderobs()" />
                                      <label for="test5">Não</label>
                                    </p>
                                    <p class="col-6">
                                      <input name="radio3" type="radio" id="test6" onchange="mostrarobs()" />
                                      <label for="test6">Sim</label>
                                    </p>            
                                    <div style="display: none; margin-left: 25px; margin-top: -15px; margin-bottom: 15px;" id="cmpobs" class="input-field col-12">
                                      <textarea id="textarea1" name="obs" placeholder="Digite sua observação" class="col-6 form-control"></textarea>
                                    </div>                                              
                                </div>
                                  <input type="hidden" name="endereco" value="<?php echo $ok->id ?>">
                                  <input type="hidden" name="email" value="<?php echo $emailUser ?>">
                                  <input type="hidden" name="total" value="<?php echo $total_final ?>">
                                  <input type="hidden" name="troco" value="<?php echo 0.00 ?>">
                                  <input type="hidden" name="desconto" value="<?php echo 0.00 ?>">
                                  <input type="hidden" name="valor_pago" value="<?php echo 0.00 ?>">
                                <button type="submit" class="btn-fin col-11 btn btn-lg btn-block">Finalizar Pedido</button>   
                                                                
                            </form>
                            <!--FIM FORM PAG CARTÃO -->
                        </div>
                    </div>
                </div>
                <div style="margin-top: -30px;" class="card">
                    <div class="card-header" role="tab" id="headingThree">
                      <h5 class="mb-0">
                        <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          <i style="font-size: 20px;" class="mdi mdi-currency-usd"></i> &nbsp;PAGAR COM DINHEIRO (À VISTA)
                        </a>
                      </h5>
                    </div>
                    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                            <form class="pg-dinheiro" method="post">
                                <div class="row">
                                    <h5 style="margin-left: 20px;" class="col-12">Deseja troco?</h5>                                                     
                                    <p style="margin-left: 25px;" class="col-3">
                                      <input name="dincmptroco" value="not" checked="" type="radio" id="dincmptroco" onchange="esconderdincmptroco()" />
                                      <label for="dincmptroco">Não</label>
                                    </p>
                                    <p class="col-6">
                                      <input name="dincmptroco" type="radio" id="dincmptrocosim" onchange="mostrardincmptroco()" />
                                      <label for="dincmptrocosim">Sim</label>
                                    </p>
                                    <div style="display: none; margin-left: 25px; margin-top: -15px; margin-bottom: 15px;" id="dincmptrocoinput" class="input-field col-12">
                                      <input id="first_name" placeholder="Troco pra quanto?" type="text" name="trocotexto2" class="col-6 form-control moeda">
                                    </div>
                                </div>

                                <div class="row">
                                    <h5 style="margin-left: 20px;" class="col-12">Receber ligação em caso de cancelamento do pedido?</h5>

                                    <p style="margin-left: 25px;" class="col-3">
                                      <input name="radiotel2" checked="" type="radio" id="tel3" value="not" onchange="escondernumtel()" />
                                      <label for="tel3">Não</label>
                                    </p>
                                    <p class="col-6">
                                      <input name="radiotel2" type="radio" id="tel4" onchange="mostrarnumtel()" />
                                      <label for="tel4">Sim</label>
                                    </p>    
                                    <div style="display: none; margin-left: 25px; margin-top: -15px; margin-bottom: 15px;" id="idcmpcel" class="input-field col-12">
                                      <input id="first_name" placeholder="Informe o número para contato" name="celcont2" type="text" class="col-6 campoCel form-control">                          
                                    </div>                                                      
                                </div> 

                                <div class="row">
                                    <h5 style="margin-left: 20px;" class="col-12">Deseja informar alguma observação?</h5>
                                    <p style="margin-left: 25px;" class="col-3">
                                      <input name="obsradio" checked="" type="radio" id="test55" value="not" onchange="esconderobsradio()" />
                                      <label for="test55">Não</label>
                                    </p>
                                    <p class="col-6">
                                      <input name="obsradio" type="radio" id="test66" onchange="mostrarobsradio()" />
                                      <label for="test66">Sim</label>
                                    </p>            
                                    <div style="display: none; margin-left: 25px; margin-top: -15px; margin-bottom: 15px;" id="cmpobsradio" class="input-field col-12">
                                      <textarea id="textarea1" name="obs2" placeholder="Digite sua observação" class="col-6 form-control"></textarea>
                                    </div>                                              
                                </div>
                                <input type="text" name="endereco" value="<?php echo $ok->id ?>">
                                <input type="text" name="email" value="<?php echo $emailUser ?>">
                                <input type="text" name="total" value="<?php echo $total_final ?>">

                                <button type="submit" class="btn-fin col-11 btn btn-lg btn-block">Finalizar Pedido</button>
                            </form>                            
                        </div>
                    </div>
                </div>
            </div>
     </div>
</div>
                        </div>                        
                    </div>
                </div>
            </div>
        <!-- Modal -->
        <div class="modal fade" id="modalvalidation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Atenção!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="error-validar"></div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">SAIR</button>
              </div>
            </div>
          </div>
        </div> 

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">      
      <div class="modal-body"> 
            <div class="carregando">           
                <img class="gif-carregar" src="<?php echo base_url('assets/clientes/images/carregando.gif') ?>">
                <h3 style="margin-top: -50px;" class="text-center">Enviando seu pedido, aguarde...</h3>
            </div>
            <div class="sucesso-modal">
                <img class="foto-card-success" src="<?php echo base_url('assets/site/images/card-success.png') ?>">
                <h3 class="text-center">Parabéns, seu pedido foi enviado!</h3>
            </div>
            <div class="erro-modal">
                <img class="foto-card-success" src="<?php echo base_url('assets/site/images/card-error.png') ?>">
                <h3 style="margin-top: 10px;" class="text-center">Desculpe, houve um erro em seu pedido!</h3>
            </div>
      </div>      
    </div>
  </div>
</div>
        <!-- ============================================================== -->
        </div>     <!-- End PAge Content -->
        <!-- ============================================================== -->
</div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">
                © <?php echo date('Y') ?> Frutas Belém por nortescript.com.br
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url('assets/clientes/js/jquery.js')?>"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url('assets/clientes/js/theter.js')?>"></script>
    <script src="<?php echo base_url('assets/clientes/js/bootstrap.js')?>"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url('assets/clientes/js/slim.js')?>"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url('assets/clientes/js/whaves.js')?>"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url('assets/clientes/js/sidemenu.js')?>"></script>
    <!--stickey kit -->
    <script src="<?php echo base_url('assets/clientes/js/kit.js')?>"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url('assets/clientes/js/custom.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/site/js/libs/jquery-form.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/site/js/libs/jquery-mask.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/site/js/libs/functionsmask.js') ?>"></script>
<script type="text/javascript">
    function escondernum(){
    document.getElementById('cmpcel').style.display = 'none'; 
    }
    function mostrarnum(){
    document.getElementById('cmpcel').style.display = 'block';
    }
    function esconderobs(){
    document.getElementById('cmpobs').style.display = 'none'; 
    }
    function mostrarobs(){
    document.getElementById('cmpobs').style.display = 'block';
    }
//dinheiro mostrardincmptroco escondernumtel mostrarobsradio
    function esconderdincmptroco(){
    document.getElementById('dincmptrocoinput').style.display = 'none';
    }
    function mostrardincmptroco(){
    document.getElementById('dincmptrocoinput').style.display = 'block';
    }
    function escondernumtel(){
    document.getElementById('idcmpcel').style.display = 'none';
    }
    function mostrarnumtel(){
    document.getElementById('idcmpcel').style.display = 'block';
    }
    function esconderobsradio(){
    document.getElementById('cmpobsradio').style.display = 'none';
    }
    function mostrarobsradio(){
    document.getElementById('cmpobsradio').style.display = 'block';
    }
    $(document).ready(function(){
        $('.maq').submit(function(){
        var dados = $('.maq').serialize();
        var url = "<?php echo base_url('clientes/pedidos/maquina')?>";
        var dash = "<?php echo base_url('clientes/dashboard');?>";
        $.ajax({
            url: url,
            type: 'POST',
            data: dados,
            success: function(data){                
                //$('.resultado').html(data);
                if(data == 'error-contato-vazio'){
                    $('#modalvalidation').modal('show');
                    $('.error-validar').html('<p>Campo de CONTATO vazio, informe um CONTATO válido. Ou clique na opção NÃO para ignorar nosso contato em caso de cancelamento do pedido.</p>')
                }
                if(data == 'success'){
                    console.log(data);
                    $('#exampleModal').modal('show');                  
                      setTimeout(function(){
                          $('.carregando').hide();
                          $('.sucesso-modal').show();
                          setTimeout(function(){
                                window.location.replace(dash);
                            }, 3*1000)
                        
                        }, 5*1000)                  

                } 
                if(data == 'error') {
                    console.log(data);
                    $('#exampleModal').modal('show');                 
                      setTimeout(function(){
                          $('.carregando').hide();
                          $('.erro-modal-modal').show();
                          setTimeout(function(){
                                window.location.replace(dash);
                            }, 3*1000)
                        }, 5*1000)                  
                }
            } 
        });
            return false;
        });
        //pagamento with dinheiro
        $('.pg-dinheiro').submit(function(){
        var dados = $('.pg-dinheiro').serialize();
        var url = "<?php echo base_url('clientes/pedidos/dinheiro')?>";
        var dash = "<?php echo base_url('clientes/dashboard');?>";        
        $.ajax({
            url: url,
            type: 'POST',
            data: dados,
            success: function(data){               
            console.log(data); 
                //$('.resultado').html(data);
                if (data == 'error-troco-vazio') {
                    $('#modalvalidation').modal('show');
                    $('.error-validar').html('<p>Campo de TROCO vazio, informe um valor válido. Ou clique na opção NÃO para ignorar a opção de troco.</p>')

                }                   
                if (data == 'error-troco-menor') {
                    $('#modalvalidation').modal('show');
                    $('.error-validar').html('<p>Valor informado é menor que o VALOR TOTAL do pedido.</p>')
                }
                if (data == 'error-contato-vazio') {
                    $('#modalvalidation').modal('show');
                    $('.error-validar').html('<p>Campo de CONTATO vazio, informe um CONTATO válido. Ou clique na opção NÃO para ignorar nosso contato em caso de cancelamento do pedido.</p>')
                }
                if(data == 'success'){
                    console.log(data);
                    $('#exampleModal').modal('show');                  
                      setTimeout(function(){
                          $('.carregando').hide();
                          $('.sucesso-modal').show();
                          setTimeout(function(){
                                window.location.replace(dash);
                            }, 3*1000)
                        
                        }, 5*1000)                  

                } 
                if(data == 'error') {
                    console.log(data);
                    $('#exampleModal').modal('show');                 
                      setTimeout(function(){
                          $('.carregando').hide();
                          $('.erro-modal-modal').show();
                          setTimeout(function(){
                                window.location.replace(dash);
                            }, 3*1000)
                        }, 5*1000)                  
                }
            }        
        });
            return false;
        });
        
    }); //document
</script>
</body>

</html>
<?php
} else {
    redirect ( 'entrar', 'refresh' );
}
?>