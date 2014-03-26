<?php 
	/**
 * Template Name:  About Us
 * Description: About Us
 *
 */	
?>

<?php get_header();  ?>



<?php if (has_post_thumbnail( $post->ID ) ): ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );     ?>
    <section class="aboutus-main main-image" style="background-image: url(' <?=empty($image) ?  get_site_url()."/files/2014/03/about.jpg": $image[0]; ?>')">
       <div class="container">
        <?php the_title( '<h3>', '</h3>' ); ?>
        <?php wp_nav_menu(array('container_class' => 'about-nav', 'menu' => 'About')); ?> 
       </div>
    </section>

<?php endif; ?>


    <?php while ( have_posts() ) : the_post(); ?><!--  the Loop -->
        <article id="post-<?php the_ID(); ?>">
            <div class="container">
                <?php the_content("Continue reading " . the_title('', '', false)); ?><!--The Content-->
                    <?php if(is_single()) : ?>
                           <div style="font-style: italic;"><div class="author"><?php the_author(); ?></div><div class="date"><?php the_date('M j, Y'); ?></div> </div>
                    <?php endif; ?>
            </div>
        </article>
    <?php endwhile; ?><!--  End the Loop -->
                <?php /* Display navigation to next/previous pages when applicable */ ?><?php /* Only load comments on single post/pages*/ ?><?php #if(is_page() || is_single()) : comments_template( '', true ); endif; ?>
	
				<div style="clear:both"></div>
<?php get_footer(); ?>