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
	<script src="jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/bootstrap-slider.js"></script>
	<script src="modernizr.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<script>
// var point_to_pos = $('.pointTo').offset().left;

// 	$(window).resize(function()
// 	{
// 			point_to_pos = $('.pointTo').offset().left;
// 	});

	// $(document).ready(function()
	// {
	// 	$('.product').click(function()
	// 	{
	// 		$(this).toggleClass('pointTo');
	// 		var point_to_pos = $('.pointTo').offset().left;
	// 	});

	// });
</script>


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
      <li><a href="index.php">HOME</a></li>
      <li><a class="hide2 active" href="featured-product.php">OUR PRODUCTS</a></li>
      <li><a href="information.php">OUR COMPANY</a></li>
      <li id="contact1"><a href="#myModal" role="button" data-toggle="modal">CONTACT</a></li>
      <li id="contact2"><a href="#" id="footernav">CONTACT</a></li>
    </ul>
      </nav>
    </div>
  </div>
</header>
<?php include('header.php');?>
<nav id="productnav">
		<ul>
			<li><a href="featured-product.php" class="active">FEATURED PRODUCT</a></li>
			<li><a href="all-products.php">ALL PRODUCTS</a></li>
			<li><a href="products-indoor-footwear.php">INDOOR FOOTWEAR</a></li>
			<li><a href="products-over-the-shoe-boots.php">OVER THE SHOE BOOTS</a></li>
			<li><a href="products-lightweight.php">LIGHTWEIGHT</a></li>
		</ul>
	</nav>
</div>
<section id="home" class="clearfix">
	<div class="content clearfix">
	<img src="img/featuredshoe2.png" alt="Shoe">
		<div id="instructions">
	<div class="inner">
		<div class="winter">INTRODUCING THE</div>
		<h1>ICE GRIPS<sup>&reg;</sup> <br>ROTORS</h1>
		<p><span class="bold">ICEGRIPS® ROTORS</span> is a uniquely versatile ice and snow walking device that allows workers to move safely from indoor surfaces to outdoor surfaces without putting on and taking off their traction gear. If your employees are constantly walking in and out of building or moving from icy surfaces to clean surfaces, ICEGRIPS® ROTORS is the solution you’ve been waiting for.</p><br>
		<p>No more continually putting on and taking off your traction gear and being faced with the prospect of carrying a wet and dirty device around. ICEGRIPS® ROTORS solve the problem with a twist!</p>
		<a href="#" id="learn" class="ctabox">LEARN MORE ABOUT THIS PRODUCT ></a>
	</div>
	</div>
	</div>
</section>
<a name="rotors"></a>
<section id="stageone" class="clearfix">
	<div class="wrap clearfix">
		<div class="content">
		<div class="winter">GRIPS WITH</div>
		<h1>TRIPLE ACTION</h1>
		</div>
	<article id="one">
		<img class="words" src="img/tractionspikes.png" id="words" alt="traction spikes hidden for indoor surfaces">
		<img class="shoez" src="img/icegrip1.png" id="shoe1" alt="Ice Grip1">
		<div class="info">
		<div class="position">&bull;&nbsp;POSITION ONE&nbsp;&bull;</div>
		<div class="title">HIDDEN</div>
		<div class="blueline"><img src="img/lilboot.png" alt="lilboot"></div>
		<div class="description">With the rotors closed, the traction spikes hide up inside the sole offering ideal traction for indoor/dry surfaces.</div>
		</div>

	</article>
	<article id="two">
		<img class="shoez" src="img/icegrip2.png" alt="Ice Grip2">
		<div class="position">&bull;&nbsp;POSITION TWO&nbsp;&bull;</div>
		<div class="title">ROTATED</div>
		<div class="blueline"><img src="img/lilboot.png" alt="lilboot"></div>
		<div class="description">When transitioning from indoor to outdoor or dry to slippery, the rotors easily pull out and flip over using your fingers or the 
supplied adjustment tool.</div>
	</article>
	<article id="three">
		<img class="shoez" src="img/icegrip3.png" id="shoe3" alt="Ice Grip3">
		<img class="words" src="img/tractionspikesexposed.png" id="words" alt="traction spikes exposed for outdoor surfaces">
		<div class="position">&bull;&nbsp;POSITION THREE&nbsp;&bull;</div>
		<div class="title">EXPOSED</div>
		<div class="blueline"><img src="img/lilboot.png" alt="lilboot"></div>
		<div class="description">With the rotors open, the traction spikes face down offering excellent traction for slippery and icy outdoor conditions.  </div>
	</article>
	</div>
</section>
<section id="removable" class="clearfix">
	<div class="wrap clearfix">
	<img src="img/bootup.png" id="bootup" alt="BootUp">
	<div id="right">
		<div class="inner">
		<div class="winter">FEATURING THE UNIQUE PATENTED</div>
		<h1>REMOVABLE STRAP SYSTEM</h1>
		<p>ICEGRIPS® ROTORS have been designed with a unique patented removable strap system. The ICEGRIPS® ROTORS straps are not permanently sewn into the sandal, allowing the end-user to change out the heel trap for an ankle strap (for greater security), change out all of the straps for a "bulky boot" kit, or easily replace straps if damaged</p>
		<a href="#myModal" class="ctabox" role="button" data-toggle="modal">SPEAK TO AN EXPERT ABOUT ICEGRIPS ROTORS ></a><br>
		<a href="all-products.php" class="ctabox">VIEW ALL OUR PRODUCTS ></a>
		</div>
		</div>
	</div>
	</div>
</section>
<?php include('footer.php');?>
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
		}
		else
		{
			$('#sticky_navigation').css({ 'position': 'relative', 'top':0, 'left':0 });
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