<?php
/*
Template Name: Conatct
*/

?>

<?php get_header(); ?>
<!-- start left sidebar -->
<?php // include("leftsidebar.php"); ?>
<!-- end leftsidebar  -->
	<div class="contentmain">
	<div id="content" class="widecolumn">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="lefting">
<h1 class="title"><?php the_title(); ?></h1>
<?php  echo do_shortcode('[contact-form-7 id="52" title="Contact form 1"]'); ?>
</div>
<div class="righting">
<?php the_field('address'); ?>
<?php the_field('google_map'); ?>
</div>
		<?php endwhile; endif; ?>
        <div class="clear"></div>
		<div class="info"><?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?></div>
		
	</div>
	</div>
<!-- start right sidebar -->
<?php // get_sidebar(); ?>
<!-- end right sidebar -->
<?php get_footer(); ?>




