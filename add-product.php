<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Winter Walking Products</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="slider.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="normalize.css">
	<link rel="stylesheet" href="style.css">
		<style type="text/css">
	#tagline{
		color: #e5e5e5;
	}
	</style>
	<script src="jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/bootstrap-slider.js"></script>
</head>
<body>
	<div class="tops2">
		<div id="logobox">
  <a href="index.php"><img id="logo" src="img/logowhite.png" alt="Winter Walking we dont just make ice cleats, we perfect them"></a>
    <div id="tagline">WE DONT JUST MAKE ICE CLEATS, WE PERFECT THEM</div>
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
			<li><a href="featured-product.php">FEATURED PRODUCT</a></li>
			<li><a href="all-products.php" class="active">ALL PRODUCTS</a></li>
			<li><a href="products-indoor-footwear.php">INDOOR FOOTWEAR</a></li>
			<li><a href="products-over-the-shoe-boots.php">OVER THE SHOE BOOTS</a></li>
			<li><a href="products-lightweight.php">LIGHTWEIGHT</a></li>
		</ul>
	</nav>
</div>
<!-- ---------------------------------------------------------- -->

<div class="wrap clearfix">

<form method="post" id="add-product-form" action="product-added.php" enctype="multipart/form-data">

<!-- ---------------------------------------------------------- -->
<div class="product-form-section">
<span>Main Info:</span>

<div class="field-wrap">
<label for="model">Model:</label>
<input type="text" name="model" id="model">
</div>

<div class="field-wrap">
<label for="name">Name:</label>
<input type="text" name="name" id="name">
</div>

<div class="field-wrap">
<label for="category">Category:</label>
<input type="text" name="category" id="category">
</div>


<div class="field-wrap">
<label for="upper_material">Upper Material:</label>
<input type="text" name="upper_material" id="upper_material">
</div>

<div class="field-wrap">
<label for="traction">Traction:</label>
<input type="text" name="traction" id="traction">
</div>

<div class="field-wrap">
<label for="feature_note">Feature Note:</label>
<input type="text" name="feature_note" id="feature_note">
</div>

<div class="full-field-wrap">
<label for="description">Description:</label>
<textarea rows="4" name="description" id="description"></textarea>
</div>

</div>
<!-- ---------------------------------------------------------- -->
<div class="product-form-section">
<span>Images:</span>

<div class="full-field-wrap">
<label for="img_url">Main Image:</label>
<input type="file" name="img_url" id="img_url">
</div>

<div class="full-field-wrap">
<label for="img_url2">Image 2:</label>
<input type="file" name="img_url2" id="img_url2">
</div>

<div class="full-field-wrap">
<label for="img_url3">Image 3:</label>
<input type="file" name="img_url3" id="img_url3">
</div>

<div class="full-field-wrap">
<label for="img_url4">Image 4:</label>
<input type="file" name="img_url4" id="img_url4">
</div>

</div>
<!-- ---------------------------------------------------------- -->
<div class="product-form-section">
<span>Features List:</span>

<div class="half-field-wrap">
<label for="feature-1">Feature 1:</label>
<input type="text" name="feature-1" id="feature-1">
</div>

<div class="half-field-wrap">
<label for="feature-2">Feature 2:</label>
<input type="text" name="feature-2" id="feature-2">
</div>

<div class="half-field-wrap">
<label for="feature-3">Feature 3:</label>
<input type="text" name="feature-3" id="feature-3">
</div>

<div class="half-field-wrap">
<label for="feature-4">Feature 4:</label>
<input type="text" name="feature-4" id="feature-4">
</div>

<div class="half-field-wrap">
<label for="feature-5">Feature 5:</label>
<input type="text" name="feature-5" id="feature-5">
</div>

<div class="half-field-wrap">
<label for="feature-6">Feature 6:</label>
<input type="text" name="feature-6" id="feature-6">
</div>

<div class="half-field-wrap">
<label for="feature-7">Feature 7:</label>
<input type="text" name="feature-7" id="feature-7">
</div>

<div class="half-field-wrap">
<label for="feature-8">Feature 8:</label>
<input type="text" name="feature-8" id="feature-8">
</div>

<div class="half-field-wrap">
<label for="feature-9">Feature 9:</label>
<input type="text" name="feature-9" id="feature-9">
</div>

<div class="half-field-wrap">
<label for="feature-10">Feature 10:</label>
<input type="text" name="feature-10" id="feature-10">
</div>

</div>
<!-- ---------------------------------------------------------- -->
<div class="product-form-section">
<span>Options:</span>

<div class="field-wrap">
<input type="checkbox" name="ice" value="1" id="ice">
<label for="ice">Ice</label>
</div>

<div class="field-wrap">
<input type="checkbox" name="extreme-ice" value="1" id="extreme-ice">
<label for="extreme-ice">Extreme Ice</label>
</div>

