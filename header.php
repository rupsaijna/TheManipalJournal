<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php bloginfo('name'); ?><?php wp_title('-'); ?></title>

<link href="<?php bloginfo('stylesheet_url') ?>" rel="stylesheet" type="text/css" />

<!--Jquery cycle pager plug in starts here-->
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory')?>/addons/jquery.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory')?>/addons/jquery.cycle.all.js"></script>

<!--for carousel-->
<!--jCarousel library-->
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory')?>/addons/jquery.jcarousel.min.js"></script>
<!--jCarousel skin stylesheet-->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory')?>/skin.css" />

<script type="text/javascript">
$(function() {
    $('#slideshow').before('<div id="nav" class="nav">').cycle({
        fx:     'fade',
        speed:  5000,
        timeout: 3000,
        pager:  '#nav',
        before: function() { if (window.console) console.log(this.src); }
    });
});
<!--carousel-->
function mycarousel_initCallback(carousel)
{
    // Disable autoscrolling if the user clicks the prev or next button.
    carousel.buttonNext.bind('click', function() {
        carousel.startAuto(0);
    });

    carousel.buttonPrev.bind('click', function() {
        carousel.startAuto(0);
    });

    // Pause autoscrolling if the user moves with the cursor over the clip.
    carousel.clip.hover(function() {
        carousel.stopAuto();
    }, function() {
        carousel.startAuto();
    });
};

jQuery(document).ready(function() {
    jQuery('#mycarousel').jcarousel({
		scroll:1,
		animation:400,
        auto: 10,
        wrap: 'circular',
        initCallback: mycarousel_initCallback
    });
});
<!--carousel ends-->
</script>

<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>


</head>
<body>
<div class="container">
  	<div class="header">
		<div class="logo"><img src="<?php bloginfo('stylesheet_directory')?>/images/tmj_header_logo.jpg" /></div>
		<div class="header_advertisement"><a href="" ><img src="<?php bloginfo('stylesheet_directory')?>/images/header_advertisement.jpg" border="0px" /></a></div>
		<div class="cleardiv"></div>
	</div>
	<div class="top_level_link" >
	<ul class="top_level_link_items">
	<li class="top_level_link_listitem"><a href="" class="top">Home</a></li>
	<?php $pages=get_pages('');
	foreach($pages as $page){?>
		<li class="top_level_link_listitem"><a href="<?php echo get_page_link( $page->ID )?>" class="top"><?php echo $page->post_title?></a></li><?php }?>
	<div class="cleardiv"></div>
			</ul>
			<div class="cleardiv"></div>
	</div>
	
	<div class="social_network_link">
		<div class="social_network_link_twitter"><a href=""><img src="<?php bloginfo('stylesheet_directory')?>/images/twitter.jpg" border="0px" /></a></div>
		<div class="social_network_link_facebook"><a href=""><img src="<?php bloginfo('stylesheet_directory')?>/images/facebook.jpg" border="0px" /></a></div>
		<div class="social_network_link_temp"><a href=""><img src="<?php bloginfo('stylesheet_directory')?>/images/Temp.jpg" border="0px" /></a></div>
		<div class="cleardiv"></div>
	</div>
	<div class="menu_tab" >
	<ul class="menu_tab_items">
	<?php $categories=get_categories('');
	foreach($categories as $category){?>
		<li class="menu_tab_listitem"><a href="<?php echo get_category_link( $category->term_id )?>" class="menu"><?php echo $category->name?></a></li><?php }?>
	<div class="cleardiv"></div>
			</ul>
			<div class="cleardiv"></div>
	</div>