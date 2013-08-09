<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Winter Walking Product Details</title>
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
<?php include('nav.php');?>
<?php include('header.php');?>
<nav id="productnav">
		<ul>
			<li><a href="all-products.php" class="active">ALL PRODUCTS</a></li>
			<li><a href="products-lightweight.php">LIGHTWEIGHT</a></li>
			<li><a href="products-over-the-shoe-boots.php">OVER THE SHOE BOOTS</a></li>
			<li><a href="products-indoor-footwear.php">INDOOR FOOTWEAR</a></li>
			<li><a href="featured-product.php">FEATURED PRODUCT</a></li>
		</ul>
	</nav>
</div>
<?php
include ('config.php');
$product_model = $_GET["model"];
$query = mysqli_query ($con, "SELECT * FROM products WHERE model = '$product_model'");
while ($p = mysqli_fetch_array($query)) {
	$xs = $p[XS];
	$s = $p[S];
	$m = $p[M];
	$l = $p[L];
	$xl = $p[XL];
	$xxl = $p[XXL];
	$xxxl = $p[XXXL];
	$xxxxl = $p[XXXXL];

	if ($xs == 1) {
			$xs = '&#x2713;';
		} else if ($xs == 0) {
			$xs = '&#32;';
		};
				if ($s == 1) {
			$s = '&#x2713;';
		} else if ($s == 0) {
			$s = '&#32;';
		};
				if ($m == 1) {
			$m = '&#x2713;';
		} else if ($m == 0) {
			$m = '&#32;';
		};
				if ($l == 1) {
			$l = '&#x2713;';
		} else if ($l == 0) {
			$l = '&#32;';
		};
				if ($xl == 1) {
			$xl = '&#x2713;';
		} else if ($xl == 0) {
			$xl = '&#32;';
		};
				if ($xxl == 1) {
			$xxl = '&#x2713;';
		} else if ($xxl == 0) {
			$xxl = '&#32;';
		};
				if ($xxxl == 1) {
			$xxxl = '&#x2713;';
		} else if ($xxxl == 0) {
			$xxxl = '&#32;';
		};
				if ($xxxxl == 1) {
			$xxxxl = '&#x2713;';
		} else if ($xxxxl == 0) {
			$xxxxl = '&#32;';
		};
print ('<div class="details"><div class="detailsInner clearfix"><div class="wrap"><div class="arrow-up"></div><div id="left"><div class="inner"><div class="cta-details-blue"><a class="request"  href="#myModal" role="button" data-toggle="modal">REQUEST A QUOTE &rsaquo;</a><br><a class="request request1" href="#myModal" role="button" data-toggle="modal">SPEAK TO AN EXPERT &rsaquo;</a><br><a class="request request2"  href="#myModal3" role="button" data-toggle="modal">SHARE &rsaquo;</a></div><h1>'.$p[name].'</h1><p>'.$p[description].'</p><div class="details-moreinfo"><a href="javascript:void(0);" class="features">Features</a><a href="javascript:void(0);" class="ideal">Ideal Conditions</a><a href="javascript:void(0);" class="sizechart">Size Chart</a></div><div class="moreinfo-section"><div class="features-info">'.$p[features].'</div><div class="ideal-info"><table border="1" bordercolor="#49aaee"><tr><td>Ice</td><td>'.$p[ice].'</td></tr><tr><td>Snow</td><td>'.$p[snow].'</td></tr><tr><td>Oil</td><td>'.$p[oil].'</td></tr><tr><td>fats</td><td>'.$p[fats].'</td></tr><tr><td>Soaps</td><td>'.$p[soaps].'</td></tr><tr><td>Chemicals</td><td>'.$p[chemicals].'</td></tr><tr><td>Liquids</td><td>'.$p[liquids].'</td></tr><tr><td>Mud</td><td>'.$p[mud].'</td></tr><tr><td>Indoor</td><td>'.$p[indoor].'</td></tr><tr><td>Outdoor</td><td>'.$p[outdoor].'</td></tr><tr><td>Driving</td><td>'.$p[driving].'</td></tr></table></div><div class="sizechart-info"><table border="1" bordercolor="#0000"><tr><td>XS</td><td>S</td><td>M</td><td>L</td><td>XL</td><td>XXL</td><td>XXXL</td><td>XXXXL</td></tr><tr><td>'.$xs.'</td><td>'.$s.'</td><td>'.$m.'</td><td>'.$l.'</td><td>'.$xl.'</td><td>'.$xxl.'</td><td>'.$xxxl.'</td><td>'.$xxxxl.'</td></tr></table></div></div></div></div><div id="right"><div class="inner"><div class="views-info"><div class="main-image"><img src="'.$p[img_url].'"></div><div class="image1"><img src="'.$p[img_url].'"></div><div class="image2"><img src="'.$p[img_url2].'"></div><div class="image3"><img src="'.$p[img_url3].'"></div><div class="image4"><img src="'.$p[img_url4].'"></div></div></div></div></div></div></div>');

};
?>
<?php include('footer.php');?>
<script src="js/products.js"></script>
<script src="js/stickynav.js"></script>
</body>
</html>