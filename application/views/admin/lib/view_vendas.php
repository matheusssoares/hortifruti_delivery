<?php
	header('Content-type: text/html; charset=utf-8');    
?> 
<!-- End Tab -->
	<div id="tab2" class="tab-pane">
		<div class="product-loadmore">
			<div class="row">
			<?php
                if(isset($produtos) AND $produtos != FALSE){
	            foreach ($produtos as $key){
            ?> 
				<div class="col-md-3 col-sm-4 col-xs-6">
					<div class="item-product item-product1 text-center border drop-shadow">
						<div class="product-thumb">
						   <a href="<?php echo base_url('produtos/visualizar/')?><?php echo $key->id_prod?>" class="product-thumb-link rotate-thumb">
							  <img class="img_foobar" src="<?php echo  base_url('upload/fotos_produtos/')?><?php echo $key->img_prod;?>">
							  <img class="img_foobar" src="<?php echo  base_url('upload/fotos_produtos/')?><?php echo $key->img_prod;?>">
						   </a>
						   <a href="<?php echo base_url('produtos/visualizar/')?><?php echo $key->id_prod?>" class="quickview-link fancybox fancybox.iframe">
								<i class="fa fa-search" aria-hidden="true"></i>
							</a>
					    </div>
						<div class="product-info">
							<h3 class="product-title">
								<a href="<?php echo base_url('produtos/visualizar/')?><?php echo $key->id_prod?>"><?php echo $key->nome_prod;  ?>									
								</a>
							</h3>
					    <div class="product-price">
							<ins class="color">
								<span><?php echo $key->medida ?> - R$ <?php echo number_format($key->preco_prod, 2, ',','.'); ?></span>
							</ins>
						</div>
					   	<div style="margin-top: -3px;" class="product-extra-link">							
							<a class="addcart-link" id="<?php echo base64_encode($key->id_prod);?>">Fazer Pedido</a>		
						</div>
						</div>
					</div>
				</div>
				<?php } ?>
			<!-- End Item -->								
			</div>		
		</div>
	</div>
<!-- End Tab -->
<?php } else { 
?>
<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Opsss!</strong> Não há produto cadastrado nesta categoria.
</div> 
<?php } ?>