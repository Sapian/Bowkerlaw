<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<!--[if IE 6]>
<link href="<?php bloginfo('template_directory')?>/ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
<!--[if IE 6]>
<script src="<?php bloginfo('template_directory')?>/jq/DD_belatedPNG.js"></script>
<script>
DD_belatedPNG.fix('.side_list');
</script>
<![endif]--> 
<script src="<?php bloginfo('template_directory')?>/jq/css_browser_selector.js" type="text/javascript"></script>
<?php wp_head(); ?>
<script type="text/javascript" src="<?php bloginfo('template_directory')?>/jq/jquery-1.6.min.js"></script> 
<script type='text/javascript'>
jQuery(document).ready(function() {
jQuery("#dropmenu ul").css({display: "none"}); // Opera Fix
jQuery("#dropmenu li").hover(function(){
		jQuery(this).find('ul:first').css({visibility: "visible",display: "none"}).show(268);
		},function(){
		jQuery(this).find('ul:first').css({visibility: "hidden"});
		$("#dropmenu li li:has(ul)").addClass("parent");
		});
});
</script>
</head>
<body>

<div id="logo">
<div id="search">
		<form id="searchform" method="get" action="<?php bloginfo('url'); ?>/">
			<fieldset>
			<input id="s" type="text" name="s" value="<?php the_search_query(); ?>" class="text" />
			<input id="x" type="submit" value="Search" class="button" />
			</fieldset>
		</form>
	</div>
	<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
	
</div>

<div id="header">
<div id="menu">
                <ul id="dropmenu">
						<?php  wp_nav_menu(array('theme_location'=>'header_menu','container'=>'','items_wrap' => '%3$s')); ?>
                </ul>
</div>
	
</div>

<hr />

<div id="page">