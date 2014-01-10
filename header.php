<?php

//session_start();

if ( is_home() ) {
	if (!empty($_GET['source'])){
		$_SESSION['source'] = $_GET['source'];
		$_SESSION['subsource'] = $_GET['subsource'];		
	}
	else {
		$_SESSION['source'] = "organic";
		$_SESSION['subsource'] = "organic";
	}
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
<meta name="viewport" content="width=1280">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta property="og:url" content="http://activeprospect.com"/>
<meta property="og:title" content="Lower Acquisition Costs. Better Quality. Real-Time Data Integration."/>
<meta property="og:description" content="ActiveProspect helps marketers automatically qualify internet leads in real time." />
<meta property="og:type" content="article" />
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/images/ap.png" />

<!-- JS
================================================== -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/javascripts/carousel.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/javascripts/app.js"></script>

<!-- TypeKit -->
<!-- <script type="text/javascript" src="http://use.typekit.com/adp7prr.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script> -->

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/javascripts/html5.js"></script>
<![endif]-->

<!-- CSS
================================================== -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/stylesheets/base.css">
<link rel="stylesheet" href= "<?php echo get_template_directory_uri(); ?>/style.css">
<!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/stylesheets/layout.css"> -->

<!-- Favicons
================================================== -->
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-114x114.png">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>><!-- the Body  -->
<!-- Google Tag Manager
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-MJ75"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MJ75');</script> -->
<!-- End Google Tag Manager -->

	<?php get_template_part( 'menu', 'index' ); //the  menu + logo/site title ?>

	<?php if ( is_home() ) : #HOME PAGE?>
		<section class="home">
			
			<div class="main container">
					<h1 class="animated fadeInDown">Start Qualifying Your Online Leads from the First Click</h1>
				<div class="sixteen columns">
					<div class="heading list_carousel animated fadeInDown">				
					<ul id="heroes">
						<li>	
							<h4>Automatically capture and store TCPA proof of consent in real time.</h4>
							<a href="#" class="lc-button link-button">Learn More »</a>
							<div style="clear:both;"></div>
						</li>
							<li>
								<h4>Instantly suppress "do not contact" list phone numbers and emails.</h4>
								<a href="#" class="lc-button link-button">Learn More »</a>
								<div style="clear:both;"></div>
							</li>
							<li>
								<h4>Better lead quality. Lower acquisition costs. Higher conversion.</h4>
								<a href="#" class="lc-button link-button">Learn More »</a>
								<div style="clear:both;"></div>
							</li>
							<li>
								<h4>Sales-ready leads. Qualified and routed in less than a second.</h4>
								<a href="#" class="lc-button link-button">Learn More »</a>
								<div style="clear:both;"></div>
							</li>
					
					</ul>				
				 <!-- <a id="prev" class="prev" href="#">&lt;</a>
				<a id="next" class="next" href="#">&gt;</a> -->
				<div style="clear:both;"></div>
				<div id="mainpager" class="mainpager"></div>

					</div>							
				</div>


			</div>

			<div style="clear:both"></div>
			<div class>
		</section>
	<?php elseif (is_page(9) ) : # Pricing?>
	<section class="gray page animated fadeIn">
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


			<!-- <div class="container">  -->

