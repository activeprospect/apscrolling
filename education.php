<?php /* Template Name: Education */ ?>
<?php get_header();  ?>
<div class="container">
<aside>
    <div class="three columns omega" id="side">
        <div class="sidebar"> <!--  the Sidebar -->
            <?php if ( is_active_sidebar( 'right-sidebar' ) ) : ?> <?php dynamic_sidebar( 'right-sidebar' ); ?>
            <?php else : ?><p>You need to drag a widget into your sidebar in the WordPress Admin</p>
	        <?php endif; ?>
       </div>
    </div>
</aside>
        <div class="twelve columns alpha">
            <div class="main">
                <?php while ( have_posts() ) : the_post(); ?><!--  the Loop -->
                 <article id="post-<?php the_ID(); ?>" class="thirteen columns">
                 <?php the_content("Continue reading " . the_title('', '', false)); ?><!--The Content-->
                </article><?php endwhile; ?><!--  End the Loop -->
            </div><!-- End Main -->
        </div><!-- End two-thirds column -->
</div>
</div>
<?php get_footer(); ?>