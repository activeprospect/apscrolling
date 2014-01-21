<?php 
	/**
 * Template Name:  About Us, sidebar on left
 * Description: About Us subpages moves sidebar to left
 *
 */	
?>

<?php get_header();  ?>
<div class="container">
<aside>
    <div class="two columns omega" id="side">
        <div class="sidebar"> <!--  the Sidebar -->
            <?php if ( is_active_sidebar( 'right-sidebar' ) ) : ?> <?php dynamic_sidebar( 'right-sidebar' ); ?>
            <?php else : ?><p>You need to drag a widget into your sidebar in the WordPress Admin</p>
	        <?php endif; ?>
       </div>
    </div>
</aside>
        <div class="thirteen columns alpha">
            <div class="main">
                <?php while ( have_posts() ) : the_post(); ?><!--  the Loop -->
                 <article id="post-<?php the_ID(); ?>" class="thirteen columns">
                    <div class="title"></div><?php the_content("Continue reading " . the_title('', '', false)); ?><!--The Content-->
                    <?php if(is_single()) : ?>
                       <div style="font-style: italic;"><div class="author"><?php the_author(); ?></div><div class="date"><?php the_date('M j, Y'); ?></div> </div>
                    <?php endif; ?>
                </article><?php endwhile; ?><!--  End the Loop -->
                <?php /* Display navigation to next/previous pages when applicable */ ?><?php /* Only load comments on single post/pages*/ ?><?php #if(is_page() || is_single()) : comments_template( '', true ); endif; ?>
            </div><!-- End Main -->
        </div><!-- End two-thirds column -->
	
				<div style="clear:both"></div>
    </div><!-- End Content -->
<?php get_footer(); ?>