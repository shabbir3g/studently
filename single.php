<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package studently
 */

get_header();
?>


	<div class="header-areas">
			<?php get_template_part('template-parts/content', 'menu'); ?>
			
		</div>	
		

	<!-- lewis part start -->
		<section class="studently-blog">			
			<div class="container">
				<div class="row">
					<div class="col-lg-6 offset-lg-3 col-md-6 offset-md-3">
						 
					</div>							
				</div>					
			</div>		
		</section>	
		<!-- lewis part end -->
		<!-- main-top part start -->
		<section class="main">			
			<div class="container">
				<div class="row">
				
				

					<?php
					if ( have_posts() ) :

						

						/* Start the Loop */
						while ( have_posts() ) :
							the_post(); ?>

							<div class="singles-blog">
								<div class="blogs">
									<div class="main-part-left main-part-effect">
										<div class="figure">				
											<?php the_post_thumbnail(); ?>
											<div class="caption">
												<div class="caption-contant text-center">
													<h3><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(),4,false); ?></a></h3>					
												</div>			
											</div>			
										</div>				
									</div>				
								</div>
								<div class="blogs">
									<div class="main-part-rights main-part-abs text-justify">
										<ul class="post-tag">
											<li><?php the_time('F j, Y'); ?> | </li>
											<li><?php the_author(); ?></li> |
											<?php the_category(', ',' ',''); ?>
											
											
											
										</ul>
										
										<hr />
										<h4><?php the_content(); ?></h4>	
									</div>				
								</div>
							</div>
							
							
							
							<?php 

						endwhile;

						the_posts_pagination(array(
							'screen_reader_text'	=> ' ',
						));

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif;
					?>

			
				</div>					
			</div>		
		</section>	
		<!-- main-top part end -->
		<!-- main-top part end -->
<?php
get_footer();