<div class="field-wrap">
<input type="checkbox" name="snow" value="1" id="snow">
<label for="snow">Snow</label>
</div>

<div class="field-wrap">
<input type="checkbox" name="oil" value="1" id="oil">
<label for="oil">Oil</label>
</div>

<div class="field-wrap">
<input type="checkbox" name="fats" value="1" id="fats">
<label for="fats">Fats</label>
</div>

<div class="field-wrap">
<input type="checkbox" name="soaps" value="1" id="soaps">
<label for="soaps">Soaps</label>
</div>

<div class="field-wrap">
<input type="checkbox" name="chemicals" value="1" id="chemicals">
<label for="chemicals">Chemicals</label>
</div>

<div class="field-wrap">
<input type="checkbox" name="liquids" value="1" id="liquids">
<label for="liquids">Liquids</label>
</div>

<div class="field-wrap">
<input type="checkbox" name="mud" value="1" id="mud">
<label for="mud">Mud</label>
</div>

<div class="field-wrap">
<input type="checkbox" name="indoor" value="1" id="indoor">
<label for="indoor">Indoor</label>
</div>

<div class="field-wrap">
<input type="checkbox" name="outdoor" value="1" id="outdoor">
<label for="outdoor">Outdoor</label>
</div>

<div class="field-wrap">
<input type="checkbox" name="driving" value="1" id="driving">
<label for="driving">Driving</label>
</div>

<div class="field-wrap">
<input type="checkbox" name="gritted" value="1" id="gritted">
<label for="gritted">Gritted</label>
</div>

<div class="field-wrap">
<input type="checkbox" name="spiked" value="1" id="spiked">
<label for="spiked">Spiked</label>
</div>

<div class="field-wrap">
<input type="checkbox" name="non-sparking" value="1" id="non-sparking">
<label for="non-sparking">Non-Sparking</label>
</div>

<div class="field-wrap">
<input type="checkbox" name="defined-heel" value="1" id="defined-heel">
<label for="defined-heel">Defined Heel</label>
</div>

<div class="field-wrap">
<input type="checkbox" name="insulated" value="1" id="insulated">
<label for="insulated">Insulated</label>
</div>

<div class="field-wrap">
<input type="checkbox" name="stripping" value="1" id="stripping">
<label for="stripping">Floor Stripping</label>
</div>

<div class="field-wrap">
<input type="checkbox" name="food-processing" value="1" id="food-processing">
<label for="food-processing">Food Processing</label>
</div>

<div class="field-wrap">
<input type="checkbox" name="over-sock" value="1" id="over-sock">
<label for="over-sock">Over Sock</label>
</div>

<div class="field-wrap">
<input type="checkbox" name="steel-toe" value="1" id="steel-toe">
<label for="steel-toe">Steel Toe</label>
</div>

</div>
<!-- ---------------------------------------------------------- -->
<div class="product-form-section">
<span>Cut:</span>

<div class="field-wrap">
<input type="radio" name="cut-type" value="1" id="low-cut">
<label for="low-cut">Low Cut</label>
</div>

<div class="field-wrap">
<input type="radio" name="cut-type" value="2" id="mid-calf">
<label for="mid-calf">Mid Calf</label>
</div>

<div class="field-wrap">
<input type="radio" name="cut-type" value="3" id="knee-high">
<label for="knee-high">Knee High</label>
</div>

</div>
<!-- ---------------------------------------------------------- -->
<div class="product-form-section">
<span>Sizes:</span>

<div class="field-wrap">
<input type="checkbox" name="XS" value="1" id="XS">
<label for="XS">XS</label>
</div>

<div class="field-wrap">
<input type="checkbox" name="S" value="1" id="S">
<label for="S">S</label>
</div>

<div class="field-wrap">
<input type="checkbox" name="M" value="1" id="M">
<label for="M">M</label>
</div>

<div class="field-wrap">
<input type="checkbox" name="L" value="1" id="L">
<label for="L">L</label>
</div>

<div class="field-wrap">
<input type="checkbox" name="XL" value="1" id="XL">
<label for="XL">XL</label>
</div>

<div class="field-wrap">
<input type="checkbox" name="XXL" value="1" id="XXL">
<label for="XXL">XXL</label>
</div>

<div class="field-wrap">
<input type="checkbox" name="XXXL" value="1" id="XXXL">
<label for="XXXL">XXXL</label>
</div>

<div class="field-wrap">
<input type="checkbox" name="XXXXL" value="1" id="XXXXL">
<label for="XXXXL">XXXXL</label>
</div>

</div>
<!-- ---------------------------------------------------------- -->

<input type="submit" name="submit" class="submit" value="Submit">

</form>
</div>
<!-- ---------------------------------------------------------- -->
<footer>
	<div class="wrap clearfix">

	</div>
</footer>

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
