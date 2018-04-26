<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package studently
 */
global $redux_demo;
get_header();
?>

	<?php if(get_the_post_thumbnail_url()): ?>
	<div class="header-area"
	
	<?php while(have_posts()): the_post(); ?>
	style=" background: url(<?php echo the_post_thumbnail_url(); ?>);"
	<?php endwhile; ?>
	
	>
	
	<?php else: ?>
	<div>
	<?php endif; ?>
			<?php get_template_part('template-parts/content', 'menu'); ?>
			
			<?php if(is_front_page()):  ?>
			
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-md-8 col-sm-8 col-6"></div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-6">
						<div class="header-bottom-right">
						
							<?php echo $redux_demo['opt-htext']; ?>
							
						</div>
					</div>							
				</div>					
			</div>
			<?php endif; ?>
			
			
		</div>	
		
	
		<?php while(have_posts()): the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; ?>
		
		

<?php
get_footer();
