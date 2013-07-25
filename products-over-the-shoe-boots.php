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
<?php include('nav.php');?>
<?php include('header.php');?>
<nav id="productnav">
		<ul>
			<li><a href="all-products.php">ALL PRODUCTS</a></li>
			<li><a href="products-lightweight.php">LIGHTWEIGHT</a></li>
			<li><a href="products-over-the-shoe-boots.php" class="active">OVER THE SHOE BOOTS</a></li>
			<li><a href="products-indoor-footwear.php">INDOOR FOOTWEAR</a></li>
			<li><a href="featured-product.php">FEATURED PRODUCT</a></li>
		</ul>
	</nav>
</div>

<?php
include('config.php');

if ( isset( $_POST['filter-submit'] ) )
{

if ($_POST['gritted'] == 'gritted') {
	$filter_query .= " AND `gritted` = 1";
};

if ( $_POST['spiked'] == 'spiked') {
	$filter_query .= " AND `spiked` = 1";
};

if ( $_POST['safer-driving'] == 'safer-driving') {
	$filter_query .= " AND `safer-driving` = 1";
};

if ( $_POST['non-sparking'] == 'non-sparking') {
	$filter_query .= " AND `non-sparking` = 1";
};

if ( $_POST['defined-heel'] == 'defined-heel') {
	$filter_query .= " AND `defined-heel` = 1";
};

if ( $_POST['extreme-ice'] == 'extreme-ice') {
	$filter_query .= " AND `extreme-ice` = 1";
};

if ( $_POST['safer-indoors'] == 'safer-indoors') {
	$filter_query .= " AND `safer-indoors` = 1";
};

if ( $_POST['low-cut'] == 'low-cut') {
	$filter_query .= " AND `low-cut` = 1";
};

if ( $_POST['mid-calf'] == 'mid-calf') {
	$filter_query .= " AND `mid-calf` = 1";
};

if ( $_POST['knee-high'] == 'knee-high') {
	$filter_query .= " AND `knee-high` = 1";
};

if ( $_POST['insulated'] == 'insulated') {
	$filter_query .= " AND `insulated` = 1";
};

};

// print($filter_query);
print('<section id="products">');
print('<div class="wrap clearfix">');
print('<aside id="filter">');
// print('<h1>GET A GRIP: </h1>');
print('<form method="post" action="products-over-the-shoe-boots.php">');

/* -------------TRACTION------------------------- */
print('<span class="filter-header first">TRACTION:</span>');

print('<div class="opt-wrap"><input type="checkbox" name="gritted" value="gritted" id="gritted"');
if ($_POST['gritted'] == 'gritted'){
print('checked = "checked"');
};
print('><label for="gritted">Gritted<span></span></label></div>');

print('<div class="opt-wrap"><input type="checkbox" name="spiked" value="spiked" id="spiked"');
if ($_POST['spiked'] == 'spiked'){
print('checked = "checked"');
};
print('><label for="spiked">Spiked<span></span></label></div>');

/* -----REQUIREMENTS--------------------------------- */
print('<span class="filter-header">REQUIREMENTS:</span>');

print('<div class="opt-wrap"><input type="checkbox" name="safer-driving" value="safer-driving" id="safer-driving"');
if ($_POST['safer-driving'] == 'safer-driving'){
print('checked = "checked"');
};
print('><label for="safer-driving">Safe for Driving<span></span></label></div>');

print('<div class="opt-wrap"><input type="checkbox" name="non-sparking" value="non-sparking" id="non-sparking"');
if ($_POST['non-sparking'] == 'non-sparking'){
print('checked = "checked"');
};
print('><label for="non-sparking">Non-Sparking<span></span></label></div>');

print('<div class="opt-wrap"><input type="checkbox" name="safer-indoors" value="safer-indoors" id="safer-indoors"');
if ($_POST['safer-indoors'] == 'safer-indoors'){
print('checked = "checked"');
};
print('><label for="safer-indoors">Safe for Indoors<span></span></label></div>');

/* --------------FEATURES------------------------------ */
print('<span class="filter-header">FEATURES:</span>');

print('<div class="opt-wrap"><input type="checkbox" name="defined-heel" value="defined-heel" id="defined-heel"');
if ($_POST['defined-heel'] == 'defined-heel'){
print('checked = "checked"');
};
print('><label for="defined-heel">Defined Heel<span></span></label></div>');

