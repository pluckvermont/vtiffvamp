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
    
        <?php endif; ?> </div>
    </div>
    </div>
    </div>  
    
    <?php if(is_front_page()):?>    
        <?php if(of_get_option('ttrust_slideshow_enabled')) get_template_part( 'part-slideshow'); ?>
                
    <?php endif; ?>
    
</div>