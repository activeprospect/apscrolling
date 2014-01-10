<footer>
	<div id="loading"><img src="<?php echo get_stylesheet_directory_uri() . '/images/ajax-loader.gif' ?>"></div>
	<section role="apfooter" id="apfooter">
		<div class="content">
				<div class="container">
					<div class="two columns">
						<h4>Links</h4>
						<ul>
							<li><a href="#">Terms</a></li>
							<li><a href="#">Privacy</a></li>
							<li><a href="#">Security</a></li>
							<li><a href="#">Careers</a></li>
							<li><a href="#">Blog</a></li>
								<li><a href="#">About Us</a></li>
						</ul>
						<h4 style="margin-bottom:10px;margin-top:35px">Follow Us</h4>
						<a href="https://twitter.com/#!/activeprospect" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() . '/images/ctw.png' ?>" width="23" height="23" alt="Twitter"></a>
						&nbsp;&nbsp;<a href="http://www.linkedin.com/company/523272?trk=tyah" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() . '/images/cli.png' ?>" width="23" height="23" alt="LinkedIn"></a>
					&nbsp;&nbsp;<a href="http://feeds.feedburner.com/Activeprospect" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() . '/images/crss.png' ?>" width="23" height="23" alt="Subscribe to our blog"></a>
					<h4 style="margin-top:35px">Address</h4>
					<ul>
						<li>ActiveProspect, Inc.</li>
						<li>4203 Guadalupe St, </li>
						<li>Austin, TX 78751</li>
					</ul>
											
					</div>
					<div class="six columns">
						<h4>Subscribe</h4>
						<p>Enter your email and sign up for our newsletter</p>
						<form method="post" id="newsletter_form" name="newsletter_form">
							<input type="text" class="newsletter_email" name="newsletter_email" placeholder="Enter your email address" value="">
								<input type="hidden" name="source" value="<?php echo $_SESSION['source']; ?>">
								<input type="hidden" name="subsource" value="<?php echo $_SESSION['subsource']; ?>">
								<input type="hidden" name="newsletter">
							<button type="submit" id="submit_newsletter" class="submit_newsletter">Subscribe</button>
						</form>		<br>
						
						<div class="allbadges">
								<h4>Badges</h4>	
							<ul class="badges">
								<li>	<img src="<?php echo get_stylesheet_directory_uri() . '/images/seal-apscu4.jpg' ?>">		</li>
								<li>	<a href="http://www.bbb.org/central-texas/business-reviews/sales-lead-generation/activeprospect-in-austin-tx-90106626#sealclick" title="ActiveProspect Inc Business Review in Austin, TX - Central, Coastal, Southwest Texas and the Permian Basin BBB"><img src="<?php echo get_stylesheet_directory_uri() . '/images/bbb.png' ?>"  alt="Bbb Org" id="bbb"></a></li>
								<li>	<a href="http://www.leadscouncil.com/members/?id=20248138" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() . '/images/seal-leadscouncil.png' ?>"  alt="LeadsCouncil" width="75" height="79"></a></li>
								<li>	<a href="http://performancemarketingassociation.com/"><img src="<?php echo get_stylesheet_directory_uri() . '/images/theseal.png' ?>"  alt="PMA"></a></li>
								<li>	<a href="http://www.prweb.com/releases/2012/10/prweb10042667.htm" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() . '/images/seal-fast50.png' ?>"  alt="Fast50" width="70" height="69"></a></li>
								
							</ul>						
										
					</div>
					
					</div>
					<div class="six columns">
						<h4 id="contact">Contact Us</h4>   
						<p>Complete the form below to request additional information</p>
							<form method="post" id="contactus_form" name="contactus_form">
								<input type="text" name="first_name" placeholder="First Name" class="first_name">
								<input type="text" name="last_name" placeholder="Last Name" class="last_name">	
								<input type="text" name="email" placeholder="Email" class="email">
								<input type="text" name="phone" placeholder="Phone" class="phone">
								<input type="text" name="phoneext" placeholder="Ext" class="phoneext">
								<input type="text" name="company" placeholder="Company" class="company">
								<input type="text" name="website" placeholder="Website" class="website">
								<div class="found-select">
									<select class="found" id="found_input" name="found">
										<option value="" class="placeholder-select" >How did you hear about us?</option>
										<option value="search">Search</option>
										<option value="advertisement">Advertisement</option>
										<option value="referral">Referral</option>
										<option value="trade_show">Trade Show</option>
										<option value="Lyris">Lyris</option>
										<option value="other">Other</option>
									</select>
								</div>
									<input type="hidden" name="contactus">
									<input type="hidden" name="source" value="<?php echo $_SESSION['source']; ?>">
									<input type="hidden" name="subsource" value="<?php echo $_SESSION['subsource']; ?>">
								<button type="submit" id="submit_contactus" class="submit_contactus">Contact Us</button>
						</form>					
					</div>
			</div>
		</div>
		<br><br>	<br><br>
	</section>
	
