<?php get_header(); ?>	
		
		<?php if(!is_front_page()):?>
		<div id="pageHead">
			<?php $page_description = get_post_meta($post->ID, "_ttrust_page_description", true); ?>
			<?php if ($page_description) : ?>
				<p><?php echo $page_description; ?></p>
			<?php endif; ?>	
            <div id="border"></div>			
		</div>
		<?php endif; ?>	
				 
		<div id="content" class="twoThirds clearfix">
        			<h1><?php the_title(); ?></h1>

			<?php while (have_posts()) : the_post(); ?>			    
			    <div <?php post_class('clearfix'); ?>>						
					<?php the_content(); ?>				
				</div>				
				<?php comments_template('', true); ?>			
			<?php endwhile; ?>					    	
		</div>
		
		<?php get_sidebar(); ?>
		
	
<?php get_footer(); ?>
