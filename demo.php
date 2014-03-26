<?php /* Template Name:TF Demo */ ?>

<?php

// $ip = "66.87.96.160";
$ip = $_SERVER['REMOTE_ADDR'];
$ipurl = "http://api.hostip.info/get_html.php?ip=" . $ip;
$arr = explode("\n",file_get_contents($ipurl));
$city = substr($arr[1],6);
$newcity = str_replace(' ', '', $city);
//$newcity = 'Austin,TX';
//print_r($newcity);

$url = "http://api.flickr.com/services/feeds/photos_public.gne?tags=$newcity,skyline&tagmode=all&format=xml";

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$output = curl_exec($ch);
curl_close($ch);

$arr = simplexml_load_string($output);
foreach($arr->entry as $pic){
    $pictures[] = $pic;
}

if(count($pictures) > 0){
    $i=1;
    while(true){
        $random_key = array_rand($pictures,1);
        $img_links = $pictures[$random_key]->link[1]->attributes();
        $img_url =  (string)$img_links[href];
        if(!empty($img_url) || ($i==count($pictures))){
            break;
        }
        $i++;
    }
}
$parse_url = parse_url($img_url);
if(empty($img_url) || $parse_url[host] == "creativecommons.org"){
    $preset_images = array(
		"http://media-cdn.tripadvisor.com/media/photo-s/00/19/e6/db/austin-at-night.jpg",
		"http://farm8.staticflickr.com/7018/6550204261_c574b75ee0_m.jpg",
		"http://farm8.staticflickr.com/7020/6541450121_8ce4778ae5_m.jpg",
		"http://farm8.staticflickr.com/7159/6541334157_840e83c61d_m.jpg",
		"http://farm4.staticflickr.com/3176/3081674895_a561340eb2_m.jpg",
		"http://farm4.staticflickr.com/3209/3091587849_3c493652e5_m.jpg",
		"http://farm4.staticflickr.com/3190/3093345510_9a3b5d595a_m.jpg",
		"http://farm4.staticflickr.com/3079/3092511161_fe1eb29f4b_m.jpg",
		"http://farm8.staticflickr.com/7002/6549354743_7c52f238d6_m.jpg",
		"http://farm8.staticflickr.com/7030/6551237007_c098882df7_m.jpg",
		);
    $img_url = $preset_images[array_rand($preset_images,1)];
}




?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=1200">

