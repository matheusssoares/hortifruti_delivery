<?php
if ($this->session->userdata('logged_ins')) {  
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
     <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- alertify -->
  <link rel="stylesheet" href="<?php echo base_url('assets/alertifyjs/css/alertify.min.css');?>" />
   <!-- include a theme alertify -->
  <link rel="stylesheet" href="<?php echo base_url('assets/alertifyjs/css/themes/default.min.css');?>" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
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
                            	<?php echo $primeiro_nome ?></a>
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
                        <li> <a class="waves-effect waves-dark" href="<?php echo base_url('clientes/pedidos') ?>" aria-expanded="false"><i class="mdi mdi-account-check"></i><span class="hide-menu">Pedidos</span></a>
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
                        <h3 class="text-themecolor color-font m-b-0 m-t-0">Endereço</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Endereço</li>
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
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-block">
                                <h3>Cadastrar Endereço</h3>
                                <form class="cadastrar_end" method="post">
                                	<div class="row">
									    <div class="col-md-4 mb-3">
									    	<input type="hidden" name="email" value="<?php echo $emailUser?>">
									      <label for="validationCustom01">Cidade</label>
									      <input type="text" class="form-control" readonly="" name="city" value="BELÉM" required>
									    </div>
									    <div class="col-md-4 mb-3">
									      <label for="validationCustom02">CEP</label>
									      <input type="text" class="form-control campoCep" autofocus="" name="cep" required>
									    </div>
									    <div class="col-md-4 mb-6">
											<label for="bairros">Bairro</label>
											<select class="form-control" name="bairro">
												<?php foreach ($bairros as $b): ?>
													<option value="<?php echo $b->nome ?>"><?php echo $b->nome ?></option>						
												<?php endforeach ?>
											</select>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<label for="ende">Endereço</label>
											<input class="form-control" name="ende" required="">
										</div>
										<div class="col-md-6">
											<label for="comp">Complemento</label>
											<input class="form-control" name="comp">
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<label for="pont">Ponto de Referência</label>
											<input type="text" class="form-control" name="ponto">
										</div>
										<div class="col-md-4">
											<label for="num">Número</label>
											<input type="text" class="form-control" name="num">
										</div>
										<div class="col-md-4">
											<label for="tel">Telefone</label>
											<input type="text" class="campoCel form-control" name="cel">
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<button style="margin-top: 15px; background-color: #45bf61" type="submit" class="btn btn-success">
												CADASTRAR ENDEREÇO
											</button>
										</div>
									</div>
                                </form>
                            </div>
                                    
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">
                <?php foreach ($config as $key2): ?>
                    
                <?php endforeach ?>
                © <?php echo date('Y') ?> <?php echo $key2->nome ?>
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
	<!-- Alertify -->
<script src="<?php echo base_url('assets/alertifyjs/alertify.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/alertifyjs/alertify.js') ?>"></script>
	<script>
	    $(document).ready(function(){
	    $('.cadastrar_end').submit(function(){       
	        var dados = $('.cadastrar_end').serialize();
	        var url = "<?php echo base_url('Cadastrar/cadastrar_end') ?>";     
	        var url2 = "<?php echo base_url('clientes/dashboard')?>";
	        var url3 = "<?php echo base_url('cadastrar/endereco')?>";
	        $.ajax({
	            url: url,
	            type: 'POST',
	            data: dados,
	            success: function(data){                
	                console.log(data);
	                if(data == "success"){
	                	alertify.alert('<?php echo $key2->nome ?>', 'Endereço cadastrado com sucesso! <br> Você será redirecionado(a) para a página de login, acesse com seu email e sua senha...', function(){
	                		window.location.href=url2;
	                	});
	                	
	                } else {
						alertify.alert('<?php echo $key2->nome ?>','Não foi possível cadastrar endereço!', function(){
							window.location.href=url3;
						});
						
	                }
	            }
	        });
	        
	        return false;        
	    });
	 });
	  </script>	
</body>

</html>
<?php
} else {
    redirect ( 'entrar', 'refresh' );
}
?>