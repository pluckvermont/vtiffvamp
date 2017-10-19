<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no" />
	<link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Cardo:400,400italic,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif:regular,bold" />
	<?php $menu_font = of_get_option('ttrust_menu_font'); ?>
	<?php $heading_font = of_get_option('ttrust_heading_font'); ?>
	<?php $sub_heading_font = of_get_option('ttrust_sub_heading_font'); ?>
	<?php $body_font = of_get_option('ttrust_body_font'); ?>
	<?php $slideshow_heading_font = of_get_option('ttrust_slideshow_heading_font'); ?>
	<?php $slideshow_description_font = of_get_option('ttrust_slideshow_description_font'); ?>
	
	<?php if ($menu_font != "") : ?>
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=<?php echo(urlencode($menu_font)); ?>:regular,italic,bold,bolditalic" />
	<?php endif; ?>
	<?php if ($heading_font != "") : ?>
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=<?php echo(urlencode($heading_font)); ?>:regular,italic,bold,bolditalic" />
	<?php endif; ?>	
	<?php if ($sub_heading_font != "") : ?>
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=<?php echo(urlencode($sub_heading_font)); ?>:regular,italic,bold,bolditalic" />
	<?php endif; ?>
	<?php if ($body_font != "" && $body_font != $heading_font) : ?>
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=<?php echo(urlencode($body_font)); ?>:regular,italic,bold,bolditalic" />
	<?php endif; ?>	
	<?php if ($slideshow_heading_font != "") : ?>
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=<?php echo(urlencode($slideshow_heading_font)); ?>:regular,italic,bold,bolditalic" />
	<?php endif; ?>
	<?php if ($slideshow_description_font != "") : ?>
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=<?php echo(urlencode($slideshow_description_font)); ?>:regular,italic,bold,bolditalic" />
	<?php endif; ?>

	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<?php if (of_get_option('ttrust_favicon') ) : ?>
		<link rel="shortcut icon" href="<?php echo of_get_option('ttrust_favicon'); ?>" />
	<?php endif; ?>
	
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	
	<?php wp_head(); ?>
<?php wp_head(); ?>
<script>
jQuery(document).ready(function() {
jQuery('#wpfc-calendar').fullCalendar('changeView','agendaDay');
});
</script>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700|Open+Sans+Condensed:300,700,300italic|Oswald:400,300,700' rel='stylesheet' type='text/css'>
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-54267776-1', 'auto');
  ga('send', 'pageview');

</script>
</head>

<body <?php body_class(); ?> >

<div id="container">

<div id="header">
	<div class="top">
    <div id="navWrapper">
  <div id="mainNav" class="clearfix">							
			<?php wp_nav_menu( array('menu_class' => 'sf-menu', 'theme_location' => 'main', 'fallback_cb' => 'default_nav' )); ?>			
		</div>			
        </div>
	<div class="surround">
    
	<div class="inside clearfix">
		<div id="logoContainer">			 
		<?php $ttrust_logo = of_get_option('logo'); ?>
		<div id="logo">
		<?php if($ttrust_logo) : ?>				
			<h1 class="logo"><a href="<?php bloginfo('url'); ?>"><img src="<?php echo $ttrust_logo; ?>" alt="<?php bloginfo('name'); ?>" /></a></h1>
		<?php else : ?>				
			<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>				
		<?php endif; ?>	
		</div>
		<?php if(!(is_front_page())):?>	

        <?php endif; ?>	

		
        <?php if(!(is_front_page())):?>	
 
        <div id="subhead"><img src="http://www.vtiff.org/wp-content/themes/VTIFF/images/VTIFF-subhead.png">
        </div>
        	<?php endif; ?>

			<?php if(!(is_front_page())):?>	
	
        <?php endif; ?>	</div>
	</div>
	</div>
	</div>	
	
	<?php if(is_front_page()):?>	
		<?php if(of_get_option('ttrust_slideshow_enabled')) get_template_part( 'part-slideshow'); ?>
        		
	<?php endif; ?>
	
</div>
<div style="clear:both;"></div>
<div id="wrap">
<div id="middle" class="clearfix">
	