<?php $recent_posts_count = intval(of_get_option('ttrust_recent_posts_count')); ?>
<?php $recent_posts_title = of_get_option('ttrust_recent_posts_title'); ?>
<?php if($recent_posts_count > 0) : ?>
<div id="homePosts" class="full homeSection clearfix">			
	<?php if($recent_posts_title):?>
	<div class="sectionHead">		
		<h3><span><?php echo $recent_posts_title; ?></span></h3>	
		<p><span><?php echo of_get_option('ttrust_recent_posts_description'); ?></span></p>	
	</div>
	<?php endif; ?>		
	<?php
	$args = array(
		'ignore_sticky_posts' => 1,					
    	'posts_per_page' => $recent_posts_count,
    	'post_type' => array(				
		'post'					
		)
	);	
	?>
	<?php $recentPosts = new WP_Query( $args ); ?>	
	<div class="posts clearfix">
	<?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>			    
		<?php get_template_part( 'part-post'); ?>
	<?php endwhile; ?>	
	</div>
</div>
<?php endif; ?>