<?php
		/**
 * Template Name:  Blog
 * Description: Blog 
 *
 */
?>
<?php get_header();  ?>
<?php #if ( is_page( 'leadconduit' ) ) echo "ME"; ?>
	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
	$banner = empty($image[0]) ? get_site_url()."/files/2012/06/products1.jpg" : $image[0];
	?>
		<section class="fullpage-main main-image" style="background-image: url('<?=$banner; ?>'); background-color:#253842">
			 <div class="container">
       				<h3>
       				<?php
								$category = get_the_category();
								$category2 = empty($category[0]->cat_name) ? 'Blog' : $category[0]->cat_name;
								echo $category2;
			?></h3>
       		<!-- <div class="about-nav">
       			<ul id="menu-about" class="menu">
       			<?php #wp_list_categories('exclude=1&title_li=&orderby=ID'); ?>
       			</ul>
       		</div>
       </div> -->
		</section>
			<?php if ( is_active_sidebar( 'blog_stripe' ) ) : ?>
				<div class="blog_stripe" id="blog_stripe">
					<div class="container">

        <?php dynamic_sidebar( 'blog_stripe' ); ?>
	
					</div>
				</div>
			<?php endif; ?>








<article class="container">
		<section role="blog" id="blog_listing" class="twelve columns">
				<?php
				$temp = $wp_query;
				$wp_query= null;
				$wp_query = new WP_Query();
				$categories = get_the_category();
				$category_id = empty($categories[0]->cat_ID) ? "3" : $categories[0]->cat_ID;
				$wp_query->query('posts_per_page=5&cat='.$category_id.'&paged='.$paged);
				while ($wp_query->have_posts()) : $wp_query->the_post();
				?>

			<div <?php post_class('blog_post') ?> id="post-<?php the_ID(); ?>">
					<a href="<?php the_permalink() ?>" class="blog_post_loop"><?php the_title('<h2>', '</h2>'); ?></a>
					<div class="date"><?php the_date(); ?>&nbsp;&nbsp;|&nbsp;&nbsp; by:&nbsp;<span class="author"><?php the_author(); ?></span></div>
					<?php the_post_thumbnail(array(221,177) ); ?>
					<div class="the_excerpt"><?php the_excerpt(); ?></div>
					<a href="<?php the_permalink() ?>" class="read-post">Read post</a>
			</div>
				<?php endwhile; ?>
			


<br>
   <div class="nav-previous alignleft"><?php next_posts_link( '&laquo; Older posts' ); ?></div>
<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts &raquo;' ); ?></div>

  

		</section>
</article>

<?php get_footer(); ?>