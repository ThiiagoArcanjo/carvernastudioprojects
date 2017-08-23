<!--contact start here-->
<div class="contact">
	<div class="container">
		<div class="contact-main">
			<div class="contact-block2">
				<div class="contact-address">
					<h2>Informações</h2>
					<p></p>
					<ul>
						<li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"> </span>Estrada do Bom Tempo,nº41,Franco da Rocha-SP</li>
						<li><span class="glyphicon glyphicon-phone" aria-hidden="true"> </span>(11)4444-5555</li>
						<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"> </span><a href="mailto:info@example.com">atendimento@3dbrasil.com</a></li>
					</ul>
				</div>
				<div class="contact-map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58624.70490078952!2d-46.772339306258615!3d-23.314160266937073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cee6a7cb6f61eb%3A0xa321d69e795bf8a6!2sFranco+da+Rocha%2C+SP!5e0!3m2!1spt-PT!2sbr!4v1503376800440" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="contact-block1">
				<div class="contact-block-left">
						<?php
						$atributos = array('name' =>'formulario_contato', 'id' => 'formulario_contato');
						echo form_open(base_url('home/enviar_mensagem'),$atributos) .
						form_label("Nome:", "txt_nome") . br() .
						form_input('txt_nome','Nomes',set_value('txt_nome')) .br().
						form_label("E-mail:","txt_email"). br().
						form_input('txt_email', 'Email', set_value('txt_email')) .br().
						form_label("Assunto","txt_assunto"). br().
						form_input('txt_assunto','Assunto', set_value('txt_assunto')) .br().
						form_label("Mensagem:","txt_mensagem") .br().
						form_textarea('txt_mensagem','Mensagem', set_value('txt_mensagem')) .br().
						form_submit("btn_enviar","Enviar").
						form_close();
						?>

				</div>
			</div>
		</div>
	</div>
</div>
<!--contact end here-->