print('<div class="opt-wrap"><input type="checkbox" name="insulated" value="insulated" id="insulated"');
if ($_POST['insulated'] == 'insulated'){
print('checked = "checked"');
};
print('><label for="insulated">Insulated<span></span></label></div>');

/* -----------WALKING CONDITION------------------- */
print('<span class="filter-header">WALKING CONDITION:</span>');

print('<div class="opt-wrap"><input type="checkbox" name="extreme-ice" value="extreme-ice" id="extreme-ice"');
if ($_POST['extreme-ice'] == 'extreme-ice'){
print('checked = "checked"');
};
print('><label for="extreme-ice">Extreme Ice<span></span></label></div>');

/* ------------FIT--------------------------------------------------- */
print('<span class="filter-header">FIT:</span>');

print('<div class="opt-wrap"><input type="checkbox" name="low-cut" value="low-cut" id="low-cut"');
if ($_POST['low-cut'] == 'low-cut'){
print('checked = "checked"');
};
print('><label for="low-cut">Low Cut<span></span></label></div>');

print('<div class="opt-wrap"><input type="checkbox" name="mid-calf" value="mid-calf" id="mid-calf"');
if ($_POST['mid-calf'] == 'mid-calf'){
print('checked = "checked"');
};
print('><label for="mid-calf">Mid Calf<span></span></label></div>');

print('<div class="opt-wrap"><input type="checkbox" name="knee-high" value="knee-high" id="knee-high"');
if ($_POST['knee-high'] == 'knee-high'){
print('checked = "checked"');
};
print('><label for="knee-high">Knee High<span></span></label></div>');

print('<div class="filterreset">');
print('<input type="submit" id="filterbutton" name ="filter-submit" class="filter-submit" value="FILTER">');
print('<button href="products-over-the-shoe-boot.php" id="resetbutton" name ="filter-reset" class="filter-reset" value="RESET">RESET</button>');
print('</div>');

print('</form>');
print('</aside>');
?>

<?php
include ('config.php');
$query = mysqli_query ($con, "SELECT * FROM products WHERE category = 'over shoe boots' $filter_query ORDER BY name ASC");

$result = mysqli_num_rows($query);
if ($result <= 0)
{
	print ("<span class='message'>Oh No!, There are no products that match your criteria. Try un-checking one or more options.</span>");
};

print('<div class="product-bttn-wrapper">');
while ($fetch = mysqli_fetch_array($query)) {
print ('<button class="product '.$fetch[traction_versatility].' '.$fetch[easyonoff_security].' '.$fetch[economical_indstrength].' '.$fetch[protectionwarmth_nocoverage].' " product-number="'.$fetch[model].'" product-description="'.$fetch[description].'" product-features="'.$fetch[features].'" ice="'.$fetch[ice].'" snow="'.$fetch[snow].'" oil="'.$fetch[oil].'" fats="'.$fetch[fats].'" soaps="'.$fetch[soaps].'" chemicals="'.$fetch[chemicals].'" liquids="'.$fetch[liquids].'" mud="'.$fetch[mud].'" indoor="'.$fetch[indoor].'" outdoor="'.$fetch[outdoor].'" driving="'.$fetch[driving].'" product-name="'.$fetch[name].'" product-image="'.$fetch[img_url].'" image1="'.$fetch[img_url1].'" image2="'.$fetch[img_url2].'" image3="'.$fetch[img_url3].'" image4="'.$fetch[img_url4].'" xs="'.$fetch[XS].'" s="'.$fetch[S].'" m="'.$fetch[M].'" l="'.$fetch[L].'" xl="'.$fetch[XL].'" xxl="'.$fetch[XXL].'" xxxl="'.$fetch[XXXL].'"  xxxxl="'.$fetch[XXXXL].'" id="" type="button">
			<span class="title">'.$fetch[name].'</span>
			<span class="sub-title">'.$fetch[upper_style].'</span>
			<img src=" '.$fetch[img_url].' " alt="shoe">
		</button>');
};
print('</div>');
print('</div>');
mysqli_close($con);
?>
</section>
<?php include('footer.php');?>
<script src="js/products.js"></script>
<script src="js/stickynav.js"></script>
</body>
</html>
