<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package studently
 */

?>


			<div class="header-right">
				<div id="mySub" class="overlays">
				 
				 
				 <div class="join-newsletter">
					<div class="newslatter-top"><a href="javascript:void(0)" class="closeSub" >&times;</a></div>
					<div class="container">
						<div class="newsletter-title text-center">
							<h2>join our newsletter</h2>
						</div>
						<div class="row">					
							<div class="col-lg-10 offset-lg-1 col-md-10 offset-md-1">
								<div class="newsletter-form text-center">
									<div class="AW-Form-451932164"></div>
									<script type="text/javascript">(function(d, s, id) {
										var js, fjs = d.getElementsByTagName(s)[0];
										if (d.getElementById(id)) return;
										js = d.createElement(s); js.id = id;
										js.src = "//forms.aweber.com/form/64/451932164.js";
										fjs.parentNode.insertBefore(js, fjs);
										}(document, "script", "aweber-wjs-oorpk2651"));
									</script>
								</div>
							</div>											
						</div>					
					</div>		
				</div>	
				 
				</div>			
			</div>	


	<!-- footer-area start -->
		<div class="footer-area">
			<div class="container">						
				<div class="row">				
					<div class="col-lg-2 col-md-2">
							<?php dynamic_sidebar('footer-1'); ?>
					</div>
					<div class="col-lg-6 col-md-6">
						<?php dynamic_sidebar('footer-2'); ?>
						<?php dynamic_sidebar('footer-3'); ?>
					</div>
					
					<div class="col-lg-4 col-md-4">
					
					
						<?php dynamic_sidebar('footer-4'); ?>
						
					</div>		
				</div>
			</div>
		</div>
		
		<?php wp_footer(); ?>
		
	</body>
</html>