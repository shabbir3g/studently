<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
						 <div class="lewis-part text-center">
							<h2>Blog</h2>
						 </div>
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
							the_post();

							/*
							 * Include the Post-Type-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
							 */
							get_template_part( 'template-parts/content', get_post_type() );

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
