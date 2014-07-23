<?php
function curPageURL() {
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}

$current_page_url = curPageURL();
$length = strlen($current_page_url);
$last_three = substr($current_page_url, $length-3, $length); // $last_three == 'php'

if ($last_three != 'com') {
	echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>'.$page_title.'</title>
	
	<!-- Meta Info -->
	<meta name="keywords" content="'.$page_keywords.'" />
	<meta name="description" content="'.$page_description.'" />';
	include('../../includes/links.php');
	echo '</head><body>
	<div id="single-wrap"><div id="single-page"><div class="single-text">';}
?>