<head>
	<title>TrustedForm Demo | How It Works</title>
	<style>
	body {
		margin:0;
		padding:0;
		background:transparent url('http://trustedform.com/wp-content/themes/trustedform/images/grayish.png') repeat!important;
	}
	header {
		background-color: #fff;
		padding-bottom:10px!important;
	}
	#wrapper {
		margin:0;
		padding:0;
	}
	#offerinfo {
		font-family: "helvetica neue",arial;
		font-size: 14px;
		line-height: 17px;
		margin:20px 0;
	}
	.tfworks {
		margin:0;
		padding:12px 16px;
		font:bold 28px 'proxima nova', sans-serif;
		text-align:left;
		background:#A3A50C;
		background: -webkit-gradient(linear, left top, left bottom, from(#C3C810), to(#A3A50C));
	  background: -moz-linear-gradient(top, #C3C810, #A3A50C);
	  background: linear-gradient(top, #C3C810, #A3A50C);
		color:#fff;
		text-shadow: 0 1px 1px #333333;
		border-bottom:1px solid #777;
	}
	#image {
		margin:2px auto 5px auto;
		max-width:100%;
	}
	#offer_footer {
		border-top: 1px dotted #EEEEEE;
		font-size: 11px;
		margin: 0 auto;
		padding: 10px 0;
		text-align: center;
		width: 50%;
	}
	.activeform {
		margin-top: 25px;
	}
	.activeform tr.field_row td {
		padding-right:0px;
		text-align: left!important;
	}
	.activeform {
		left: 72px;
		margin: 10px auto;
		position: relative;
		width: 520px;
		margin-top:30px;
	}
	.activeform tr td.label_column, .activeform tr td.input_column {
		padding-top: 5px!important;
	}
	.activeform table label {
		font-weight: bold;
		color:#333;
	}
	.btn {
		font-size:17px!important;
	}
	.activeform span.error, .activeform label.error {
		font-weight:normal;
	}
	.activeform tr.field_row td {
	}
	.inner {
		background-color: #FFFFFF;
		border: 1px solid #777;
		padding: 0px 0px 70px 0;
		-webkit-box-shadow:8px 2px 52px #545454;
		-moz-box-shadow:8px 2px 52px #545454;
		box-shadow:8px 2px 52px #545454;
		margin: 90px 0 10px 200px!important;
		min-height:511px;
	}
	#inner_title {
		font-size: 25px;
		font-weight: bold;
		margin: 30px auto 0;
		padding: 7px 11px;
/*		width: 650px;*/
		font-family:tahoma,arial;
		text-shadow: 0 1px 1px #524C4C;
	}
	.inner img {
		border:1px solid #ccc;
		max-width:100%!important;
	}
	.inner .imageholder {
		float:left;
		border:1px solid #ddd;
		padding:15px 15px 25px 15px;
		margin:0 0 0 37px;
		font:13px helvetica neue,arial;
		text-align:center;
		font-weight:bold;
/*		width:326px;*/
		box-shadow:-2px 2px 7px #AAA;
	}
	.inner .imageholder p {
		text-align:center;
		font:bold 15px/20px "proxima nova",arial;
		padding:10px 0 0 0!important;
	}
	.inner .imageholder p.small {
			background:url('http://trustedform.com/wp-content/themes/trustedform/images/reload.png') no-repeat 65px 0px;
			font:normal 10px tahoma,arial;
	}
	#second {
		padding:0 0 0 20px;
	}
	#second h1{
		clear:both;
		text-align:center;
		font:normal 17px arial,helvetica neue,sans;
		margin:30px auto;
	}
	#second p {
		font:600 20px/24px 'proxima nova', sans-serif;
		text-align: left;
		margin: 35px auto;
		padding: 0 30px 0 10px;
	}
	#right {
		width:280px;
		float:left;
		margin:15px 10px 0 58px;
	}
	#right p {
		font: 14px helvetica;
    margin: 30px 0 0;
    text-align: left;
	}
	#right label {
		font:bold 18px helvetica neue, arial;
		margin: 0 0 0 0px;
		text-align: left;

	}
	#right input[type=text] {
		font-size:18px;
		padding:3px;
		margin:0 0 20px 0;
		border: 1px solid #aaa;
	}
