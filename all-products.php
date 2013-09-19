<?php
if ( isset( $_POST['filter-reset'] ) )
{
header('Location:'.$_SERVER['PHP_SELF']);
};
?>
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
	<script src="jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/bootstrap-slider.js"></script>
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
<nav id="productnav">
		<ul>
			<li><a href="all-products.php" class="active">ALL PRODUCTS</a></li>
			<li><a href="featured-product.php">FEATURED PRODUCT</a></li>
		</ul>
	</nav>
</div>
<?php
include('config.php');

$lw = ($_GET['lightweight']);
$max = ($_GET['maxtraction']);
if ($lw == 'true') {
	$filter_query .= " WHERE `sling-device` = 1 ";
} else if ($max == 'true') {
	$filter_query .= " WHERE `extreme-ice` = 1 ";
};

// $ind = ($_GET['indoor']);
// if ($ind = 'true') {
// 	$filter_query .= " WHERE `category` = 'indoor' ";
// };

// $os = ($_GET['overshoe']);
// if ($os = 'true') {
// 	$filter_query .= " WHERE `category` = 'over shoe boots' ";
// };


if ( isset( $_POST['filter-submit'] ) )
{

if ($_POST['gritted'] == 'gritted') {
	$filter_query .= " WHERE `gritted` = 1 ";
};

if ( $_POST['spiked'] == 'spiked') {
	$filter_query .= " WHERE `spiked` = 1 ";
};

if ( $_POST['safer-driving'] == 'safer-driving') {
	$filter_query .= " WHERE `safer-driving` = 1 ";
};

if ( $_POST['non-sparking'] == 'non-sparking') {
	$filter_query .= " WHERE `non-sparking` = 1 ";
};

if ( $_POST['defined-heel'] == 'defined-heel') {
	$filter_query .= " WHERE `defined-heel` = 1 ";
};

if ( $_POST['extreme-ice'] == 'extreme-ice') {
	$filter_query .= " WHERE `extreme-ice` = 1 ";
};

if ( $_POST['outdoor-only'] == 'outdoor-only') {
	$filter_query .= " WHERE `outdoor-only` = 1 ";
};

if ( $_POST['indoor-outdoor'] == 'indoor-outdoor') {
	$filter_query .= " WHERE `indoor-outdoor` = 1 ";
};

if ( $_POST['indoor-only'] == 'indoor-only') {
	$filter_query .= " WHERE `indoor-only` = 1 ";
};

if ( $_POST['safer-indoors'] == 'safer-indoors') {
	$filter_query .= " WHERE `safer-indoors` = 1 ";
};

if ( $_POST['overshoe'] == 'overshoe') {
	$filter_query .= " WHERE `category` = 'over shoe boots' ";
};

if ( $_POST['insulated'] == 'insulated') {
	$filter_query .= " WHERE `insulated` = 1 ";
};

if ( $_POST['ice-snow'] == 'ice-snow') {
	$filter_query .= " WHERE `ice-snow` = 1 ";
};

if ( $_POST['stripping'] == 'stripping') {
	$filter_query .= " WHERE `stripping` = 1 ";
};

if ( $_POST['oil-grease'] == 'oil-grease') {
	$filter_query .= " WHERE `oil-grease` = 1 ";
};

if ( $_POST['food-processing'] == 'food-processing') {
	$filter_query .= " WHERE `food-processing` = 1 ";
};

if ( $_POST['sling-device'] == 'sling-device') {
	$filter_query .= " WHERE `sling-device` = 1 ";
};

if ( $_POST['over-sock'] == 'over-sock') {
	$filter_query .= " WHERE `over-sock` = 1 ";
};

if ( $_POST['steel-toe'] == 'steel-toe') {
	$filter_query .= " WHERE `steel-toe` = 1 ";
};

$filter_query = str_replace('  ', ' AND ', $filter_query);
$filter_query = str_replace('AND WHERE', ' AND ', $filter_query);

};

// print($filter_query);
print('<section id="products">');
print('<div class="wrap clearfix">');
print('<aside id="filter">');
print('<form method="post" action="all-products.php">');

print('<input type="submit" id="filterbutton" name ="filter-submit" class="filter-submit" value="FILTER">');

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

print('<div class="opt-wrap"><input type="checkbox" name="steel-toe" value="steel-toe" id="steel-toe"');
if ($_POST['steel-toe'] == 'steel-toe'){
print('checked = "checked"');
};
print('><label for="steel-toe">Steel Toe<span></span></label></div>');

