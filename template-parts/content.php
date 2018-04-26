<div class="singles-blog">
	<div class="blog">
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
	<div class="blog">
		<div class="main-part-right main-part-ab text-center">
			<ul class="post-tags">
				<li><?php the_time('F j, Y'); ?> </li>
				<!--<li><?php the_author(); ?></li> |
				<?php the_category(', ',' ',''); ?> -->
				
				
				
			</ul>
			
			<hr />
			<h4><?php echo wp_trim_words(get_the_content(),32,'</h4>
			<a href="'.get_the_permalink().'">Read More</a>'); ?>		
		</div>				
	</div>
</div>