<?php

 global $redux_demo;

 ?>

<div class="container">
	<div class="row">					
		<div class="col-lg-6 col-md-6 col-sm-6 col-6">
			<div class="header-left">
				<a href="<?php echo home_url(); ?>"><img src="<?php echo $redux_demo['opt-logo']['url']; ?>" alt="<?php echo $redux_demo['opt-logo']['alt'] ?>" /></a>
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-6">
			<div class="header-right">
				<div class="nav-bar">
					<a href="#"><i class="fas fa-bars"></i></a>
				</div>	
				<div id="myNav" class="overlay">
				 <a href="javascript:void(0)" class="closebtn" >&times;</a>
				 
				 <?php 

				 wp_nav_menu(array(
					'theme_location'	=> 'menu_main',
					'menu_class'		=> 'overlay-content',
					'container'			=> ' ',
				 ));
				
					
				 ?>
				 
				</div>			
			</div>									
		</div>
		
	</div>					
</div>