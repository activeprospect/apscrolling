<?php
/**
 * Template Name: Full-width
 * Description: A full-width template
 *
 */
get_header(); 
?>




	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
		<section class="fullpage-main main-image" style="background-image: url('<?=empty($image) ?  get_site_url()."/files/2014/03/about.jpg": $image[0]; ?>');background-color:#253943">
			 <div class="container">
        <?php the_title( '<h3>', '</h3>' ); ?>
       </div>
		</section>


 				<?php the_post(); ?>
 				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">

 					<div class="container">
						<div class="entry-content">
	 						<?php the_content(); ?>
	 						<?php wp_link_pages( 'before=<div class="page-link">' . __( 'Pages:', 'WP-Skeleton' ) . '&after=</div>' ); ?>
	 						<?php edit_post_link( __( 'Edit', 'themename' ), '<span class="edit-link">', '</span>' ); ?>
	 					</div><!-- .entry-content -->
 					</div>	
 				</article><!-- #post-<?php the_ID(); ?> -->

 				<?php #comments_template( '', true ); ?>

	
<?php get_footer(); ?>

