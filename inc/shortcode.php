<?php 




	function konceot_services($one, $two){ 

		$serv_atts = shortcode_atts( array( 
				'title'			=> 'WANT TO START PRACTICING?',
				'subtitles'		=> '',
				
			), $one);

		?>
		<div class="practicing-part">
			<h2><?php echo $serv_atts['title']; ?></h2>
			<?php echo $serv_atts['subtitles']; ?>
		</div>
		




	<?php }
	add_shortcode('ourserv','konceot_services');

	if(function_exists('vc_map')){

		vc_map(array( 
			'name'				=> 'START PRACTICING',
			'base'				=> 'ourserv',
			'params'			=> array( 
					array( 
							'param_name'			=> 'title',
							'type'					=> 'textfield',
							'heading'				=> 'Type section title'
						),
					array( 
							'param_name'			=> 'subtitle',
							'type'					=> 'textarea',
							'heading'				=> 'Add your aweber Script'
						),
					
				)
		));


	}
	
	 
	
	function konceot_blog($one, $two){ 

		$lblog_atts = shortcode_atts( array( 
				'title'			=> 'WANT TO START PRACTICING?',
				
			), $one);

			
	global $redux_demo;
	 
	 $numberpost = $redux_demo['blognumber'];
			
		?>
		<div class="blog-post">
			<div class="container">
			<div class="blog-post-top text-center">
				<h2><?php echo $lblog_atts['title']; ?></h2>
			</div>				
				<div class="row">				
					<!-- <div class="col-lg-6 col-md-6">
						<div class="blog-post-left">
							
							<?php $postone = new WP_Query(array(
								'post_type'				=> 'post',
								'posts_per_page'		=> $allpost,
							)); 
							
							while($postone->have_posts()): $postone->the_post();?>
							
							<div class="blog-post-part">
								<h2><?php the_title(); ?></h2>
								<p><?php echo wp_trim_words(get_the_content(),40,'</p>
								<a href="'.get_the_permalink().'">READ MORE</a>'); ?>
							</div>	
							<?php  endwhile; ?>

							
						</div>
					</div> -->
						<div class="blog-post-custom">
						
						
							<?php $posttwo = new WP_Query(array(
								'post_type'		=> 'post',
								'posts_per_page'	=>  $numberpost,
							)); 
							
							while($posttwo->have_posts()): $posttwo->the_post();?>
							<div class="blog-post-part">
								<h2><?php the_title(); ?></h2>
								<p><?php echo wp_trim_words(get_the_content(),40,'</p>
								<a href="'.get_the_permalink().'">READ MORE</a>'); ?>
							</div>	
							<?php  endwhile; ?>
							
							
						</div>				
				</div>
			</div>
		</div>
		




	<?php }
	add_shortcode('latest_blog','konceot_blog');

	if(function_exists('vc_map')){

		vc_map(array( 
			'name'				=> 'Latest Blog',
			'base'				=> 'latest_blog',
			'params'			=> array( 
					array( 
							'param_name'			=> 'title',
							'type'					=> 'textfield',
							'heading'				=> 'Type section title'
						),
				)
		));


	}
	
	

	function studently_testi($one, $two){ 

		$testi_atts = shortcode_atts( array( 
				'title'			=> 'testimonials',
				
			), $one);

		?>
		<div class="testimonials-area">
			<div class="container">
				<div class="row">				
					<div class="offset-lg-1 col-lg-10 offset-md-1 col-md-10 col-12">
						<div class="testimonials-part">
							<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
							  <ol class="carousel-indicators">
							  
							   <?php $testi = new WP_Query(array(
									'post_type'		=> 'tesimonials',
								)); 
								
								while($testi->have_posts()): $testi->the_post();?>
							    <li data-target="#carouselExampleIndicators" data-slide-to="0"></li>
							    <?php  endwhile; ?>
							  </ol>
							  <div class="carousel-inner">
								 
								 <?php $testi = new WP_Query(array(
									'post_type'		=> 'tesimonials',
								)); 
								
								while($testi->have_posts()): $testi->the_post();?>
								 <div class="carousel-item">
								  <img src="<?php echo get_template_directory_uri(); ?>/img/p.jpg" alt="...">
								  <div class="carousel-caption d-none d-md-block">
								  <?php the_post_thumbnail(); ?>
								  	<div class="carousel-text-title">
								  		<h2><?php the_title(); ?></h2>
								  		<p><?php $types =  get_the_terms(get_the_id(),'types'); 
										
										foreach($types as $typpp){
											
											echo  $typpp->name;
										}
										
										?></p>
								  	</div>
								  	<div class="carousel-text-content">
								  		<p><?php the_content(); ?></p>
								  	</div>								    
								  </div>
								</div>
								<?php  endwhile; ?>
								
								
								
							  </div>
							</div>
						</div>																	
					</div>					
				</div>
			</div>
		</div>
	<?php }
	add_shortcode('testimonialss','studently_testi');

	if(function_exists('vc_map')){

		vc_map(array( 
			'name'				=> 'Studently Testimonial',
			'base'				=> 'testimonialss',
			'params'			=> array( 
					array( 
							'param_name'			=> 'title',
							'type'					=> 'textfield',
							'heading'				=> 'Type section title'
						),
				)
		));


	}

	