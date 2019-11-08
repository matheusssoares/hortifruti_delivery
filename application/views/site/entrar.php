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
    <a href="<?php echo base_url();?>"><b>Autenticação</b> | <?php echo $key->nome ?></a>
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
    <p class="login-box-msg">Informe seus dados para iniciar a sessão.</p>
<form class="login" method="post">
<div class="form-group has-feedback">
    <input type="email" id="email" required="" name="email" autofocus placeholder="Digite seu Email" class="form-control" />
        <span class="fa fa-envelope-o form-control-feedback"></span>
</div>
<div class="form-group has-feedback">
    <input type="password" required="" placeholder="Digite sua Senha" name="senha" class="form-control" />        
        <span class="fa fa-lock form-control-feedback"></span>
</div>
<div class="row">
	<!-- /.col -->
    <div class="col-xs-6">
        <button type="submit" class="btn btn-success btn-block btn-flat">Entrar <i class="fa fa-sign-in" aria-hidden="true"></i></button>
    </div>
    <div class="col-xs-6">
      <a class="btn btn-flat btn-block btn-danger" href="<?php echo base_url('cadastrar') ?>"> Criar Conta <i class="fa fa-user-plus" aria-hidden="true"></i></a>
    </div>
     <!-- /.col -->  
</form>    
</div>
<hr>
<div class="row">
    <a style="color: #3dbf59; font-size: 18px; text-align: center;" href="" class="col-md-12" data-toggle="modal" data-target="#myModal">
    	Esqueceu sua senha? Clique aqui
    </a>
</div>
<div class="row">
	<a style="color: red; font-size: 15px; text-align: center; margin-top: 5px;" href="<?php echo base_url() ?>" class="col-md-12">
    	VOLTAR AO SITE
    </a>
</div>

</div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Recuperar Acesso</h4>
      </div>
      <div class="modal-body">
        <form class="rec" method="post">
          <div class="form-group has-feedback">
              <input type="text" required="" placeholder="Digite o email para recuperar seu acesso" name="email" class="form-control" />
               <span class="fa fa-envelope-o form-control-feedback"></span>
          </div>
          <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
	        <button type="submit" class="btn btn-success">Recuperar senha</button>
	      </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url('assets/site/js/libs/jquery-3.2.1.min.js');?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url('assets/site/js/bootstrap.js');?>"></script>
<!-- Alertify -->
<script src="<?php echo base_url('assets/alertifyjs/alertify.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/alertifyjs/alertify.js') ?>"></script>
<script type="text/javascript">
		$(document).ready(function(){
			$('.login').submit(function(){
				var dados = $('.login').serialize();
				var url = "<?php echo base_url('autenticar')?>";
				
				$.ajax({
		            url: url,
		            type: 'POST',
		            data: dados,
		            success: function(data) {
		              if(data == "semendereco"){
		              	window.location.href='cadastrar/endereco';
		              }
		              if(data == "error"){
		              	alertify.alert('<?php echo $key->nome ?>',
                               'Email ou Senha Inválidos, tente novamente!');
		              }
		              if(data == "semcart"){
		              	window.location.href='clientes/dashboard';
		              }
		              if(data == "comcart") {
		              	window.location.href='clientes/pedidos/finalizar';
		              }
		            }
		        })		        
		        return false;
			});
			$('.rec').submit(function(){
				var dados = $('.rec').serialize();
				var url = "<?php echo base_url('autenticar/recuperar')?>";

				$.ajax({
					url: url,
					type: 'POST',
					data: dados,
					success: function(data){
						if(data == 'error-users'){
							alertify.alert('<?php echo $key->nome ?>',
                               'Não há usuários com este Email em nosso Banco de Dados', function(){
                               		window.location.reload();
                               });
						}
						if(data == 'error-update'){
							alertify.alert('<?php echo $key->nome ?>',
                               'Houve um erro ao tentar recuperar sua senha...');
						}
						if(data == 'success'){
							alertify.alert('<?php echo $key->nome ?>',
                               'Enviamos um email contendo sua senha temporária, verifique em sua caixa de entrada ou na lixeira (span).', function(){
                               		window.location.reload();
                               });
						}
					}

				})

				return false;
			});

		});
	</script>
</body>
</html>