<?php

session_start();

if($_GET['source']){
	$_SESSION['source'] = $_GET['source'];
	$_SESSION['subsource'] = $_GET['subsource'];
}



?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>" />

<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if gte IE 9 ]><html class="no-js ie9" lang="en"> <![endif]-->

<title><?php wp_title('|',true,'right'); ?><?php bloginfo('name'); ?></title>



<!-- Mobile Specific Metas
================================================== -->
<?php $isiPad = (bool) strpos($_SERVER['HTTP_USER_AGENT'],'iPad'); ?>
<?php if ( $isiPad ) : #This is an iPad! ?>
<meta name="viewport" content="width=device-width; initial-scale=.75; maximum-scale=1.0;">
<?php else : # Not an iPad ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
<?php endif; ?>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<!-- JS
================================================== -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/javascripts/carousel.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/javascripts/app.js"></script>

<!-- TypeKit -->
<script type="text/javascript" src="http://use.typekit.com/adp7prr.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/javascripts/html5.js"></script>
<![endif]-->

<!-- CSS
================================================== -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/stylesheets/base.css">
<link rel="stylesheet" href= "<?php echo get_template_directory_uri(); ?>/style.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/stylesheets/layout.css">

<!-- Favicons
================================================== -->
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-114x114.png">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>><!-- the Body  -->
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-MJ75"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MJ75');</script>
<!-- End Google Tag Manager -->

	<?php get_template_part( 'menu', 'index' ); //the  menu + logo/site title ?>

	<?php if ( is_home() ) : #HOME PAGE?>
		<section class="home">
			<div class="main container">

				<div class="sixteen columns">
				<div class="heading">
				<h1>Taking the cost out of Cost Per Lead Advertising</h1>
					<h3>ActiveProspect provides a suite of web applications designed to address<br> the challenges of Cost Per Lead Advertising.</h3>
				</div>
		<ul class="productlist">
			<li id="leadconduit">
			<img alt="" src="<?php echo get_template_directory_uri(); ?>/images/color_lc.png">
				<a href="http://leadconduit.com" target="_blank">	</a>
				<strong>LeadConduit</strong>
				<br>
				<p>Marketing Lead Management</p>
			</li>
			<li id="trustedform">
					<img alt="" src="<?php echo get_template_directory_uri(); ?>/images/color_tf.png">
				<a href="http://trustedform.com" target="_blank"> </a>
				<strong>TrustedForm</strong>
				<br>
				<p>&nbsp;Certified Leads</p>
			</li>
			<li id="formcomposer">
				<img alt="" src="<?php echo get_template_directory_uri(); ?>/images/color_fc.png">
				<a href="http://formcomposer.com" target="_blank"> </a>
				<strong>FormComposer</strong>
				<br>
				<p>Flexible Landing Pages</p>
			</li>
			<li id="batchrobot">
				<img alt="" src="<?php echo get_template_directory_uri(); ?>/images/color_br.png">
				<a href="http://batchrobot.com" target="_blank"> </a>
				<strong>BatchRobot</strong>
				<br>
				<p>Automated Batch Delivery</p>
			</li>
			<li id="screenshotter">

	<img alt="" src="<?php echo get_template_directory_uri(); ?>/images/color_cc.png">
				<a href="http://callconduit.com"> </a>
				<strong>CallConduit</strong>
				<br>
				<p>Simple Call Tracking</p>
			</li>
			<li id="callconduit">
				<img alt="" src="<?php echo get_template_directory_uri(); ?>/images/color_sl.png">
				<a href="http://suppressionlist.com" target="_blank"> </a>
				<strong>SuppressionList</strong>
				<br>
				<p>Suppression List Management</p>
			</li>
		</ul>

				</div>


			</div>

			<div style="clear:both"></div>
		</section>
	<?php elseif (is_page(9) ) : # Pricing?>
	<section class="gray page">
				<div class="container">
					<div class="sixteen columns">
						<?php the_title('<h1>', '</h1>'); ?>
						<p>As a solution provider, we allow our clients to customize our services based on their needs. We offer services in three core groups: Technology Services, Professional Services, and Media Services. </p>
					</div>
				</div>
							<div style="clear:both"></div>
				</section>

		<?php else : # all other pages ?>
			<section class="gray page">
				<div class="container">
					<div class="sixteen columns">
						<?php the_title('<h1>', '</h1>'); ?>
					</div>

				</div>
				<div style="clear:both"></div>
				</section>

			<?php endif; ?>


			<div class="container">