<!-- MOBILE UTILITY NAV -->
<section role="mobile-footer" class="mobile-footer">
		<ul>
			<li class="support"><a href="http://leadconduit.com">Support</a></li>
			<li class="uptime"><a href="http://uptime.activeprospect.com">Uptime</a></li>
			<li class="login"><a href="http://sso.activeprospect.com">Login</a></li>
		</ul>
	</section>

</footer>

<?php wp_footer(); ?>

<!-- end ad widget -->

</body>
</html>

<!--
<div class="company">&copy; <?=date("Y"); ?> ActiveProspect, Inc. All Rights Reserved.&nbsp;&nbsp; <a href="https://sso.activeprospect.com/tos">Terms</a>&nbsp;&nbsp; | &nbsp;&nbsp; <a href="http://www.activeprospect.com/privacy">Privacy Policy</a>&nbsp;&nbsp;|&nbsp;&nbsp; <a href="http://activeprospect.com/activeprospect-security">Security</a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="http://activeprospect.com/about-us/careers/">Careers</a>&nbsp;&nbsp;|&nbsp;&nbsp; <a href="http://activeprospect.com/about-us/team/">About Us</a> <span class="social">Stay Connected:<a href="http://www.linkedin.com/company/523272?trk=tyah" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() . '/images/linkedin.png' ?>" width="16" height="16" alt="Linkedin"></a>
	<a href="https://twitter.com/#!/activeprospect" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() . '/images/twitter.png' ?>" width="16" height="16" alt="Twitter"></a>
	<a href="http://feeds.feedburner.com/Activeprospect" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() . '/images/rss2.png' ?>" alt="rss" width="16" height="16" /></a>
	<br>
	<div style="margin:5px -6px 0 0;display:none;"><a href="http://www.bbb.org/central-texas/business-reviews/sales-lead-generation/activeprospect-in-austin-tx-90106626#sealclick" title="ActiveProspect Inc Business Review in Austin, TX - Central, Coastal, Southwest Texas and the Permian Basin BBB"><img src="<?php echo get_stylesheet_directory_uri() . '/images/bbb.png' ?>"  alt="Bbb Org" id="bbb"></a>&nbsp;&nbsp<a href="http://performancemarketingassociation.com/"><img src="<?php echo get_stylesheet_directory_uri() . '/images/theseal.png' ?>"  alt="PMA"></a></span></div>
</div>
<a href="http://activeprospect.com"><img src="<?php echo get_stylesheet_directory_uri() .'/images/ap_footer_logo.png' ?>" width="194" height="51" alt="ActiveProspect" class="footer_logo"></a>
<address><span>ActiveProspect, Inc. <br>4203 Guadalupe St, Austin, TX 78751<br>Phone:&nbsp;&nbsp;888-624-4159</span></address>
<div class="list-of-seals" style="right:0px">
	<ul>
		<li><a href="http://www.leadscouncil.com/members/?id=20248138" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() . '/images/seal-leadscouncil.png' ?>"  alt="LeadsCouncil" width="75" height="79"></a></li>
		<li><a href="http://www.prweb.com/releases/2012/10/prweb10042667.htm" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() . '/images/seal-fast50.png' ?>"  alt="Fast50" width="70" height="69"></a></li>
		<li><a href="http://www.bbb.org/central-texas/business-reviews/sales-lead-generation/activeprospect-in-austin-tx-90106626#sealclick" title="ActiveProspect Inc Business Review in Austin, TX - Central, Coastal, Southwest Texas and the Permian Basin BBB" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() . '/images/bbb.png' ?>"  alt="Bbb Org" id="bbb"></a></li>
		<li><a href="http://performancemarketingassociation.com/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() . '/images/theseal.png' ?>"></a></li>	
		<li><img src="<?php echo get_stylesheet_directory_uri() . '/images/seal-apscu4.jpg' ?>"></li>	

	
	</ul>
	
	-->