<?php /*
Template Name: Home
*/ ?>
<?php get_header(); ?>
<div id="content" class="full">

<?php get_template_part( 'part-projects-home'); ?>
<?php get_template_part( 'part-featured-pages'); ?>
<?php get_template_part( 'part-posts-home'); ?>
<?php get_template_part( 'part-testimonials-home'); ?>

<div id="homeContent" class="full homeSection clearfix">
	<?php while (have_posts()) : the_post(); ?>	
	<div class="inside">
	<?php the_content(); ?>	
	</div>
	<?php endwhile; ?>	
</div>
</div>

<?php get_footer(); ?>	