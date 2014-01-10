<?php
/**
 * Template Name: Full-width, no sidebar
 * Description: A full-width template with no sidebar
 *
 */

get_header(); 
#get_template_part( 'menu', 'index' ); //the  menu + logo/site title ?>


		 <div class="container">
 
 			<div id="content">

 				<?php the_post(); ?>

 				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">
 			

					<div class="entry-content">
 						<?php the_content(); ?>
 						<?php wp_link_pages( 'before=<div class="page-link">' . __( 'Pages:', 'WP-Skeleton' ) . '&after=</div>' ); ?>
 						<?php edit_post_link( __( 'Edit', 'themename' ), '<span class="edit-link">', '</span>' ); ?>
 					</div><!-- .entry-content -->
 				</article><!-- #post-<?php the_ID(); ?> -->

 				<?php #comments_template( '', true ); ?>

 			</div><!-- #content -->

		</div>

		<br><br><br><br>
<?php get_footer(); ?>