<div class="contact-us-stripe">
	<div class="container">
		<h3>Ready to get started?</h3><a href="<?php echo get_bloginfo('url') ?>/get-in-touch/" class="contact-us-button">Get in touch</a>
	</div>
</div>
<footer>
	<!-- <div id="loading"><img src="<?php echo get_stylesheet_directory_uri() . '/images/ajax-loader.gif' ?>"></div> -->
	<section role="apfooter" id="apfooter">
				<div class="container">
					<div class="two columns">
						<h4>Links</h4>
						<ul>
							<li><a href="<? echo get_bloginfo ( 'url' );  ?>/privacy/">Privacy</a></li>
							<li><a href="https://sso.activeprospect.com/tos">Terms</a></li>
							<li><a href="<? echo get_bloginfo ( 'url' );  ?>/security/">Security</a></li>
						</ul>
						<h4 style="margin-bottom:10px;margin-top:35px">Follow Us</h4>
						<a href="https://twitter.com/#!/activeprospect" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() . '/images/tw.png' ?>" width="23" height="23" alt="Twitter"></a>&nbsp;&nbsp;<a href="https://www.linkedin.com/company/523272?trk=vsrp_companies_res_name&trkInfo=VSRPsearchId%3A112683941395290571806%2CVSRPtargetId%3A523272%2CVSRPcmpt%3Aprimary" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() . '/images/li.png' ?>" width="23" height="23" alt="LinkedIn"></a>	
										
					</div>
					<div class="five columns subscribe">
						<h4>Subscribe</h4>
						<p>Enter your email and sign up for our newsletter</p>
							<form method="post" id="newsletter_form" name="newsletter_form">
								<input type="text" class="newsletter_email" name="newsletter_email" id="newsletter_email" placeholder="enter your email address" value="">
									<input type="hidden" name="source" value="<?php echo $_SESSION['source']; ?>">
									<input type="hidden" name="subsource" value="<?php echo $_SESSION['subsource']; ?>">
									<input type="hidden" name="newsletter">
								<button type="submit" id="submit_newsletter" class="submit_newsletter">Subscribe</button>
							</form>		
						<br>
						
						<div class="allbadges">
							<ul class="badges">
														<li>	<a href="http://www.bbb.org/central-texas/business-reviews/sales-lead-generation/activeprospect-in-austin-tx-90106626#sealclick" title="ActiveProspect Inc Business Review in Austin, TX - Central, Coastal, Southwest Texas and the Permian Basin BBB"><img src="<?php echo get_stylesheet_directory_uri() . '/images/bbb.png' ?>"  alt="Bbb Org" id="bbb"></a></li>
								<li>	<img src="<?php echo get_stylesheet_directory_uri() . '/images/apscu.png' ?>">		</li>
	
				
							<li>	<a href="http://performancemarketingassociation.com/"><img src="<?php echo get_stylesheet_directory_uri() . '/images/pma.png' ?>"  alt="PMA"></a></li>
								<li>	<a href="http://www.prweb.com/releases/2012/10/prweb10042667.htm" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() . '/images/fast.png' ?>"  alt="Fast50" ></a></li>
												<li>	<a href="http://www.leadscouncil.com/members/?id=20248138" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() . '/images/council.png' ?>"  alt="LeadsCouncil" ></a></li>
								
							</ul>						
										
					</div>
					
					</div>
					<div class="six columns contact-us-form">
						<h4 id="contact">Contact Us</h4>   
						<p>Complete the form below to request additional information</p>
							<form method="post" id="contactus_form" name="contactus_form">
								<input type="text" name="first_name" placeholder="first name" class="first_name">
								<input type="text" name="last_name" placeholder="last name" class="last_name">	
								<input type="text" name="email" placeholder="email address" class="email">
								<input type="text" name="phone" placeholder="phone" class="phone2">
								<input type="text" name="phoneext" placeholder="ext" class="phoneext">
								<input type="text" name="company" placeholder="company" class="company">
								<input type="text" name="website" placeholder="website" class="website">
								<div class="found-select">
									<select class="found" id="found_input" name="found">
										<option value="" class="placeholder-select" >how did you hear about us?</option>
										<option value="search">Search</option>
										<option value="advertisement">Advertisement</option>
										<option value="referral">Referral</option>
										<option value="trade_show">Trade Show</option>
										<option value="Lyris">Lyris</option>
										<option value="other">Other</option>
									</select>
								</div>
									<input type="hidden" name="contactus">
									<input type="hidden" name="ap_site" value="activeprospect.com">
									<input type="hidden" name="source" value="<?php echo $_SESSION['source']; ?>">
									<input type="hidden" name="subsource" value="<?php echo $_SESSION['subsource']; ?>">
								<button type="submit" id="submit_contactus" class="submit_contactus">Contact Us</button>
						</form>					
					</div>
					</div>
		<br><br>	<br><br>
	</section>
	<section class="secondary-footer">
		<div class="container">
				<img src="<?php echo get_stylesheet_directory_uri() . '/images/ap.logo.footer.png' ?>"  alt="ActiveProspect">
				<div class="company-address">&copy; <?php echo date("Y"); ?> ActiveProspect, Inc. All Rights Reserved.  &nbsp;&nbsp;|&nbsp;&nbsp;  4203 Guadalupe St, Austin, TX 78751  &nbsp;&nbsp;|&nbsp;&nbsp;   Phone:  888-624-4159</div>
		</div>
	</section>

</footer>

<?php wp_footer(); ?>

<!-- ========================== TrustedForm Script ================================ -->
<script type="text/javascript">
(function() {
    var field = 'xxTrustedFormCertUrl';
    var provideReferrer = false;
    var tf = document.createElement('script');
    tf.type = 'text/javascript'; tf.async = true;
    tf.src = 'http' + ('https:' == document.location.protocol ? 's' : '') +
    '://api.trustedform.com/trustedform.js?provide_referrer=' + escape(provideReferrer) + '&field=' + escape(field) + '&l='+new Date().getTime()+Math.random();
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(tf, s); }
)();
</script>
<noscript>
    <img src="http://api.trustedform.com/ns.gif" />
</noscript>

</body>
</html>