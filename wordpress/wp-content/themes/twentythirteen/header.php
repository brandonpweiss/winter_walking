<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<link rel="shortcut icon" href="http://www.winterwalking.com/img/favicon.ico"/>
	<link rel="stylesheet" href="http://www.winterwalking.com/slider.css">
	<link rel="stylesheet" href="http://www.winterwalking.com/css/bootstrap.css">
	<link rel="stylesheet" href="http://www.winterwalking.com/normalize.css">
	<link rel="stylesheet" href="http://www.winterwalking.com/style.css">
	<link rel="stylesheet" href="http://www.winterwalking.com/home.css">
	<link rel="stylesheet" href="http://www.winterwalking.com/home2.css">
	<link rel="stylesheet" href="http://www.winterwalking.com/flexslider.css">
	<script src="http://www.winterwalking.com/jquery.js"></script>
	<script src="http://www.winterwalking.com/js/bootstrap.js"></script>
	<script src="http://www.winterwalking.com/jquery.flexslider.js"></script>

	<script src="http://www.winterwalking.com/modernizr.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<style>
	footer.entry-meta{
		color: #FFFFFF;
padding: none;
font-family: karbonmedium;
letter-spacing: 1px;
line-height: 20px;
clear:both;
background: none;
padding: 0px 0px 60px 0px;
	}
	article h1 a{
	font-family: nexabold !important;
	color: #2496e6 !important;
	letter-spacing: 3px !important;
	font-size: 20px !important; 
	}
	 .content{
		margin-top: 50px;
		margin-bottom:50px;
	}
	article header{
		background: none;
	}
	article h1 a{
		color: #333333 !important;
		text-transform: uppercase;
	}
	#home p{
		display:block !important;
	}
	</style>
</head>

<body>
<div class="tops">
	<div id="white">
	<div id="logobox">
 <a href="http://www.winterwalking.com/index.php"><img id="logo" src="http://www.winterwalking.com/img/logo.png" alt="Winter Walking we dont just make ice cleats, we perfect them"></a>
    <div id="tagline">WE DONT JUST MAKE ICE CLEATS, WE PERFECT THEM</div>
  </div>
  </div>
  	<div id="sticky_navigation_wrapper">
    	<div id="sticky_navigation">
	    	<nav>
	    		<ul>
			      <li><a href="http://www.winterwalking.com/index.php">HOME</a></li>
			      <li class="hide2"><a href="http://www.winterwalking.com/all-products.php">PRODUCTS</a></li>
			      <li><a href="http://www.winterwalking.com/wordpress">BLOG</a></li>
			      <!-- <li class="navLogo"><img src="img/shoe.png" alt="Shoe"></li> -->
			      <li><a href="http://www.winterwalking.com/information.php">COMPANY</a></li>
			      <li id="contact1"><a href="http://www.winterwalking.com/contact.php">CONTACT</a></li>
			      <li id="contact2"><a href="#" id="contact2">CONTACT</a></li>
	    		</ul>
	      	</nav>
    	</div>
  	</div>
</div>
