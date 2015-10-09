<?php
add_action('register_form', 'wpc_messagio_registrazione');
function wpc_messagio_registrazione() {
    $html = '
        <div style="margin:10px 0;border:1px solid #e5e5e5;padding:10px">
            <p style="margin:5px 0;">
        MESSAGE HERE
        </p>
        </div>';
    echo $html;
}
// include("random-post-widget.php");

	if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'name' => 'Footer Sidebar',
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
//add_filter( 'ot_show_pages', '__return_false' );

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