/* -----------WALKING CONDITION------------------- */
print('<span class="filter-header">WALKING CONDITION:</span>');

print('<div class="opt-wrap"><input type="checkbox" name="extreme-ice" value="extreme-ice" id="extreme-ice"');
if ($_POST['extreme-ice'] == 'extreme-ice'){
print('checked = "checked"');
};
print('><label for="extreme-ice">Extreme Ice<span></span></label></div>');

print('<div class="opt-wrap"><input type="checkbox" name="outdoor-only" value="outdoor-only" id="outdoor-only"');
if ($_POST['outdoor-only'] == 'outdoor-only'){
print('checked = "checked"');
};
print('><label for="outdoor-only">Outdoor Only<span></span></label></div>');

print('<div class="opt-wrap"><input type="checkbox" name="indoor-outdoor" value="indoor-outdoor" id="indoor-outdoor"');
if ($_POST['indoor-outdoor'] == 'indoor-outdoor'){
print('checked = "checked"');
};
print('><label for="indoor-outdoor">Indoor and Outdoor<span></span></label></div>');

print('<div class="opt-wrap"><input type="checkbox" name="indoor-only" value="indoor-only" id="indoor-only"');
if ($_POST['indoor-only'] == 'indoor-only'){
print('checked = "checked"');
};
print('><label for="indoor-only">Indoor Only<span></span></label></div>');

/* -----------SLIP HAZARD---------------------------- */
print('<span class="filter-header">SLIP HAZARD:</span>');

print('<div class="opt-wrap"><input type="checkbox" name="ice-snow" value="ice-snow" id="ice-snow"');
if ($_POST['ice-snow'] == 'ice-snow'){
print('checked = "checked"');
};
print('><label for="ice-snow">Ice and Snow<span></span></label></div>');

print('<div class="opt-wrap"><input type="checkbox" name="stripping" value="stripping" id="stripping"');
if ($_POST['stripping'] == 'stripping'){
print('checked = "checked"');
};
print('><label for="stripping">Floor Stripping<span></span></label></div>');

print('<div class="opt-wrap"><input type="checkbox" name="oil-grease" value="oil-grease" id="oil-grease"');
if ($_POST['oil-grease'] == 'oil-grease'){
print('checked = "checked"');
};
print('><label for="oil-grease">Oil/Grease<span></span></label></div>');

print('<div class="opt-wrap"><input type="checkbox" name="food-processing" value="food-processing" id="food-processing"');
if ($_POST['food-processing'] == 'food-processing'){
print('checked = "checked"');
};
print('><label for="food-processing">Food Processing<span></span></label></div>');

/* ------------FIT--------------------------------------------------- */
print('<span class="filter-header">FIT:</span>');

print('<div class="opt-wrap"><input type="checkbox" name="sling-device" value="sling-device" id="sling-device"');
if ($_POST['sling-device'] == 'sling-device'){
print('checked = "checked"');
};
print('><label for="sling-device">Sling Device<span></span></label></div>');

print('<div class="opt-wrap"><input type="checkbox" name="over-sock" value="over-sock" id="over-sock"');
if ($_POST['over-sock'] == 'over-sock'){
print('checked = "checked"');
};
print('><label for="over-sock">Over Sock<span></span></label></div>');

print('<div class="opt-wrap"><input type="checkbox" name="overshoe" value="overshoe" id="overshoe"');
if ($_POST['overshoe'] == 'overshoe'){
print('checked = "checked"');
};
print('><label for="overshoe">Over Shoe<span></span></label></div>');

/* -------------------------------------------------------------------- */
print('<button id="resetbutton" name ="filter-reset" class="filter-reset" value="RESET">RESET</button>');
// print('</div>');
print('</form>');
print('</aside>');
?>

<?php
include ('config.php');
$query = mysqli_query ($con, "SELECT * FROM products $filter_query ORDER BY sortorder ASC");

$result = mysqli_num_rows($query);

if ($result <= 0)
{

	print ("<span class='message'>Oh No!, There are no products that match your criteria. Try un-checking one or more options.</span>");

};

print('<div class="product-bttn-wrapper">');

while ($fetch = mysqli_fetch_array($query)) {

	print ('<a class="product-thumb-wrap" href="product-details.php?model='.$fetch[model].'">
				<button class="product" type="button">
					<div class="titles">
					<span class="title">'.$fetch[name].'</span>
					<span class="sub-title">'.$fetch[upper_style].'</span>
										<img src=" '.$fetch[img_url].' " alt="shoe">
					</div>
				</button>
			</a>');

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
