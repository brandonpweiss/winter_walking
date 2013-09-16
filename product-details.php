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
	<script src="jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/bootstrap-slider.js"></script>
</head>
<body>
	<div class="tops">
		<div id="logobox">
  <a href="index.php"><img id="logo" src="img/logowhite.png" alt="Winter Walking we dont just make ice cleats, we perfect them"></a>
    <div id="tagline">WE DONT JUST MAKE ICE CLEATS, WE PERFECT THEM</div>
</div>
<?php include('nav.php');?>
<?php include('header.php');?>
<?php
include ('config.php');
$product_model = $_GET["model"];
$query = mysqli_query ($con, "SELECT * FROM products WHERE model = '$product_model'");
$p = mysqli_fetch_array($query);

print ('
<nav id="productnav">
		<ul>
			<li><a href="all-products.php">ALL PRODUCTS</a></li>
			<li><a href="featured-product.php">FEATURED PRODUCT</a></li>
		</ul>
	</nav>
</div>
');

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

		if ($p[img_url4] != null && $p[img_url2] != null && $p[img_url3] != null) {
		 $image1 = '<div class="image1"><img src="'.$p[img_url].'"></div>';
		};
		if ($p[img_url4] != null) {
			$image2 = '<div class="image2"><img src="'.$p[img_url4].'"></div>';
		};
		if ($p[img_url2] != null) {
			$image3 = '<div class="image3"><img src="'.$p[img_url2].'"></div>';
		};
		if ($p[img_url3] != null) {
			$image4 = '<div class="image4"><img src="'.$p[img_url3].'"></div>';
		};


print ('
<div class="details">
	<div class="detailsInner clearfix">
		<div class="wrap">
			<div class="arrow-up"></div>
			<div id="left">
				<div class="inner">
					<div class="cta-details-blue">
						<a class="request grey"  href="all-products.php">&lsaquo; BACK</a>
						<br>
						<a class="request"  href="#myModal" role="button" data-toggle="modal">REQUEST A QUOTE &rsaquo;</a>
						<br>
						<a class="request request1" href="#myModal" role="button" data-toggle="modal">SPEAK TO AN EXPERT &rsaquo;</a>
						<br>
						<a class="request request2"  href="#myModal3" role="button" data-toggle="modal">SHARE &rsaquo;</a>
					</div>
					<h1>'.$p[name].'</h1>
					<p>'.$p[description].'</p>
					<div class="details-moreinfo">
						<a href="javascript:void(0);" class="features">Features</a>
						<a href="javascript:void(0);" class="ideal">Ideal Conditions</a>
						<a href="javascript:void(0);" class="sizechart">Size Chart</a>
					</div>
					<div class="moreinfo-section">
						<div class="features-info">'.$p[features].'</div>
						<div class="ideal-info">
							<!--<table border="1" bordercolor="white">-->
							<table border="1" bordercolor="#0000" style="background-color:grey; color: white;">
							<style>
							th, td {padding: 10px 3px 10px 3px}
							</style>');
							print ('<tr>
									<th></th>
									<th>Ice</th>
									<th>Snow</th>
									<th>Oil</th>
									<th>Fats</th>
									<th>Soaps</th>
									<th>Chemicals</th>
									<th>Liquids</th>
									<th>Mud</th>
									<th>Indoor</th>
									<th>Outdoor</th>
									<th>Driving</th>
								</tr>');
							print ('<tr>');
								print ('<th>Great</th>');
									print ('<td>');
										if ($p[ice] == 'great'){ print ('&#x2713;'); };
									print ('</td>');
									print ('<td>');
										if ($p[snow] == 'great') { print ('&#x2713;'); };
									print ('</td>');
									print ('<td>');
										if ($p[oil] == 'great') { print ('&#x2713;'); };
									print ('</td>');
									print ('<td>');
										if ($p[fats] == 'great') { print ('&#x2713;'); };
									print ('</td>');
									print ('<td>');
										if ($p[soaps] == 'great') { print ('&#x2713;'); };
									print ('</td>');
									print ('<td>');
										if ($p[chemicals] == 'great') { print ('&#x2713;'); };
									print ('</td>');
									print ('<td>');
										if ($p[liquids] == 'great') { print ('&#x2713;'); };
									print ('</td>');
									print ('<td>');
										if ($p[mud] == 'great') { print ('&#x2713;'); };
									print ('</td>');
									print ('<td>');
										if ($p[indoor] == 'great') { print ('&#x2713;'); };
									print ('</td>');
									print ('<td>');
										if ($p[outdoor] == 'great') { print ('&#x2713;'); };
									print ('</td>');
									print ('<td>');
										if ($p[driving] == 'great') { print ('&#x2713;'); };
									print ('</td>');
								print ('</tr>');
							print ('<tr>');
								print ('<th>Good</th>');
									print ('<td>');
										if ($p[ice] == 'good') {print ('&#x2713;');};
									print ('</td>');
									print ('<td>');
										if ($p[snow] == 'good') {print ('&#x2713;');};
									print ('</td>');
									print ('<td>');
										if ($p[oil] == 'good') {print ('&#x2713;');};
									print ('</td>');
									print ('<td>');
										if ($p[fats] == 'good') {print ('&#x2713;');};
									print ('</td>');
									print ('<td>');
										if ($p[soaps] == 'good') {print ('&#x2713;');};
									print ('</td>');
									print ('<td>');
										if ($p[chemicals] == 'good') {print ('&#x2713;');};
									print ('</td>');
									print ('<td>');
										if ($p[liquids] == 'good') {print ('&#x2713;');};
									print ('</td>');
									print ('<td>');
										if ($p[mud] == 'good') {print ('&#x2713;');};
									print ('</td>');
									print ('<td>');
										if ($p[indoor] == 'good') {print ('&#x2713;');};
									print ('</td>');
									print ('<td>');
										if ($p[outdoor] == 'good') {print ('&#x2713;');};
									print ('</td>');
									print ('<td>');
										if ($p[driving] == 'good') {print ('&#x2713;');};
									print ('</td>');
								print ('</tr>');
							print ('<tr>');
								print ('<th>Not Recommended</th>');
									print ('<td>');
										if ($p[ice] == 'n/a') {print ('&#x2713;');};
									print ('</td>');
									print ('<td>');
										if ($p[snow] == 'n/a') {print ('&#x2713;');};
									print ('</td>');
									print ('<td>');
										if ($p[oil] == 'n/a') {print ('&#x2713;');};
									print ('</td>');
									print ('<td>');
										if ($p[fats] == 'n/a') {print ('&#x2713;');};
									print ('</td>');
									print ('<td>');
										if ($p[soaps] == 'n/a') {print ('&#x2713;');};
									print ('</td>');
									print ('<td>');
										if ($p[chemicals] == 'n/a') {print ('&#x2713;');};
									print ('</td>');
									print ('<td>');
										if ($p[liquids] == 'n/a') {print ('&#x2713;');};
									print ('</td>');
									print ('<td>');
										if ($p[mud] == 'n/a') {print ('&#x2713;');};
									print ('</td>');
									print ('<td>');
										if ($p[indoor] == 'n/a') {print ('&#x2713;');};
									print ('</td>');
									print ('<td>');
										if ($p[outdoor] == 'n/a') {print ('&#x2713;');};
									print ('</td>');
									print ('<td>');
										if ($p[driving] == 'n/a') {print ('&#x2713;');};
									print ('</td>');
								print ('</tr>');
								print('</table></div>');
			print ('<div class="sizechart-info">
							<table border="1" bordercolor="#0000" style="background-color:grey; color: white;">
							<style>
							th, td {padding: 10px 3px 10px 3px}
							</style>
								<tr>
									<th></th>
									<th>XS</th>
									<th>S</th>
									<th>M</th>
									<th>L</th>
									<th>XL</th>
									<th>XXL</th>
									<th>XXXL</th>
									<th>XXXXL</th>
								</tr>
								<tr>
									<th>FITS MENS</th>
									<td>'.$p[XSM].'</td>
									<td>'.$p[SM].'</td>
									<td>'.$p[MM].'</td>
									<td>'.$p[LM].'</td>
									<td>'.$p[XLM].'</td>
									<td>'.$p[XXLM].'</td>
									<td>'.$p[XXXLM].'</td>
									<td>'.$p[XXXXLM].'</td>
								</tr>
								<tr>
									<th>FITS WOMANS</th>
									<td>'.$p[XSW].'</td>
									<td>'.$p[SW].'</td>
									<td>'.$p[MW].'</td>
									<td>'.$p[LW].'</td>
									<td>'.$p[XLW].'</td>
									<td>'.$p[XXLW].'</td>
									<td>'.$p[XXXLW].'</td>
									<td>'.$p[XXXXLW].'</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div id="right">
				<div class="inner">
					<div class="views-info">
						<div class="main-image">
							<img src="'.$p[img_url].'">
						</div>
						'.$image1.''.$image2.''.$image3.''.$image4.'
					</div>
				</div>
			</div>
		</div>
	</div>
</div>');
?>
<?php include('footer.php');?>
<script src="js/products.js"></script>
<script src="js/stickynav.js"></script>
</body>
</html>