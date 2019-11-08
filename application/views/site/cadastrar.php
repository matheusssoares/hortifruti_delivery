<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> <?php echo $title ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <!--<link rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css">-->
  <link rel="stylesheet" href="<?php echo base_url('assets/site/css/libs/bootstrap.min.css');?>">
   <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/site/css/admin.css');?>">
  <!-- alertify -->
  <link rel="stylesheet" href="<?php echo base_url('assets/alertifyjs/css/alertify.min.css');?>" />
   <!-- include a theme alertify -->
  <link rel="stylesheet" href="<?php echo base_url('assets/alertifyjs/css/themes/default.min.css');?>" />

</head>
<body class="hold-transition login-page">
	<?php foreach ($config as $key): ?>
		
	<?php endforeach ?>
<div class="login-box">
  <div class="login-logo">
    <a href="<?php echo base_url();?>"><b>Cadastrar Cliente</b> | <?php echo $key->nome ?></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
          <!-- INÍCIO DO CONTROLE DE ERROS -->
            <div class="form-group">
              <div class="col-md-12">
                <div class="col-md-4"></div>
                  <center>
                      <div class="col-md-12 msg-error">
                          
                      </div>
                    </center>
                </div>
              </div>
    <!-- FINAL DO CONTROLE DE ERROS -->
    <p class="login-box-msg">Informe seus dados para criar uma conta.</p>
<form class="cadastrar_cliente" method="post">
<div class="form-group has-feedback">
    <input type="text" id="nome" required="" name="name" autofocus placeholder="Digite seu Nome Completo" class="form-control" />
        <span class="fa fa-user-plus form-control-feedback"></span>
</div>	
<div class="form-group has-feedback">
    <input type="email" id="email" required="" name="email" placeholder="Digite seu Email" class="form-control" />
        <span class="fa fa-envelope-o form-control-feedback"></span>
</div>
<div class="form-group has-feedback">
    <input type="password" required="" placeholder="Digite sua Senha" name="senha" class="form-control" />        
        <span class="fa fa-lock form-control-feedback"></span>
</div>
<div class="row">
	<!-- /.col -->
    <div class="col-xs-6">
        <button type="submit" class="btn btn-success btn-block btn-flat">Criar Conta <i class="fa fa-check" aria-hidden="true"></i></button>
    </div>
    <div class="col-xs-6">
      <a class="btn btn-flat btn-block btn-danger" href="<?php echo base_url('entrar') ?>"> VOLTAR <i class="fa fa-sign-out" aria-hidden="true"></i></a>
    </div>
     <!-- /.col -->  
</form>    
</div>

</div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url('assets/site/js/libs/jquery-3.2.1.min.js');?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url('assets/site/js/bootstrap.js');?>"></script>
<!-- Alertify -->
<script src="<?php echo base_url('assets/alertifyjs/alertify.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/alertifyjs/alertify.js') ?>"></script>
<script type="text/javascript">
		$(document).ready(function(){
	    $('.cadastrar_cliente').submit(function(){       
	        var dados = $('.cadastrar_cliente').serialize();
	        var url = "<?php echo base_url('Cadastrar/cadastrar_cliente') ?>";        
	        $.ajax({
	            url: url,
	            type: 'POST',
	            data: dados,
	            success: function(data){
	                if(data == "errorvalidar"){	                
	                	alertify.alert('<?php echo $key->nome ?>',
                               'Identificamos que já há um(a) cliente cadastrado(a) com este email, tente novamente com outro email...', function(){
                               		window.location.reload();
                               });
	                }
	                if(data == "success"){
	                	alertify.alert('<?php echo $key->nome ?>', 'Cliente cadastrado(a) com sucesso!',function(){
                			window.location.href='cadastrar/endereco';
                		});	
	                	
	                }
	                if(data == "error"){
	                	alertify.alert('<?php echo $key->nome ?>', 'Houve um erro no cadastro do cliente!',function(){
                			window.location.reload();	                	
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