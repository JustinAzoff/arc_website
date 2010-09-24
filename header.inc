<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">  
<head>
<title> Albany Rowing Center <?= $title ? "-" : ""?> <?= $title ?> </title>

<link rel="stylesheet" type="text/css" href="/style.css" />
<link rel="stylesheet" type="text/css" media="print" href="/print.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="/js/jquery.cross-slide.min.js"></script>
</head>
<body>

<p class="hidden">
<a href="#content">Jump to main content</a>
</p>

<div id="header">
<a href="/"><img src="/images/header.jpg"" alt="Albany Rowing Center, Albany New York" /></a>

<div id="navcontainer">
<ul>
<li> <? header_link("", "Home") ?> </li>
<!-- <li> <? header_link("about.php", "About") ?> </li> -->
<li> <? header_link("programs.php", "Programs &amp; Camps") ?>
<ul>
<!--    <li> <? header_link("adult_programs.php", "Adult Programs") ?> </li> -->
    <li> <? header_link("winter_training.php", "Winter training") ?> </li>
    <li> <? header_link("junior_programs.php", "Junior Programs") ?> </li>
    <li> <? header_link("learn_to_row.php", "Learn to Row") ?> </li>
</ul>
</li>
<li> <? header_link("hoh.php", "Head of the Hudson") ?>
<ul>
<li> <? header_link("hoh_race_sponsor_fact_sheet.php", "Sponsor the Hoh") ?> </li>
</ul>
</li>
<li> <? header_link("docs.php", "Forms &amp; Documents") ?> </li>
<li> <? header_link("contact.php", "Contact Us") ?> </li>
<!-- <li> <? header_link("directions.php", "Driving Directions") ?> </li> -->
</ul>
</div>
</div>
<a name="content"></a>
<?php
require_once("slideshow.inc");

function header_link($href, $txt){
    if (basename($_SERVER["REQUEST_URI"]) == $href){
        $active = 'class="active"';
    } else {
        $active = "";
    }
    printf('<a href="/%s" %s>%s</a>', $href, $active, $txt);
}
?>
<div id="wrap">
