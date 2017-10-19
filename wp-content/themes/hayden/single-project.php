<?php get_header(); ?>			
		
		<div id="pageHead">
			<h1><?php the_title(); ?></h1>
			<div class="projectNav clearfix">
							
				<div class="next <?php if(!get_next_post()){ echo 'inactive'; }?>">						
					<?php next_post_link('%link', '&larr; %title'); ?>				
				</div>	
				<div class="previous <?php if(!get_previous_post()){ echo 'inactive'; }?>">
					<?php previous_post_link('%link', '%title &rarr;'); ?>
				</div>				
			</div> <!-- end navigation -->					
		</div>
				 
		<div id="content" class="full">			
			<?php while (have_posts()) : the_post(); ?>			    
			<div class="project clearfix">   						
				<?php the_content(); ?>					
				<ul class="skillList clearfix"><?php ttrust_get_terms_list(); ?></ul>									
			</div>
			<?php comments_template('', true); ?>	
			<?php endwhile; ?>										    	
		</div>
	
<?php get_footer(); ?>