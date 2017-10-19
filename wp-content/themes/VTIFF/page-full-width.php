<?php /*
Template Name: Full Width
*/ ?>
<?php get_header(); ?>
	
		<?php if(!is_front_page()):?>
			<div id="pageHead">
				<?php $page_description = get_post_meta($post->ID, "_ttrust_page_description_value", true); ?>
				<?php if ($page_description) : ?>
					<p><?php echo $page_description; ?></p>
				<?php endif; ?>
                <div id="border"></div>			
			</div>
		<?php endif; ?>		
				 
		<div id="content" class="clearfix full">
        				<h1><?php the_title(); ?></h1>
		<?php while (have_posts()) : the_post(); ?>			    
			<div <?php post_class('clearfix'); ?>>						
				<?php the_content(); ?>				
			</div>				
			<?php comments_template('', true); ?>			
		<?php endwhile; ?>					    	
		</div>
		
<?php get_footer(); ?>