/*	.submit-btn {
		-moz-box-sizing: border-box;
		    background-color: rgba(153, 153, 153, 0.1);
		    background-image: -moz-linear-gradient(center top , rgba(255, 255, 255, 0.1), rgba(0, 0, 0, 0.1));
		    background-repeat: repeat-x;
		    border: 1px solid rgba(0, 0, 0, 0.05);
		    border-radius: 3px 3px 3px 3px;
		    box-shadow: 0 1px 0 rgba(255, 255, 255, 0.6) inset, 1px 0 0 rgba(255, 255, 255, 0.25) inset, -1px 0 0 rgba(255, 255, 255, 0.25) inset, 0 -1px 0 rgba(0, 0, 0, 0.25) inset;
		    color: #111;
		    float: left;
				clear:both;
		    font-size: 15px;
		    font-weight: bold;
		    padding: 8px 16px;
		    text-decoration: none;
		    text-shadow: 0 1px 0 rgba(255, 255, 255, 0.75);
	}
	.submit-btn:hover {
		background-color: rgba(164, 164, 164, 0.16);
		background-image: -moz-linear-gradient(center top , rgba(255, 255, 255, 0.2), rgba(0, 0, 0, 0.1));
		background-repeat: repeat-x;
		cursor:pointer;
	}*/
	.submit-btn {
		float: left;
	padding: 7px 30px;
	cursor: pointer;
	font:normal 19px 'Proxima Nova', arial;
	background-color: #A3A508;
		-webkit-border-radius: 4px;
		-moz-border-radius: 4px;
		border-radius: 4px;
	color: #fff;
	text-decoration: none;
	border: none;
	box-shadow: 1px 1px 1px #333;
	-moz-box-shadow:1px 1px 1px #333;
	-webkit-box-shadow:1px 1px 1px #333;
}
.submit-btn:hover {
		background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(255, 255, 255, 0.2)), to(rgba(0, 0, 0, 0.1)));
  background-image: -moz-linear-gradient(top, rgba(255, 255, 255, 0.2), rgba(0, 0, 0, 0.1));
  background-image: linear-gradient(top, rgba(255, 255, 255, 0.2), rgba(0, 0, 0, 0.1));
	cursor:pointer;
}
	.txt {
		font-size:14px;
		font:12px "helvetica neue", arial;
		margin-bottom: 20px;
	}
	#privacy {
		margin: 0 auto;
		padding: 20px 0;
		text-align: center;
		width: 50%;
		font:13px arial;
		clear:both;
	}
.fullpage-main {
margin: 0px 0 50px 0!important;
height: 300px;
background-repeat: no-repeat;
background-position: center center;
background-size: cover;
-moz-background-size: cover;
-webkit-background-size: cover;
}
.main-image .container {
text-align: center;
padding: 0!important;
}



	/* Mobile Portrait Size to Mobile Landscape Size (devices and browsers) */

</style>



	 <script language="javascript">
	function formCheck(form){
	    var errstr = '';

			if(!/\D$/.test(form.firstname.value)){
	        errstr += 'You need to enter your name.\n\n';
	    }
	    if(form.email.value != ''){
		mailRE = /^([a-zA-Z0-9_+\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z0-9\-]+\.)+([a-zA-Z]{2,4})))$/;
		if(!mailRE.exec(form.email.value)){
		    errstr += "Your email address must be entered in the correct format.\n";
		}
	    }else{
		errstr += "You need to enter your email address.\n";
	    }

	if(errstr != ''){
		window.alert(errstr);
		return false;
	    }
	    return true;
	}

	function Trim(strValue){
	    return LTrim(RTrim(strValue));
	}
	function LTrim(strValue){
	    var LTRIMrgExp = /^\s */;
	    return strValue.replace(LTRIMrgExp, "");
	}
	function RTrim(strValue){
	    var RTRIMrgExp = /\s *$/;
	    return strValue.replace(RTRIMrgExp, "");
	}



	</script>
	<!--[if lt IE 9]>
	<script src="http://trustedform.com/wp-content/themes/skel/javascripts/html5.js"></script>
	<![endif]-->
	<!--[if lt IE 9]>
	<style>
	#inner .imageholder {
		border:none;
	}
	#logo img {
	outline : none;
	outline : none;
	border : 0;
	}
	#right {
		margin:55px 10px 0px 58px;
	}
	</style>
	<![endif]-->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<!-- JS
================================================== -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
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
<!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/stylesheets/layout.css"> -->

<!-- Favicons
================================================== -->
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-114x114.png">
			<script type="text/javascript">

		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-2777243-13']);
		  _gaq.push(['_trackPageview']);

		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();

		</script>
</head>

<body>
<div class="top-black-stripe">
    <div class="container">
    <div class="phone five columns"><a href="tel:+1-512-843-8054">Give us a call: 888-624-4159</a></div>
            <div class="menu-utility-nav-container"><ul id="menu-utility-nav" class="menu"><li id="menu-item-969" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-969"><a href="https://app.leadconduit.com/login">LeadConduit Login</a></li>
