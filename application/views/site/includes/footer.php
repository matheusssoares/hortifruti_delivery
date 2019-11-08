<footer id="footer">
		<div class="footer2 box-parallax">
			<div class="container">
				<div class="main-footer2">
					<div class="row">
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="footer-box2">
								<h2 class="title18 font-bold color"><?php echo $ok->nome ?></h2>
								<p class="desc white"><?php echo $ok->description ?></p>
							</div>
							<div class="footer-box2 payment-method">
								<h2 class="title18 font-bold color">Aceitamos Cartões</h2>
								<a href="#" class="wobble-top"><img src="<?php echo base_url('assets/site/images/icon/pay2.png')?>" alt=""></a>
								<a href="#" class="wobble-top"><img src="<?php echo base_url('assets/site/images/icon/pay31.png')?>" alt=""></a>
								<a href="#" class="wobble-top"><img src="<?php echo base_url('assets/site/images/icon/pay4.png')?>" alt=""></a>
								<a href="#" class="wobble-top"><img src="<?php echo base_url('assets/site/images/icon/pay41.png')?>" alt=""></a>
							</div>	
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="footer-box2">
								<h2 class="title18 font-bold color">Localização</h2>
								<div class="contact-footer2">
									<p class="desc white"><span class="color"><i class="fa fa-map-marker" aria-hidden="true"></i></span><?php echo $ok->endereco ?>, N° <?php echo $ok->num ?>, <?php echo $ok->bairro ?>, <?php echo $ok->cidade ?> - <?php echo $ok->estado ?>, <?php echo $ok->cep ?>.</p>
									<p class="desc white"><span class="color"><i class="fa fa-phone" aria-hidden="true"></i></span><?php echo $ok->telefone ?> / <?php echo $ok->telefonedois ?></p>
									<p class="desc white"><span class="color"><i class="fa fa-envelope" aria-hidden="true"></i></span><a href="#" class="white"><?php echo $ok->email ?></a></p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="footer-box2">
								<h2 class="title18 font-bold color">Inscreva-se na nossa Newsletter</h2>
								<p class="white">Receber e-mails sobre dicas e promoções que acontecem em nosso site</p>
								<form class="email-form2">
									<input onblur="if (this.value=='') this.value = this.defaultValue" onfocus="if (this.value==this.defaultValue) this.value = ''" value="Informe seu e-mail" type="text">
									<input type="submit" value="Cadastrar">
								</form>
							</div>
							<div class="social-network footer-box2">
								<h2 class="title18 font-bold color">Conectado com</h2>
								<a href="#" class="float-shadow"><img src="<?php echo base_url('assets/site/images/icon/icon-fb.png')?>" alt=""></a>
								<a href="#" class="float-shadow"><img src="<?php echo base_url('assets/site/images/icon/icon-tw.png')?>" alt=""></a>
								<a href="#" class="float-shadow"><img src="<?php echo base_url('assets/site/images/icon/icon-pt.png')?>" alt=""></a>
								<a href="#" class="float-shadow"><img src="<?php echo base_url('assets/site/images/icon/icon-gp.png')?>" alt=""></a>
								<a href="#" class="float-shadow"><img src="<?php echo base_url('assets/site/images/icon/icon-ig.png')?>" alt=""></a>
							</div>
						</div>
					</div>
				</div>
				<!-- End Main Footer -->
				<div class="logo-footer2 text-center">
					<a href="#" class="pulse"><img src="<?php echo base_url('assets/site/images/home/home2/logo-redondo.png')?>" alt="" /></a>
				</div>
				<div class="bottom-footer2 text-center">
					<ul class="menu-footer2 list-inline-block">
						<li><a href="<?php echo base_url() ?>" class="white">HOME</a></li>
						<?php foreach ($categorias as $key) {
							$nome_cat = $key->nome_cat;
						?>
						<li><a href="<?php echo base_url('categoria/segmento/')?><?php echo $key->id_cat ?>" class="white"><?php echo $nome_cat ?></a></li>	
						<?php } ?>
						<li><a href="<?php echo base_url('politica-de-entrega') ?>" class="white">POLÍTICA DE ENTREGA</a></li>
					</ul>
					<p class="copyright2 desc white"><?php echo $ok->nome ?> © <?php echo date('Y') ?> Delivery. Todos os Direitos Reservados.</p>
					<p class="design2 desc white">Desenvolvido por: <a target="_blank" href="https://nortescript.com.br" class="color">Norte Script</a></p>
				</div>
			</div>
		</div>
	</footer>