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
			<li><a href="products-over-the-shoe-boots.php">OVER THE SHOE BOOTS</a></li>
			<li><a href="products-indoor-footwear.php" class="active">INDOOR FOOTWEAR</a></li>
			<li><a href="featured-product.php">FEATURED PRODUCT</a></li>
		</ul>
	</nav>
</div>

<?php
include('config.php');

if ( isset( $_POST['filter-submit'] ) )
{

if ( $_POST['stripping'] == 'stripping') {
	$filter_query .= "AND `stripping` = 1";
};

if ( $_POST['oil-grease'] == 'oil-grease') {
	$filter_query .= "AND `oil-grease` = 1";
};

if ( $_POST['food-processing'] == 'food-processing') {
	$filter_query .= "AND `food-processing` = 1";
};

if ( $_POST['over-sock'] == 'over-sock') {
	$filter_query .= "AND `over-sock` = 1";
};

if ( $_POST['steel-toe'] == 'steel-toe') {
	$filter_query .= "AND `steel-toe` = 1";
};

};

// print($filter_query);
print('<section id="products">');
print('<div class="wrap clearfix">');
print('<aside id="filter">');
// print('<h1>GET A GRIP: </h1>');
print('<form method="post" action="products-indoor-footwear.php">');

/* -----------WALKING CONDITION------------------- */
print('<span class="filter-header first">WALKING CONDITION:</span>');

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

print('<div class="opt-wrap"><input type="checkbox" name="over-sock" value="over-sock" id="over-sock"');
if ($_POST['over-sock'] == 'over-sock'){
print('checked = "checked"');
};
print('><label for="over-sock">Over the Sock<span></span></label></div>');

print('<div class="opt-wrap"><input type="checkbox" name="steel-toe" value="steel-toe" id="steel-toe"');
if ($_POST['steel-toe'] == 'steel-toe'){
print('checked = "checked"');
};
print('><label for="steel-toe">Steel Toe<span></span></label></div>');

print('<div class="filterreset">');
print('<input type="submit" id="filterbutton" name ="filter-submit" class="filter-submit" value="FILTER">');
print('<button href="products-indoor-footwear.php" id="resetbutton" name ="filter-reset" class="filter-reset" value="RESET">RESET</button>');
print('</div>');
print('</form>');
print('</aside>');
?>

<?php
include ('config.php');
$query = mysqli_query ($con, "SELECT * FROM products WHERE category = 'indoor' $filter_query ORDER BY name ASC");

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
