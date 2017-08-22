<!--banner start here-->
<div class="header-container">
   <div class="header">
		   <div class="header-main">
		   	 <div class="container">
			 <div class="logo">
			 	<a href="index.html"><img src="<?php echo base_url('assets/images/logo.png'); ?>" alt=""> </a>
			 </div>
			 <div class="top-nav">
			 		<span class="menu-drop menu-icon"> <img src="<?php echo base_url('assets/images/icon.png'); ?>" alt=""></span>
						<nav class="menu menu--shylock">
					<ul class="menu__list res">
						<li class="menu__item">
							<a href="<?php echo base_url('home') ?>" class="menu__link">
								Home
							</a>
						</li>
						<li class="menu__item">
							<a href="<?php echo base_url('sobre') ?>" class="menu__link">
								Sobre
							</a>
						</li>
						<li class="menu__item">
							<a href="<?php echo base_url('parceiros') ?>" class="menu__link">
								Parceiros
							</a>
						</li>
						<li class="produto">
							<a href="<?php echo base_url('produtos') ?>" class="menu__link">
								Produtos
							</a>
						</li>
						<li class="menu__item">
							<a href="<?php echo base_url('contato') ?>" class="menu__link">
								Contato
							</a>
						</li>
					</ul>
				</nav>
					<!-- script-for-menu -->
								 <script>
								   $( "span.menu-icon" ).click(function() {
									 $( "ul.res" ).slideToggle( 1000, function() {
									 // Animation complete.
									  });
									 });
								</script>
				<!-- /script-for-menu -->
			</div>
			 <div class="clearfix"> </div>
		   </div>
		   </div>

	</div>
</div>
<!--banner end here-->