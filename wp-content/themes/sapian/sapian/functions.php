<?php

// include("random-post-widget.php");
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'name' => 'Left Sidebar',
        'before_widget' => '<li>',
		
        'after_widget' => '</li>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));
	if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'name' => 'Right Sidebar',
        'before_widget' => '<li>',
        'after_widget' => '</li>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));
	add_theme_support('post-thumbnails');
	set_post_thumbnail_size('my_thumb',190,140,true);
	 // to call this thumbnail, put this in template:-> the_post_thumbnail('my_thumb'); 
	 	  register_nav_menus( array(
	'header_menu' => 'header',
	'footer_menu' => 'footer'
	
	
) );
/**
 * Optional: set 'ot_show_pages' filter to false.
 * This will hide the settings & documentation pages.
 */
add_filter( 'ot_show_pages', '__return_false' );

/**
 * Optional: set 'ot_show_new_layout' filter to false.
 * This will hide the "New Layout" section on the Theme Options page.
 */
add_filter( 'ot_show_new_layout', '__return_false' );

/**
 * Required: set 'ot_theme_mode' filter to true.
 */
add_filter( 'ot_theme_mode', '__return_true' );

/**
 * Required: include OptionTree.
 */
include_once( 'option-tree/ot-loader.php' );



?>