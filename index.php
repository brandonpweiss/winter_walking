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
  <header>
  	<div id="sticky_navigation_wrapper">
    	<div id="sticky_navigation">
	      <nav>
	    	<ul>
		      <li class="navLeft"><a href="index.php" class="active">HOME</a></li>
		      <li><a class="hide2" href="featured-product.php">PRODUCTS</a></li>
		      <li class="navLogo"><img src="img/shoe.png" alt="Shoe"></li>
		      <li><a href="information.php">COMPANY</a></li>
		      <li id="contact1" class="navRight"><a href="#myModal2" role="button" data-toggle="modal">CONTACT</a></li>
		      <li id="contact2"><a href="#" id="footernav">CONTACT</a></li>
	    	</ul>
	      </nav>
    	</div>
  	</div>
</header>
<?php include('header.php');?>
<?php include('nav2.php');?>
</div>
<section id="home" class="clearfix">
<div class="flexslider">
		<ul class="slides">
<li class="two">
		<div class="content clearfix">
		<div id="instructions">
		<div class="inner">
		<img src="img/sparespike.png" id="sparespike2" alt="Shoe">
		<div class="winter">WE DON'T JUST MAKE ICE CLEATS</div>
		<h1>WE PERFECT THEM.</h1>
		<p><span class="bold">WINTER WALKING </span>has been helping safety managers reduce employee slips and falls for almost <span class="bold">40 YEARS</span>.  Our experience is unparalleled. Every product in our line has been created through years of research and development with you, the end user. Our designs have proven to be so uniquely beneficial that we have been awarded several dozen patents by the United States Patent and Trademark Office in Alexandria, Virginia.</p>
		<div class="ctaboxes">
		<a href="all-products.php" class="ctabox view">VIEW OUR PRODUCT LINE ></a>
			<a href="information.php" class="ctabox learn">LEARN MORE ></a>
		</div>
	</div>
	</div>
		<img src="img/sparespike.png" id="sparespike" alt="Shoe">
	</div>
		</li>
			<li class="one">
		<div class="content clearfix">
	<img src="img/featuredshoe2.png" alt="Shoe">
		<div id="instructions">
		<div class="inner">
		<div class="winter">EMPLOYEE SLIPS AND FALLS?</div>
		<h1>GET A GRIP.</h1>
		<p>You're in the right place.  <span class="bold">WINTER WALKING </span>has been helping safety managers reduce employee slips and falls for almost <span class="bold">40 YEARS</span>.  Our experience is unparalleled. Every product in our line has been created through years of research and development with you, the end user. Our designs have proven to be so uniquely beneficial that we have been awarded several dozen patents by the United States Patent and Trademark Office in Alexandria, Virginia.</p>
		<div class="ctaboxes">
		<a href="information.php" class="ctabox">LEARN MORE ></a>
		</div>
	</div>
	</div>
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
				<img class="spare" src="img/products/spare-spike-sole.png" alt="Spare Spike">
				<p>Lightweight Ice Cleats</p>
				<a href="products-lightweight.php"class="viewmore">VIEW MORE ></a>
			</div></div>
		<div class="button buttontwo"><div class="inner">
				<img class="gfsview" src="img/products/gfs.png" alt="Grippers for Strippers">
				<p>Indoor Footwear</p>
				<a href="products-indoor-footwear.php" class="viewmore">VIEW MORE ></a>
			</div></div>
		<div class="button buttonthree">
			<div class="inner">
				<img src="img/products/grips.png" alt="AltaGrips">
				<p>Over the Shoe Boots</p>
				<a href="products-over-the-shoe-boots.php" class="viewmore">VIEW MORE ></a>
			</div>
		</div>
	</div>
	</article>
</section>
	</div>
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

	<script>
/*####### STICKY NAV SCRIPT ##########*/
	var nav_pos = $('nav').offset().top;
	var i = 0;
	var sticky_nav = function()
	{
		var top_pos = $(window).scrollTop(); // our current vertical position from the top

		if ( (top_pos > nav_pos) && ($(window).width() > 640) )
		{
			$('#sticky_navigation').css({ 'position': 'fixed', 'top':-15, 'left':0, 'z-index':999});
			$('.navLogo').css({ 'visibility': 'visible' });
		}
		else
		{
			$('#sticky_navigation').css({ 'position': 'relative', 'top':0, 'left':0 });
			$('.navLogo').css({ 'visibility': 'hidden' });

		}
	};

	$(window).scroll(function()
	{
		if (i <= 0)
		{
			nav_pos = $('nav').offset().top - 0;
			i = 1;
		};
		 sticky_nav();
	});

	$(window).resize(function()
	{
			nav_pos = $('nav').offset().top - 0;
	});
</script>
</body>
</html>