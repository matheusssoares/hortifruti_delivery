<?php
if ($this->session->userdata('logged_ins')) {  
  $session_admin = $this->session->userdata('logged_ins');
  $nomeUsuario = $session_admin['nomeUsuario'];
  $emailUser = $session_admin['emailUser'];
  $user      = $session_admin['id_usuario'];
  $telefone =  $session_admin['telefone'];
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
                        <h3 class="text-themecolor m-b-0 m-t-0">Perfil</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Perfil</li>
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
                                <form class="updados" method="post">
                                    <input type="hidden" name="id" value="<?php echo $user ?>">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                          <label for="validationCustom01">Nome Completo</label>
                                          <input type="text" class="form-control" name="nome" value="<?php echo $nomeUsuario ?>" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                          <label for="validationCustom02">Email</label>
                                          <input type="email" class="form-control" name="email" value="<?php echo $emailUser ?>" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 mb-2">
                                          <label for="validationCustom01">Telefone</label>
                                          <input type="text" class="form-control campoCel" name="cel" value="<?php echo $telefone ?>" required>
                                        </div>
                                        <div class="col-md-4 mb-2">
                                          <label for="validationCustom02">Senha Atual</label>
                                          <input type="password" class="form-control" name="senhaatual">
                                        </div>
                                        <div class="col-md-4 mb-2">
                                          <label for="validationCustom02">Nova Senha</label>
                                          <input type="password" class="form-control" name="novasenha">
                                        </div>
                                    </div>
                                    <hr>
                                    <button style="background-color: #45bf61;" type="submit" class="btn btn-primary">ATUALIZAR CADASTRO</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">      
      <div class="modal-body"> 
            <div class="carregando">           
                <img class="gif-carregar" src="<?php echo base_url('assets/clientes/images/carregando.gif') ?>">
                <h3 style="margin-top: -50px;" class="text-center">Atualizando dados, aguarde...</h3>
            </div>
            <div class="sucesso-modal">
                <img class="foto-card-success" src="<?php echo base_url('assets/site/images/card-success.png') ?>">
                <h3 class="text-center">Alterações feitas!</h3>
                <p class="text-center alterado">Você será redirecionado para efetuar um novo login com seus dados atualizados!</p>
            </div>
            <div class="erro-modal">
                <img class="foto-card-success" src="<?php echo base_url('assets/site/images/card-error.png') ?>">
                <h3 style="margin-top: 10px;" class="text-center">Desculpe, houve um erro em seu pedido!</h3>
            </div>
      </div>      
    </div>
  </div>
</div>

                <!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">      
      <div class="modal-body"> 
            <div class="retorno-erro">
                
            </div>
      </div>      
    </div>
  </div>
</div>
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
        $(document).ready(function(){
            $('.updados').submit(function(){
                var dados = $('.updados').serialize();
                var url = "<?php echo base_url('clientes/perfil/atualizar') ?>";
                $.ajax({
                    url: url,
                    type: 'POST',
                    data: dados,
                    success: function(data){
                        if(data == "success"){
                            $('#exampleModal').modal('show');                  
                              setTimeout(function(){
                                  $('.carregando').hide();
                                  $('.sucesso-modal').show();
                                  setTimeout(function(){
                                        window.location.reload();
                                    }, 5*1000)
                                
                                }, 3*1000)
                        }
                        if(data == "error-novasenha"){
                            $('#exampleModal2').modal('show');
                            $('.retorno-erro').html("<p class='text-center'>Por favor, informe uma nova senha!</p>");

                        }
                        if(data == "error-senhaatualinvalida"){
                            $('#exampleModal2').modal('show');
                            $('.retorno-erro').html("<p class='text-center'>Senha atual incorreta!</p>");

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
    redirect ( 'entrar');
}
?>