<!--footer strat here-->
<div class="footer">
	<div class="container">
		<div class="footer-main">
			<div class="col-md-3 ftr-grids">
				<div class="ftr-logo">
					<img src="images/logo.png" alt="">
				</div>
				<p>3D Brasil roto moldagem.</p>
			</div>
			<div class="col-md-3 ftr-grids">
				<h3>Redes Sociais</h3>
				<ul>
					<li><a href="#">Facebook</a></li>
					<li><a href="#">Instagran</a></li>
				</ul>
			</div>
			<div class="col-md-3 ftr-grids">
				<h3>Contato</h3>
				<?php
					$atributos = array('name' =>'formulario_contato', 'id' => 'formulario_contato');
					echo form_open(base_url('welcome/enviar_mensagem'),$atributos) .
						"<div class='input-typt-grid'>".
								"<div class='input-type-text'>".
										"<p>".form_label("Nome:", "txt_nome")."</p>".
								"</div>".
								"<div class='input-type-blocks'>".
										form_input('txt_nome', set_value('txt_nome')).
								"</div>".
								"<div class='clearfix'> </div>".
						"</div>".
						"<div class='input-typt-grid'>".
								"<div class='input-type-text'>".
										"<p>".form_label("E-mail:","txt_email")."</p>".
								"</div>".
								"<div class='input-type-blocks'>".
										form_input('txt_email', set_value('txt_email')).
								"</div>".
								"<div class='clearfix'> </div>".
						"</div>".
						"<div class='input-typt-grid'>".
								"<div class='input-type-text'>".
										"<p>".form_label("Mensagem:","txt_mensagem") ."</p>".
								"</div>".
								"<div class='input-type-blocks'>".
									form_textarea('txt_mensagem', set_value('txt_mensagem')).
								"</div>".
								"<div class='clearfix'> </div>".
						"</div>".
						form_submit("btn_enviar","Enviar").
					form_close();
				?>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-3 ftr-grids">
				<h3>Endereço</h3>
				<p>Estrada do bom Tempo,nº41,Franco da Rocha-SP</p>
			</div>
		</div>
	</div>
</div>
<!--footer end here-->
<!--copy rights start here-->
<div class="copy-right">
	<div class="container">
		<div class="copy-rights-main wow zoomIn" data-wow-delay="0.3s">
			<div class="copy-left">
				<p>&copy; <?php echo date("Y"); ?> - Todos os direitos reservados</p>
			</div>
			<div class="copy-rit">
				<ul class="ftr-navg">
					<li><a  href="<?php echo base_url('home'); ?>">Home </a></li>
					<li><a  href="<?php echo base_url('sobre'); ?>">Sobre</a></li>
					<li><a  href="<?php echo base_url('parceiros'); ?>">Parceiros</a></li>
					<li><a  href="<?php echo base_url('produtos'); ?>">Produtos</a></li>
					<li><a  href="<?php echo base_url('contato'); ?>">Contato</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>

<!--copy right end here-->