<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Winter Walking Products</title>
	<link rel="stylesheet" href="slider.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="normalize.css">
	<link rel="stylesheet" href="style.css">
	<script src="jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/bootstrap-slider.js"></script>
</head>
<body>
<?php include('header.php');?>
<div class="divider"></div>
<section id="top" class="clearfix">
<div class="wrap" class="clearfix">
	<div id="instructions">
	<div class="inner">
		<div class="winter">WINTER WALKING</div>
		<h1>FIND A MATCH</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti ex corporis rem. Optio, temporibus, odit, dignissimos possimus voluptatibus reiciendis pariatur porro atque repellat iusto voluptas molestiae fugit illo quasi quisquam commodi velit similique voluptate error!</p><br>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate, numquam facilis libero quas eaque voluptatibus laboriosam distinctio similique eligendi maxime. Natus, nostrum amet culpa voluptas veritatis illo velit ipsa optio reprehenderit odit quae.</p>
	</div>
	</div>
	<div id="matrix">
		<div class="inner">
		<div class="winter" id="feature">FEATURE MATRIX</div>
		<div class="category">


			<input class="span2 slider" value="" data-slider-min="0" data-slider-max="20" data-slider-step="2" data-slider-value="10" data-slider-orientation="horizontal" data-slider-selection="after"data-slider-tooltip="hide" data-slider-handle="triangle">


			<div class="options">
				<div class="option1">TRACTION</div>
				<div class="option2">VERSATILITY</div>
			</div>
		</div>
		<div class="category">
			<input class="span2 slider" value="" data-slider-min="0" data-slider-max="20" data-slider-step="2" data-slider-value="10" data-slider-orientation="horizontal" data-slider-selection="after"data-slider-tooltip="hide" data-slider-handle="triangle">

			<div class="options">
				<div class="option1">EASY ON/OFF</div>
				<div class="option2">SECURITY</div>
			</div>
		</div>
		<div class="category">
			<input class="span2 slider" value="" data-slider-min="0" data-slider-max="20" data-slider-step="2" data-slider-value="10" data-slider-orientation="horizontal" data-slider-selection="after"data-slider-tooltip="hide" data-slider-handle="triangle">

			<div class="options">
				<div class="option1">ECONOMICAL</div>
				<div class="option2">INDUSTRIAL STRENGTH</div>
			</div>
		</div>
		<div class="category">
			<input class="span2 slider" value="" data-slider-min="0" data-slider-max="20" data-slider-step="2" data-slider-value="10" data-slider-orientation="horizontal" data-slider-selection="after"data-slider-tooltip="hide" data-slider-handle="triangle">

			<div class="options">
				<div class="option1">SHOE PROTECTION/WARMTH</div>
				<div class="option2">NO COVERAGE</div>
			</div>
		</div>
		</div>
	</div>
</div>
</section>
<!-- /////////////////////// -->
<section id="products">
	<div id="productlist">
		<div class="wrap clearfix">
<!-- //////////////////////// -->
<?php
include ('config.php');
$query = mysqli_query ($con, 'SELECT * FROM products');
//print list of products.
while ($fetch = mysqli_fetch_array($query)) {
print ('<button class="product" data-toggle="collapse" data-parent="#productlist" data-target=".'.$fetch[model].' " type="button">
			<span class="title">'.$fetch[name].'</span>
			<img src=" '.$fetch[img_url].' " alt="shoe">
		</button>');
};
?>
<!-- ////////////////////////// -->
	</div>
</div>
<!-- ///////////////////////// -->
<?php
$query = mysqli_query ($con, 'SELECT * FROM products');
//Print product details.
while ($fetchdetails = mysqli_fetch_array($query)) {
print('<div class="'.$fetchdetails[model].' collapse">
	<div class="detailsInner clearfix">
	<div class="wrap">
		<div class="arrow-up"></div>
		<div id="left">
			<div class="inner">
				<h1>'.$fetchdetails[name].'</h1>
				<p>'.$fetchdetails[description].'</p>
					<div id="sizes">
						<a href="#" class="size"><div class="sizebox">S</div></a>
						<a href="#" class="size"><div class="sizebox">M</div></a>
						<a href="#" class="size"><div class="sizebox">L</div></a>
						<a href="#" class="size"><div class="sizebox">XL</div></a>
						<a href="#" class="expert">CONTACT AN EXPERT ></a>
					</div>
			</div>
		</div>

				<div id="right">
					<div class="inner">
						<img src=" '.$fetchdetails[img_url].' " alt="'.$fetchdetails[name].'">
					</div>
				</div>
	</div>
	</div>
</div>');
};
mysqli_close($con);
?>
</section>
<?php include('footer.php');?>
	<script type="text/javascript">
	$('.slider').slider();

	$(document).ready(function()
		{
			$('.product').click(function()
			{
				if ($('.collapse').hasClass('in')) {
				$('.collapse').removeClass('in').removeAttr('style');
				};
			});
		});
	</script>
</body>
</html>