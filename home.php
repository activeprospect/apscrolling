
<?php get_header();  ?>
<section class="home-main">
	<?php putRevSlider("home") ?>
</section>

<section role="at-a-glance" class="glance">
	<div class="container">
	<h2>ActiveProspect at a Glance</h2>
	<div class="thecolumns fifteen columns">
			<div class="seven columns left">ActiveProspect is a marketing automation middleware platform that instantly qualifies internet leads.<br><br>It's called middleware because the platform resides between web forms and lead follow-up applications, such as CRM systems.
			</div>
			<div class="seven columns right">
				We help internet marketers automate their unique processes for acquiring qualified sales leads, and for building accurate email subscriber lists. <br><br> Unlike standalone data enhancement services, ActiveProspect enables users to combine unlimited services in a single integration and create complex rules-based lead flows. 
			</div>
		</div>
		<img src="<?php echo get_template_directory_uri(); ?>/images/glance.jpg" class="ataglance">
	</div>
 

</section>
	
<section role="clients" class="clients">
	<div class="container">
		<span>Trusted By</span>
			<ul>
					<li><img src="<?php echo get_template_directory_uri(); ?>/images/customers/adt.png"></li>	
					<li><img src="<?php echo get_template_directory_uri(); ?>/images/customers/dell.png"></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/images/customers/meredith.png"></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/images/customers/infogroup.png"></li>	
					<li><img src="<?php echo get_template_directory_uri(); ?>/images/customers/rex.png"></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/images/customers/debtmerica.png"></li>
			
				
				
			</ul>
	</div>
</section>

<section role="testimonials" class="testimonials">
	<div class="container">
		<h2>What customers are saying about us</h2>
				<ul id="testimonials">
						<li>
								<img src="<?php echo get_template_directory_uri(); ?>/images/testimonials/vito.jpg">
								<div class="client-testimonial">BatchRobot is a great product when your clients can't accept real-time lead delivery. It is easy to set up and provides flexible scheduling. Leads are automatically delivered in a spreadsheet in the right format and on time.
									<div class="author" style="margin-top:20px">
										<strong>-Vito Tonkonog</strong><br>Rex Direct Net, Inc.<br>				
									</div>
								</div>
						</li>
						<li>
								<img src="<?php echo get_template_directory_uri(); ?>/images/testimonials/kendra.jpg">
								<div class="client-testimonial">I am thrilled with the ROI results of using LeadConduit. LeadConduit enables us to verify the validity of opt-ins, send timely confirmation emails and get us financial credit for any bad leads. It also integrates seamlessly into our framework without requiring Dell’s IT resources.
									<div class="author" style="margin-top:20px">
										<strong>-Kendra Williams</strong><br>Dell, Inc<br>				
									</div>
								</div>
						</li>
						<li>
								<img src="<?php echo get_template_directory_uri(); ?>/images/testimonials/harry.jpg">
								<div class="client-testimonial">LeadConduit and ActiveProspect are great partners of DebtAmerica and enable our consumers to benefit from getting access to a variety of financial tools and solutions.
									<div class="author" style="margin-top:20px">
										<strong>-Harry Langenberg</strong><br>Debtmerica, LLC<br>				
									</div>
								</div>
						</li>
						<li>
								<img src="<?php echo get_template_directory_uri(); ?>/images/testimonials/josh.jpg">
								<div class="client-testimonial">As an agency responsible for brand clients, such as P&amp;G, it is critical that we protect their brands. We want to make sure the offer is only run on approved sites and that we are actually getting real opt-in leads. TrustedForm allows us to do that.
									<div class="author" style="margin-top:20px">
										<strong>-Josh Perlstein</strong><br>President at Response Media, Inc.<br>				
									</div>
								</div>
						</li>
						<li>
								<img src="<?php echo get_template_directory_uri(); ?>/images/testimonials/claudio.jpg">
								<div class="client-testimonial">TrustedForm gives us incredible insight into our online lead generation efforts. It allows us to maintain control of our brand and has improved the performance of the channel.
									<div class="author" style="margin-top:20px">
										<strong>-Claudio Duran</strong><br>ADT Security Services, Inc<br>				
									</div>
								</div>
						</li>
						<li>
								<img src="<?php echo get_template_directory_uri(); ?>/images/testimonials/noah.jpg">
								<div class="client-testimonial">We are thrilled to be a flagship member of the TrustedForm Certified Vendor program as we are huge proponents of transparency. By providing certified leads, our leads are now more valuable to our advertisers.
									<div class="author" style="margin-top:20px">
										<strong>-Noah Anderson</strong><br>CEO at EverydayFamily, Inc.<br>				
									</div>
								</div>
						</li>
				</ul>
				<div id="mainpager2" class="pager"></div>
		</div>
	</section>
<section role="products" id="products">
<div class="products-stripe"><h2>Our Core Products</h2></div>
	<div class="leadconduit">
		<div class="lc-content">
		<img src="<?php echo get_template_directory_uri(); ?>/images/logolc.png">
				<p>LeadConduit is an integration layer that governs the interactions among your online lead sources, 3rd party web services, and your marketing backbone systems. It is a real-time platform for the capture, validation, tracking, and delivery of internet leads. Build your own rules-based process flows. Make decisions in real time. </p>
				<a href="<?php echo get_site_url(); ?>/products/leadconduit" class="lc-button link-button">Learn More</a>
		</div>
	</div>
	<div class="trustedform">
		<div class="tf-content">
		<img src="<?php echo get_template_directory_uri(); ?>/images/logotf.png">
				<p>TrustedForm is a lead certification service that independently verifies the origin, content and appearance of internet leads,  including the source URL and a real-time screenshot of the web form the customer saw. <br><br>TrustedForm lead verification addresses three critical risk areas: financial, brand, and legal. 
				</p>
				<a href="<?php echo get_site_url(); ?>/products/trustedform"  class="tf-button link-button">Learn More</a>
		</div>
	</div>
<div style="clear;both;"></div>
</section>
<section role="blog" id="blogs">
		<div class="container">
			<h2>Recent blog posts</h2>
				<div class="home-posts">
						<?php
						$temp = $wp_query;
						$wp_query= null;
						$wp_query = new WP_Query();
						$wp_query->query('posts_per_page=3&cat=3');
						while ($wp_query->have_posts()) : $wp_query->the_post();
						?>
						<!-- Post -->
						<div <?php post_class('blog_post four columns') ?> id="post-<?php the_ID(); ?>">	
							<div id="post-bg">
								<?php
									if ( has_post_thumbnail() ) {
										the_post_thumbnail('homepage-thumb');
									}
								?>
							</div>
							<h3>
								<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
									
							</h3>
							<div class="author-date">by <span><?php the_author(); ?></span> &nbsp;|&nbsp; <?php the_date(); ?>	</div><br><br>
							<a href="<?php the_permalink() ?>" class="read-post">Read post</a>
									<!---<div class="the_excerpt"><?php #the_excerpt(); ?></div> -->	
						
						</div>
						<?php endwhile; ?>
					<?php $wp_query = null; $wp_query = $temp;?>
				</div>
	<!-- <h3 class="moreblogs"><a href="http://activeprospect.com/about-us/blog/">More Blog Posts &raquo;</a></h3> -->
	</div>
</section>

















<?php get_footer(); ?>

