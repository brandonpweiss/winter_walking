<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Winter Walking</title>
	<link rel="stylesheet" href="slider.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="normalize.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="home.css">
	<link rel="stylesheet" href="home2.css">
	<link rel="stylesheet" href="flexslider.css">
	<script src="jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="jquery.flexslider.js"></script>

	<script src="modernizr.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
</head>
<body>
<div class="tops">
	<div id="white">
	<div id="logobox">
 <a href="index.php"><img id="logo" src="img/logo.png" alt="Winter Walking we dont just make ice cleats, we perfect them"></a>
    <div id="tagline">WE DONT JUST MAKE ICE CLEATS, WE PERFECT THEM</div>
  </div>
  </div>
<?php include('nav.php');?>
<?php include('header.php');?>
</div>
<section id="home" class="clearfix">
<div class="flexslider">
		<ul class="slides">
				<li class="three">
		<div class="content clearfix">
		<div id="instructions">
		<div class="inner">
		<img src="img/newsole.png" id="newsole2" alt="Shoe">
		<div class="winter">Still searching for the perfect ice cleat?</div>
		<h1>LOOK NO FURTHER.</h1>
		<p>At <span class="bold">Winter Walking,</span> we have over 20 different custom designed ice cleats and traction items in our line.  Each item is designed for a specific situation.  We match the best product to your situation and leave you with the perfect solution.</p>
		<div class="ctaboxes">
		<a href="all-products.php" class="ctabox view">VIEW OUR PRODUCT LINE ></a>
			<a href="information.php" class="ctabox learn">LEARN MORE ></a>
		</div>
	</div>
	</div>
		<img src="img/newsole2.png" id="newsole" alt="Shoe">
	</div>
		</li>
		<li class="one">
		<div class="content clearfix">
		<img src="img/featuredshoe3.png" id="featuredshoe" alt="Shoe">
		<img src="img/featuredshoe.png" id="featuredshoe2" alt="Shoe">
		<div id="instructions">
		<div class="inner">
		<div class="winter">We Spend 365 Days a Year thinking about Winter...</div>
		<h1>SO YOU DON'T HAVE TO.</h1>
		<p>Ice cleats and traction gear is all that we do at <span class="bold">Winter Walking</span>.  Even in the middle of the summer, when you're at the beach, we are still focused on ice cleats.  It's part what makes us so good at what we do.</p>
		<div class="ctaboxes">
		<a href="information.php" class="ctabox">LEARN MORE ></a>
		</div>
	</div>
	</div>
	</div>
		</li>
<li class="two">
		<div class="content clearfix">
		<div id="instructions">
		<div class="inner">
		<img src="img/sparespike.png" id="sparespike2" alt="Shoe">
		<div class="winter">WE DON'T JUST MAKE ICE CLEATS</div>
		<h1>WE PERFECT THEM.</h1>
		<p>Here at <span class="bold">Winter Walking,</span> we hold over a dozen patents on ice cleats and traction footwear.  When we are not making new items, we are making the old ones better.  Our product are durable, unique and quite simply...better.</p>
		<div class="ctaboxes">
		<a href="all-products.php" class="ctabox view">VIEW OUR PRODUCT LINE ></a>
			<a href="information.php" class="ctabox learn">LEARN MORE ></a>
		</div>
	</div>
	</div>
		<img src="img/sparespike.png" id="sparespike" alt="Shoe">
	</div>
		</li>
		</ul>
	</div>
<article id="line">
	<p>&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;</p>
	<p>According to the Bureau of Labor Statistics, nearly <span class="blue">15%</span> of all lost workday accidents are due to slips, trips, and falls.</p>
	<p>&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;</p>
</article>
	<article id="buttons">
		<div class="content clearfix">
		<div class="button buttonone">
			<div href="products-lightweight.php" class="inner">
				<p>Lightweight Ice Cleats</p>
				<a href="products-lightweight.php"class="viewmore">VIEW MORE ></a>
			</div></div>
		<div class="button buttontwo"><div class="inner">
				<p>Maximum Traction</p>
				<a href="products-indoor-footwear.php" class="viewmore">VIEW MORE ></a>
			</div></div>
		<div class="button buttonthree">
			<div class="inner">
				<p>Over the Shoe Boots</p>
				<a href="products-over-the-shoe-boots.php" class="viewmore">VIEW MORE ></a>
			</div>
		</div>
	</div>
	</article>
</section>
<?php include('footer.php');?>
<script>
			$(window).load(function() {
	  			$('.flexslider').flexslider({
		   	 		animation: "slide",
		   	 		startAt: 0,
		   	 		initDelay: 0,
		   	 		touch: true,
		   	 		pauseOnHover: true
	  			});
			});
		</script>
	<script src="scroll.js"></script>
	<script src="js/stickynav.js"></script>
</body>
</html>