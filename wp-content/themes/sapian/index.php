<?php get_header(); ?>

<?php // include("leftsidebar.php"); ?>
<div class="homespl">
    <div class="md">
<?php echo ot_get_option( 'md__s_message' ); ?>
    </div>
    <div class="homeright">
    	<div class="wel">
<?php echo ot_get_option( 'welcome_content' ); ?>
        </div>
        <div class="news">
        <h2>Latest news & Events</h2>
        <div class="top"></div>
        <div class="mid">
        <ul>
<?php global $paged;
query_posts('post_type=news&showposts=3&paged=' . $paged); ?>
<?php if(have_posts()) : while (have_posts() ) : the_post(); ?>
              <li><?php the_title(); ?> </li>
<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_query(); ?>   

        </ul>
              
        </div>
        <div class="bot"></div>
        </div>
        <div class="clear"></div>
        <div class="widgets">
        <div class="finished">
                <?php query_posts('page_id=35'); ?>
                <?php if(have_posts()) : while (have_posts() ) : the_post(); ?>
                <h2><?php the_title(); ?></h2>
                <a href="<?php the_permalink() ?>">View More</a>
                <?php endwhile; endif; ?>
                <?php wp_reset_query(); ?>
        </div>
                <div class="ongoing">
                <?php query_posts('page_id=36'); ?>
                <?php if(have_posts()) : while (have_posts() ) : the_post(); ?>
                <h2><?php the_title(); ?></h2>
                <a href="<?php the_permalink() ?>">View More</a>
                <?php endwhile; endif; ?>
                <?php wp_reset_query(); ?>
        </div>
                <div class="upcoming">
                <?php query_posts('page_id=37'); ?>
                <?php if(have_posts()) : while (have_posts() ) : the_post(); ?>
                <h2><?php the_title(); ?></h2>
                <a href="<?php the_permalink() ?>">View More</a>
                <?php endwhile; endif; ?>
                <?php wp_reset_query(); ?>
        </div>
        </div>
    </div>
    <div class="clear"></div>
    
</div>


<div class="contentmain">
<div id="content">

</div>
</div>


<?php get_footer(); ?>