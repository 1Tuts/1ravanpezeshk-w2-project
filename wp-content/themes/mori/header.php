<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">

	<title>
		یک روانشناس
    </title>

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	
	<link rel=    " stylesheet      "       href="<?php bloginfo('template_directory'); ?>/1styles.css"  type= " text/css " />
	<link rel=    " stylesheet      "       href="<?php bloginfo('template_directory'); ?>/reset.css"  type= " text/css " />
	<link rel=    " stylesheet      "       href="<?php bloginfo('template_directory'); ?>/style.css"  type= " text/css " />
	<script type= " text/javascript "       src= "<?php bloginfo('template_directory'); ?>/jquery.js"   ></script>
	<script type= " text/javascript "       src="<?php bloginfo('template_directory'); ?>/accslides.js"   ></script>	
	
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
  
         
<?php wp_head(); ?>

</head>
<body>
	<div class= " topheader " >
        <div class= " search " >
			<?php
			if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) : ?>                
			<?php endif; ?> 
        </div>
    	<div class="topmenu">
			<?php wp_nav_menu( array( 'theme_location' => 'topmenu' )); ?>
        </div>
    </div>
    
    <div class=" logo ">
    	<div class="image">
        </div>
    </div>
    
    <div class= " container " >
    	<div class= " menu " >
			<?php wp_nav_menu( array( 'theme_location' => 'menu' )); ?>	
        </div>
        
        <div class=" accslides " >
            <div class= " train " >
                <div> <a href= "#" > <img src= " <?php bloginfo('template_directory'); ?>/images/b1.jpg " alt= " Slide Pic 1 " width= " 610 " height= " 320 " title= "" > </a> </div>
                <div> <a href= "#" > <img src= " <?php bloginfo('template_directory'); ?>/images/b2.jpg " alt= " Slide Pic 2 " width= " 610 " height= " 320 " title= "" > </a> </div>
                <div> <a href= "#" > <img src= " <?php bloginfo('template_directory'); ?>/images/b3.jpg " alt= " Slide Pic 3 " width= " 610 " height= " 320 " title= "" > </a> </div>
                <div> <a href= "#" > <img src= " <?php bloginfo('template_directory'); ?>/images/b4.jpg " alt= " Slide Pic 4 " width= " 610 " height= " 320 " title= "" > </a> </div>
                <div class= " clear " ></div>			
            </div>
            <div class= " clear " ></div>
		</div>