<li id="menu-item-473" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-473"><a href="http://sso.activeprospect.com">SSO Login</a></li>
<li id="menu-item-474" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-474"><a href="http://support.leadconduit.com">Support</a></li>
<li id="menu-item-21" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-21"><a href="http://uptime.activeprospect.com">System Status</a></li>
</ul></div> 
        </div>
</div>
<header>
	<div class="container">
        <div class="logo">
            <a href="<?php echo get_site_url(); ?>"><img src="<?get_bloginfo ( 'url' );  ?>/wp-content/themes/apscrolling/images/logo.jpg"></a>
        </div>
<nav>
    <div class="menu-primary-container">
    <ul id="menu-primary" class="menu">
    <li id="menu-item-890" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-890"><a href="<? echo get_bloginfo ( 'url' );  ?>/products/">Products</a></li>
<li id="menu-item-888" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-888"><a href="<? echo get_bloginfo ( 'url' );  ?>/about/">About</a></li>
<li id="menu-item-891" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-891"><a href="<?echo get_bloginfo ( 'url' );  ?>/blog/">Blog</a></li>
<li id="menu-item-889" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-889"><a href="<? echo get_bloginfo ( 'url' );  ?>/compliance/">Compliance</a></li>
<li id="menu-item-892" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-892"><a href="<? echo get_bloginfo ( 'url' );  ?>/integrations/">Integrations</a></li>
<li id="menu-item-965" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-965"><a href="<? echo get_bloginfo ( 'url' );  ?>/trustedform-certified-vendors/">Lead Vendors</a></li>
<li id="menu-item-894" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-894"><a href="<? echo get_bloginfo ( 'url' );  ?>/contact-us/">Contact Us</a></li>
</ul></div>    </nav>
</div> <!--  End blog header -->

</header>
<section class="fullpage-main main-image" style="background-image: url('http://localhost:8888/activeprospect/www/wp-content/uploads/2012/06/products.jpg'); background-color:#253842">
	<div class="container">
		<div class="ten columns inner">
			<div class="tfworks">See How TrustedForm Works!</div>

			<!-- Demo and Thank you page results-->
			<? if ($_GET['page'] == 'thanks') : ?>
			
					<div id="second" class="ten">
						<p>Fill out the form below and we'll email you the TrustedForm certificate associated with your sign up. We'll also send you our TCPA Whitepaper.</p>
					</div>
		


			<? else :?> 

					<div id="second" class="ten">
					<p>Fill out the form below and we'll email you the TrustedForm certificate associated with your sign up. We'll also send you our TCPA Whitepaper.</p>
				</div>
			<div class="imageholder">
				<? echo '<img src="'.$img_url.'" width="301" height="225">';?>
							<p>Random Pic for your visit on<br>
				<?=date("F j, Y");#date("F j, Y, g:i:s A");  ?></p>
			</div>
			<div id="right">
				<form method="post" action="https://app.leadconduit.com/v2/PostLeadAction" onsubmit="return formCheck(this);"  enctype="multipart/form-data" >
				<label for="firstname">First Name</label>
				<input type="text" name="firstname">
				<label for="email">Email</label>
				<input type="text" name="email"><br>
				<input type="hidden" name="xxAccountId" value="1d7def1"/>
				<input type="hidden" name="xxCampaignId" value="052bwwh1k"/>

					<input type="hidden" name="xxRedir" value="<? echo get_bloginfo ( 'url' );  ?>/products/trustedform/?page=thanks"/>
				<input type="submit" class="submit-btn" value="Submit">
			</form><br>
				<p>*Note: The TrustedForm certificate is sent to the email address provided on the form.  If you use a fake email address, you won't receive the certificate.  </p>
			</div>


			<? endif ?>

		








				<div style="clear:both;"></div>







		</div>
	</div>


</section>

	<div id="privacy">
		<a target="_blank" href="<?php echo get_site_url(); ?>/privacy">Privacy</a>
</div>
<br><br><br>
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
<?php get_footer(); ?>

