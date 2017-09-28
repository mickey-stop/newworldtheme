<?php  
/*Bootstrap-nav menu with walker class*/
?>
	<nav class="navbar navbar-default navbar-fixed-top">
					  <div class="container">
					    <!-- Brand and toggle get grouped for better mobile display -->
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
					      <a class="navbar-brand" href="#"><?php bloginfo('title'); ?></a>
					    </div>
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<?php 
								wp_nav_menu(array(
									'menu'=>'primary',
									'container' => false,
                  'menu_class'=> 'nav navbar-nav',
									'walker'=> new Newworld_Walker_Nav_Primary(),
									)
								);
							?>
						</div>
					  </div><!-- /.container-->
					</nav>