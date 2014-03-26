<?php get_header();  ?>


        <section class="fullpage-main main-image" style="background-image: url(' <?=empty($image) ?  get_site_url()."/files/2012/06/products1.jpg": $image[0]; ?>')">
             <div class="container">
        <h3><?php $category = get_the_category(); $firstCategory = $category[0]->cat_name; echo $firstCategory; ?></h3>
       </div>

        </section>







      
    

            <?php while ( have_posts() ) : the_post(); ?><!--  the Loop -->
                <article id="post-<?php the_ID(); ?>" class="container">
                    <section role="blog" id="blog_listing" class="twelve columns blog_post">
				      <?php if ( has_post_thumbnail() ) the_post_thumbnail( array(260,177) ); ?>
                        <h1><?php single_post_title(); ?> </h1>
                        <div class="date"><?php the_date(); ?>&nbsp;&nbsp;|&nbsp;&nbsp; by:&nbsp;<span class="author"><?php the_author(); ?></span></div>
                        <?php the_content("Continue reading " . the_title('', '', false)); ?><!--The Content-->

                        <br><br><br>
                         <?php if ( in_category( 'blog' )) : ?>
                            <div id="disqus_thread"></div>
                            <script type="text/javascript">
                                /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
                                var disqus_shortname = 'activeprospect'; // required: replace example with your forum shortname

                                /* * * DON'T EDIT BELOW THIS LINE * * */
                                (function() {
                                    var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                                    dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                                    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                                })();
                            </script>
                        <?php endif; ?>
                                <br><br>

                    </section>
                </article>
            <?php endwhile; ?><!--  End the Loop -->
               		
					
        <?php  get_template_part( 'sidebar' );?>









		


<?php get_footer(); ?>

    
                               