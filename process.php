<?php

if(isset($_POST['newsletter'])) {
#Newsletter form submission
$email = $_POST['newsletter_email'];
$xxTrustedFormCertUrl = $_POST['xxTrustedFormCertUrl'];
$source = $_POST['source'];
$subsource = $_POST['subsource'];
$xxAccountId = "1d7def1";
$xxCampaignId = "054vw8rg5";



$query_array  = array(
	'email'=>$email,
	'xxTrustedFormCertUrl'=>$xxTrustedFormCertUrl,	
	'xxTest'=>'true',	
	'source'=>$source,	
	'subsource'=>$subsource,	
	'xxAccountId'=>$xxAccountId,
	'xxCampaignId'=>$xxCampaignId
);

	$leadconduit = "https://production.leadconduit.com/ap/v2/PostLeadAction?".http_build_query($query_array)."";
	// 	
	// $ch = curl_init();
	// curl_setopt($ch, CURLOPT_URL, "$leadconduit");
	// curl_setopt($ch, CURLOPT_HEADER, 0);
	// curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);
	// curl_setopt($ch, CURLOPT_TIMEOUT, 5);
	// curl_exec($ch);
	// curl_close($ch);
	
}

if(isset($_POST['contactus'])) {
	#Newsletter form submission
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$phoneext = $_POST['phoneext'];
	$company = $_POST['company'];
	$website = $_POST['website'];
	$found = $_POST['found'];
	$source = $_POST['source'];
	$subsource = $_POST['subsource'];
	$xxTrustedFormCertUrl = $_POST['xxTrustedFormCertUrl'];
	$xxAccountId = "1d7def1";
	$xxCampaignId = "1f3fb4d";
	$xxSiteId = "1d7df10";


$query_array  = array(
	
	'firstname'=>$first_name,
	'lastname'=>$last_name,
	'email'=>$email,
	'ext'=>$phoneext,
	'company'=>$company,
	'website'=>$website,
	'found'=>$found,
	'xxTrustedFormCertUrl'=>$xxTrustedFormCertUrl,	
	'xxTest'=>'true',	
	'source'=>$source,	
	'subsource'=>$subsource,	
	'xxSiteId'=>$xxSiteId,
	'xxAccountId'=>$xxAccountId,
	'xxCampaignId'=>$xxCampaignId
);

	$leadconduit = "https://production.leadconduit.com/ap/v2/PostLeadAction?".http_build_query($query_array)."";
	
	// $ch = curl_init();
	// curl_setopt($ch, CURLOPT_URL, "$leadconduit");
	// curl_setopt($ch, CURLOPT_HEADER, 0);
	// curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);
	// curl_setopt($ch, CURLOPT_TIMEOUT, 5);
	// curl_exec($ch);
	// curl_close($ch);
}



?>