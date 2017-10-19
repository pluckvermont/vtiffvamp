<?php
query_posts( array(
	'ignore_sticky_posts' => 1,
	'posts_per_page' => 20,
	'post_type' => 'slide'
));
?>
<?php if(have_posts()) :?>
<div class="slideshow">
			
	<div class="flexslider">		
		<ul class="slides">
			<?php $i = 1; while (have_posts()) : the_post(); ?>
			<?php
			//Get slide options
			$slide_description = get_post_meta($post->ID, "_ttrust_slide_description", true);					
			$show_slide_text = get_post_meta($post->ID, "_ttrust_slide_show_text", true);
			$slide_background_img = wp_get_attachment_image_src(get_post_meta($post->ID, "_ttrust_slide_background_image", true), 'full');
			$slide_text_alignment = get_post_meta($post->ID, "_ttrust_slide_text_alignment", true);
			$slide_background_img = $slide_background_img[0];
			
			$s_styles = "";
			$s_class = "";
			if($slide_background_img){
				$s_styles .= "background-image: url(".$slide_background_img.");";						
				$s_styles .= "background-repeat: no-repeat;";
				$s_styles .= "background-position: center center;";
				$s_styles .= "background-size: cover;";	
			}		
			?>					
		
			<li id="slide<?php echo $i; ?>" <?php post_class($s_class); ?> style="<?php echo $s_styles;?>">				
				<?php the_content(); ?>				
				<?php if($show_slide_text) : ?>				
					<div class="details <?php echo $slide_text_alignment; ?>">
						<div class="box">
							<div class="inside">
								<div class="text">
									<h2><span><?php the_title(); ?></span></h2>
								<?php echo wpautop(do_shortcode($slide_description)); ?>
							</div>
							</div>
						</div>					
					</div>
				<?php endif; ?>
				
			</li>		
			
			<?php $i++; ?>			
		
			<?php endwhile; ?>
		</ul>
	</div>	
	
	
</div>
<?php endif; ?>
<?php wp_reset_query();?>






