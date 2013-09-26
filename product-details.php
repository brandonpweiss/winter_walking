<?php ob_start(); ?>
<?php
include ('config.php');
$product_model = $_GET["model"];
$query = mysqli_query ($con, "SELECT * FROM products WHERE model = '$product_model'");
$p = mysqli_fetch_array($query);
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php print $p[name]; ?> Product Details</title>
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

		if ($p[img_url4] != null && $p[img_url2] != null && $p[img_url3] != null && $p[img_url5] != null && $p[img_url6] != null) {
		 $image1 = '<div class="image1"><img src="'.$p[img_url1].'"></div>';
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
		if ($p[img_url5] != null) {
			$image5 = '<div class="image5"><img src="'.$p[img_url5].'"></div>';
		};
		if ($p[img_url6] != null) {
			$image6 = '<div class="image6"><img src="'.$p[img_url6].'"></div>';
		};

$nameHP = str_replace("HP's", "<br>High Profile", $p[name]);
$name = str_replace("LP's", "<br>Low Profile", $nameHP);
?>
<div class="details">
	<div class="detailsInner clearfix">
		<div class="wrap">
			<div class="arrow-up"></div>
			<div id="left">
				<div class="inner">
					<div class="cta-details-blue">
						<a class="request"  href="#myModal" role="button" data-toggle="modal">&lsaquo; REQUEST A QUOTE</a>
						<br>
						<a class="request request1" href="#myModal4" role="button" data-toggle="modal">&lsaquo; SPEAK TO AN EXPERT</a>
						<br>
						<a class="request request2"  href="#myModal3" role="button" data-toggle="modal">&lsaquo; SHARE </a>
					</div>
					<h1><?php print $name; ?></h1>
					<p><?php print $p[description]; ?></p>
					<div class="details-moreinfo">
						<?php if ($p[features])
						{ print'<a href="javascript:void(0);" class="features">Features</a>'; }
						?>
						<a href="javascript:void(0);" class="ideal">Ideal Conditions</a>
						<a href="javascript:void(0);" class="sizechart">Size Chart</a>
					</div>
					<div class="moreinfo-section">
						<div class="features-info"><?php print $p[features]; ?></div>
						<div class="spacer" style="height: 20px;"></div>
						<div class="ideal-info">
							<!--<table border="1" bordercolor="white">-->
							<table border="1" bordercolor="#0000" style="background-color:grey; color: white; width: 100%;">
							<style>
							th, td {padding: 10px 3px 10px 3px}
							</style>
							<?php
							print ('<tr>
									<th>Conditions</th>
									<th>Excellent</th>
									<th>Good</th>
									<th>N/A</th>
								</tr>');
							print ('<tr>');
								print ('<th>Ice</th>');
									print ('<td>');
										if ($p[ice] == 'great'){ print ('&#x2713;'); };
									print ('</td>');
									print ('<td>');
										if ($p[ice] == 'good'){ print ('&#x2713;'); };
									print ('</td>');
									print ('<td>');
										if ($p[ice] == 'n/a'){ print ('&#x2713;'); };
									print ('</td>');
								print ('</tr>');
							print ('<tr>');
								print ('<th>Snow</th>');
																	print ('<td>');
										if ($p[snow] == 'great'){ print ('&#x2713;'); };
									print ('</td>');
									print ('<td>');
										if ($p[snow] == 'good'){ print ('&#x2713;'); };
									print ('</td>');
									print ('<td>');
										if ($p[snow] == 'n/a'){ print ('&#x2713;'); };
									print ('</td>');
								print ('</tr>');
							print ('<tr>');
								print ('<th>Oil</th>');
																	print ('<td>');
										if ($p[oil] == 'great'){ print ('&#x2713;'); };
									print ('</td>');
									print ('<td>');
										if ($p[oil] == 'good'){ print ('&#x2713;'); };
									print ('</td>');
									print ('<td>');
										if ($p[oil] == 'n/a'){ print ('&#x2713;'); };
									print ('</td>');

								print ('</tr>');
								print ('<tr>');
									print ('<th>Fats</th>');
									print ('<td>');
										if ($p[fats] == 'great'){ print ('&#x2713;'); };
									print ('</td>');
									print ('<td>');
										if ($p[fats] == 'good'){ print ('&#x2713;'); };
									print ('</td>');
									print ('<td>');
										if ($p[fats] == 'n/a'){ print ('&#x2713;'); };
									print ('</td>');
								print ('</tr>');
								print ('<tr>');
									print ('<th>Soaps</th>');
									print ('<td>');
										if ($p[soaps] == 'great'){ print ('&#x2713;'); };
									print ('</td>');
									print ('<td>');
										if ($p[soaps] == 'good'){ print ('&#x2713;'); };
									print ('</td>');
									print ('<td>');
										if ($p[soaps] == 'n/a'){ print ('&#x2713;'); };
									print ('</td>');
								print ('</tr>');
								print ('<tr>');
									print ('<th>Chemicals</th>');
									print ('<td>');
										if ($p[chemicals] == 'great'){ print ('&#x2713;'); };
									print ('</td>');
									print ('<td>');
										if ($p[chemicals] == 'good'){ print ('&#x2713;'); };
									print ('</td>');
									print ('<td>');
										if ($p[chemicals] == 'n/a'){ print ('&#x2713;'); };
									print ('</td>');
								print ('</tr>');
								print ('<tr>');
									print ('<th>Liquids</th>');
									print ('<td>');
										if ($p[liquids] == 'great'){ print ('&#x2713;'); };
									print ('</td>');
									print ('<td>');
										if ($p[liquids] == 'good'){ print ('&#x2713;'); };
									print ('</td>');
									print ('<td>');
										if ($p[liquids] == 'n/a'){ print ('&#x2713;'); };
									print ('</td>');
								print ('</tr>');
								print ('<tr>');
									print ('<th>Mud</th>');
									print ('<td>');
										if ($p[mud] == 'great'){ print ('&#x2713;'); };
									print ('</td>');
									print ('<td>');
										if ($p[mud] == 'good'){ print ('&#x2713;'); };
									print ('</td>');
									print ('<td>');
										if ($p[mud] == 'n/a'){ print ('&#x2713;'); };
									print ('</td>');
								print ('</tr>');
								print ('<tr>');
									print ('<th>Indoor</th>');
									print ('<td>');
										if ($p[indoor] == 'great'){ print ('&#x2713;'); };
									print ('</td>');
									print ('<td>');
										if ($p[indoor] == 'good'){ print ('&#x2713;'); };
									print ('</td>');
									print ('<td>');
										if ($p[indoor] == 'n/a'){ print ('&#x2713;'); };
									print ('</td>');
								print ('</tr>');
								print ('<tr>');
									print ('<th>Outdoor</th>');
									print ('<td>');
										if ($p[outdoor] == 'great'){ print ('&#x2713;'); };
									print ('</td>');
									print ('<td>');
										if ($p[outdoor] == 'good'){ print ('&#x2713;'); };
									print ('</td>');
									print ('<td>');
										if ($p[outdoor] == 'n/a'){ print ('&#x2713;'); };
									print ('</td>');
								print ('</tr>');
								print ('<tr>');
									print ('<th>Driving</th>');
									print ('<td>');
										if ($p[driving] == 'great'){ print ('&#x2713;'); };
									print ('</td>');
									print ('<td>');
										if ($p[driving] == 'good'){ print ('&#x2713;'); };
									print ('</td>');
									print ('<td>');
										if ($p[driving] == 'n/a'){ print ('&#x2713;'); };
									print ('</td>');
								print ('</tr>');

								print('</table></div>');
								?>
			<div class="sizechart-info">
							<table border="1" bordercolor="#0000" style="background-color:grey; color: white; width:100%">
							<style>
							th, td {padding: 5px 3px 5px 3px}
							</style>
								<tr>
									<th>SIZES</th>
									<th>MODEL</th>
									<th>FITS MENS</th>
									<th>FITS WOMANS</th>
								</tr>
								<?php
								if ($p[XSM] && $p[XSW]) {
									print('
									<tr>
										<th>XS</th>
										<td>'.$p[xsmodel].'</td>
										<td>'.$p[XSM].'</td>
										<td>'.$p[XSW].'</td>
									</tr>
									');
								}
								if ($p[SM] && $p[SW]) {
									print('
								<tr>
									<th>S</th>
									<td>'.$p[smodel].'</td>
									<td>'.$p[SM].'</td>
									<td>'.$p[SW].'</td>
								</tr>
									');
								}
								if ($p[MM] && $p[MW]) {
									print('
								<tr>
									<th>M</th>
									<td>'.$p[mmodel].'</td>
									<td>'.$p[MM].'</td>
									<td>'.$p[MW].'</td>
								</tr>
									');
								}
								if ($p[LM] && $p[LW]) {
									print('
								<tr>
									<th>L</th>
									<td>'.$p[lmodel].'</td>
									<td>'.$p[LM].'</td>
									<td>'.$p[LW].'</td>
								</tr>
									');
								}
								if ($p[XLM] && $p[XLW]) {
									print('
								<tr>
									<th>XL</th>
									<td>'.$p[xlmodel].'</td>
									<td>'.$p[XLM].'</td>
									<td>'.$p[XLW].'</td>
								</tr>
									');
								}
								if ($p[XXLM] && $p[XXLW]) {
									print('
								<tr>
									<th>XXL</th>
									<td>'.$p[xxlmodel].'</td>
									<td>'.$p[XXLM].'</td>
									<td>'.$p[XXLW].'</td>
								</tr>
									');
								}
								if ($p[XXXLM] && $p[XXXLW]) {
									print('
								<tr>
									<th>XXXL</th>
									<td>'.$p[xxxlmodel].'</td>
									<td>'.$p[XXXLM].'</td>
									<td>'.$p[XXXLW].'</td>
								</tr>
									');
								}
								if ($p[XXXXLM] && $p[XXXXLW]) {
									print('
								<tr>
									<th>XXXXL</th>
									<td>'.$p[xxxxlmodel].'</td>
									<td>'.$p[XXXXLM].'</td>
									<td>'.$p[XXXXLW].'</td>
								</tr>
									');
								}
								if ($p[model] == 'JD4022 | JD4122' && $p[name] == 'GRIPS Over the Sock') {
									print('
									<tr>
										<th>WHOLE SIZES ONLY</th>
										<td>JD4022 | JD4122</td>
										<td>7 - 13</td>
										<td>7 - 13</td>
									</tr>
									<tr>
										<th>WHOLE SIZES ONLY</th>
										<td>JD4022 | JD4122</td>
										<td>7 - 13</td>
										<td>7 - 13</td>
									</tr>
									');
								}
								?>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div id="right">
				<div class="inner">
					<div class="views-info">
						<div class="main-image">
							<img src="<?php print $p[img_url1]; ?>">
						</div>
					<?php print $image1.$image2.$image3.$image4.$image5.$image6; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include('footer.php');?>
<script src="js/products.js"></script>
<script src="js/stickynav.js"></script>
</body>
</html>