<?php get_header(); ?>
		
		<div id="pageHead">
			<?php global $wp_query; $current_author = $wp_query->get_queried_object(); ?>
			<h1><?php _e('Author:', 'themetrust'); ?> <?php echo $current_author->display_name; ?></h1>
		</div>			
							 
		<div id="content" class="threeFourth clearfix">							
			    
				<div class="posts clearfix">			
				<?php while (have_posts()) : the_post(); ?>			    
					<?php get_template_part( 'part-post'); ?>	
				<?php endwhile; ?>

				<?php get_template_part( 'part-pagination'); ?>
				</div>	
					    	
		</div>		
		<?php get_sidebar(); ?>		
		
<?php get_footer(); ?>