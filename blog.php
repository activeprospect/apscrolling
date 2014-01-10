<?php
		/**
 * Template Name:  Blog, sidebar on left
 * Description: Blog w/ sidebar to left
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
<article>
		<section role="blog" id="blog_listing" class="twelve columns">
			<!-- <h4>Recent Blog Posts</h4> -->

				<?php
				$temp = $wp_query;
				$wp_query= null;
				$wp_query = new WP_Query();
				$wp_query->query('posts_per_page=10'.'&paged='.$paged);
				while ($wp_query->have_posts()) : $wp_query->the_post();
				?>

			<div <?php post_class('blog_post') ?> id="post-<?php the_ID(); ?>">

				<div class="rightbox">
				<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
				<span class="date"><?php the_date(); ?>, by:&nbsp;</span><span class="author"><?php the_author(); ?></span>
				<div class="the_excerpt"><?php the_excerpt(); ?></div>
				<br>

				</div>
				</div>
				<?php endwhile; ?>
					<?php $wp_query = null; $wp_query = $temp;?>

			  <?php if (  $wp_query->max_num_pages > 1 ) : ?>

          <nav id="nav-below">
                     <hr>
                     <div class="nav-previous"><?php next_posts_link(); ?></div>
                     <div class="nav-next"><?php previous_posts_link(); ?></div>
                   </nav>

        <?php endif; ?>

		</section>
</article>

</div>

<?php get_footer(); ?>