<div class="container">
		<div class="content">
        <div class="ten columns alpha">
            <div class="main">
                <?php while ( have_posts() ) : the_post(); ?><!--  the Loop -->
                 <article id="post-<?php the_ID(); ?>" class="ten columns">
                    <div class="title"></div><?php the_content("Continue reading " . the_title('', '', false)); ?><!--The Content-->
                </article><?php endwhile; ?><!--  End the Loop -->
                <?php /* Display navigation to next/previous pages when applicable */ ?><?php /* Only load comments on single post/pages*/ ?><?php #if(is_page() || is_single()) : comments_template( '', true ); endif; ?>		
            </div><!-- End Main -->
        </div><!-- End two-thirds column -->
        <?php  get_template_part( 'sidebar' );?>
    </div><!-- End Content -->
		</div>