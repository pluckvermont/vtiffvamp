<?php $home_testimonial_count = intval(of_get_option('ttrust_home_testimonial_count')); ?>
<?php if($home_testimonial_count > 0) : ?>
<div id="testimonials" class="full homeSection clearfix">			
	<?php if(of_get_option('ttrust_testimonials_title') || of_get_option('ttrust_testimonials_description')) : ?>
	<div class="sectionHead">		
	<h3><span><?php echo of_get_option('ttrust_testimonials_title'); ?></span></h3>	
	<p><span><?php echo of_get_option('ttrust_testimonials_description'); ?></span></p>		
	</div>
	<?php endif; ?>		
	<?php
	$args = array(
		'ignore_sticky_posts' => 1,    	
    	'post_type' => array(				
		'testimonial'					
		),
		'posts_per_page' => $home_testimonial_count,
	);
	$testimonials = new WP_Query( $args );		
	?>
	<div class="flexslider">		
		<ul class="slides">
		<?php while ($testimonials->have_posts()) : $testimonials->the_post(); ?>			    
		<li class="testimonial clearfix">	
			<div class="left">			
				<?php the_post_thumbnail("ttrust_square_medium", array('class' => '', 'alt' => ''.get_the_title().'', 'title' => ''.get_the_title().'')); ?>						
			</div>	
			<div class="right">			
				<?php the_content(); ?>	
				<span class="title"><span>- <?php the_title(); ?></span></span>
			</div>			
		</li>
		<?php endwhile; ?>		
		</ul>
	</div>
	<script type="text/javascript">
	//<![CDATA[
	jQuery(document).ready(function(){
	jQuery('#testimonials .flexslider').imagesLoaded(function() {		
		jQuery('#testimonials .flexslider').flexslider({
			slideshowSpeed: 8000,  
			directionNav: true,
			slideshow: true,				 				
			animation: 'fade',
			animationLoop: true
		});  
	});
	});
	//]]>
	</script>
</div>
<?php endif; ?>