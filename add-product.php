<?php
session_start();
if(!session_is_registered(user)){
header("location:login.php");
}
?>
<?php
include('config.php');

if ( isset( $_POST['submit'] ) )
{

$directory_self = str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']);
$UPDIR = $_SERVER['DOCUMENT_ROOT'] . $directory_self . 'img/products/';
/////////////////////////////////////////////////////////////////
$image1 = $_FILES['imgurl']['name'];
$image2 = $_FILES['imgurl2']['name'];
$image3 = $_FILES['imgurl3']['name'];
$image4 = $_FILES['imgurl4']['name'];

move_uploaded_file($_FILES["imgurl"]["tmp_name"], $UPDIR . $image1);
move_uploaded_file($_FILES["imgurl2"]["tmp_name"], $UPDIR . $image2);
move_uploaded_file($_FILES["imgurl3"]["tmp_name"], $UPDIR . $image3);
move_uploaded_file($_FILES["imgurl4"]["tmp_name"], $UPDIR . $image4);

if ($image1) {
$img_url = "img/products/$image1";
}
if ($image2) {
$img_url2 = "img/products/$image2";
}
if ($image3) {
$img_url3 = "img/products/$image3";
}
if ($image4) {
$img_url4 = "img/products/$image4";
}
/////////////////////////////////////////////////////////////////

$feature1 = filter_var($_POST['feature1'], FILTER_SANITIZE_STRING);
$feature2 = filter_var($_POST['feature2'], FILTER_SANITIZE_STRING);
$feature3 = filter_var($_POST['feature3'], FILTER_SANITIZE_STRING);
$feature4 = filter_var($_POST['feature4'], FILTER_SANITIZE_STRING);
$feature5 = filter_var($_POST['feature5'], FILTER_SANITIZE_STRING);
$feature6 = filter_var($_POST['feature6'], FILTER_SANITIZE_STRING);
$feature7 = filter_var($_POST['feature7'], FILTER_SANITIZE_STRING);
$feature8 = filter_var($_POST['feature8'], FILTER_SANITIZE_STRING);
$feature9 = filter_var($_POST['feature9'], FILTER_SANITIZE_STRING);
$feature10 = filter_var($_POST['feature10'], FILTER_SANITIZE_STRING);


$model = filter_var($_POST['model'], FILTER_SANITIZE_STRING);
$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$category = filter_var($_POST['category'], FILTER_SANITIZE_STRING);
$upper_material = filter_var($_POST['uppermaterial'], FILTER_SANITIZE_STRING);
$traction = filter_var($_POST['traction'], FILTER_SANITIZE_STRING);
$feature_note = filter_var($_POST['featurenote'], FILTER_SANITIZE_STRING);

$description1 = filter_var($_POST['description'], FILTER_SANITIZE_STRING);
$description = "<p>$description1</p>";

$features = "<ul>";
if ($feature1) {
$features .= "<li>$feature1</li>";
}
if ($feature2) {
$features .= "<li>$feature2</li>";
}
if ($feature3) {
$features .= "<li>$feature3</li>";
}
if ($feature4) {
$features .= "<li>$feature4</li>";
}
if ($feature5) {
$features .= "<li>$feature5</li>";
}
if ($feature6) {
$features .= "<li>$feature6</li>";
}
if ($feature7) {
$features .= "<li>$feature7</li>";
}
if ($feature8) {
$features .= "<li>$feature8</li>";
}
if ($feature9) {
$features .= "<li>$feature9</li>";
}
if ($feature10) {
$features .= "<li>$feature10</li>";
}
$features .= "</ul>";

$ice = filter_var($_POST['ice'], FILTER_SANITIZE_STRING);
$extremeice = filter_var($_POST['extremeice'], FILTER_SANITIZE_STRING);
$snow = filter_var($_POST['snow'], FILTER_SANITIZE_STRING);
$oil = filter_var($_POST['oil'], FILTER_SANITIZE_STRING);
$fats = filter_var($_POST['fats'], FILTER_SANITIZE_STRING);
$soaps = filter_var($_POST['soaps'], FILTER_SANITIZE_STRING);
$chemicals = filter_var($_POST['chemicals'], FILTER_SANITIZE_STRING);
$liquids = filter_var($_POST['liquids'], FILTER_SANITIZE_STRING);
$mud = filter_var($_POST['mud'], FILTER_SANITIZE_STRING);
$indoor = filter_var($_POST['indoor'], FILTER_SANITIZE_STRING);
$outdoor = filter_var($_POST['outdoor'], FILTER_SANITIZE_STRING);
$driving = filter_var($_POST['driving'], FILTER_SANITIZE_STRING);
$gritted = filter_var($_POST['gritted'], FILTER_SANITIZE_STRING);
$spiked = filter_var($_POST['spiked'], FILTER_SANITIZE_STRING);
$saferdriving = filter_var($_POST['saferdriving'], FILTER_SANITIZE_STRING);
$saferindoors = filter_var($_POST['saferindoors'], FILTER_SANITIZE_STRING);
$nonsparking = filter_var($_POST['nonsparking'], FILTER_SANITIZE_STRING);
$definedheel = filter_var($_POST['definedheel'], FILTER_SANITIZE_STRING);
$insulated = filter_var($_POST['insulated'], FILTER_SANITIZE_STRING);
$stripping = filter_var($_POST['stripping'], FILTER_SANITIZE_STRING);
$foodprocessing = filter_var($_POST['foodprocessing'], FILTER_SANITIZE_STRING);
$oilgrease = filter_var($_POST['oilgrease'], FILTER_SANITIZE_STRING);
$oversock = filter_var($_POST['oversock'], FILTER_SANITIZE_STRING);
$steeltoe = filter_var($_POST['steeltoe'], FILTER_SANITIZE_STRING);

$cuttype = filter_var($_POST['cuttype'], FILTER_SANITIZE_STRING);
if ($cuttype == 1) {
	$upper_style = "6&quot; Low Cut";
	$lowcut = 1;
	$midcalf = 0;
	$kneehigh = 0;
} else 	if ($cuttype == 2) {
	$upper_style = "10&quot; Boot";
	$lowcut = 0;
	$midcalf = 1;
	$kneehigh = 0;
} else 	if ($cuttype == 3) {
	$upper_style = "15&quot; Boot";
	$lowcut = 0;
	$midcalf = 0;
	$kneehigh = 1;
} else 	if ($cuttype == 4) {
	$upper_style = "Sandal";
	$lowcut = 0;
	$midcalf = 0;
	$kneehigh = 0;
} else 	if ($cuttype == 5) {
	$upper_style = "Stretch Device";
	$lowcut = 0;
	$midcalf = 0;
	$kneehigh = 0;
};

$XS = filter_var($_POST['XS'], FILTER_SANITIZE_STRING);
$S = filter_var($_POST['S'], FILTER_SANITIZE_STRING);
$M = filter_var($_POST['M'], FILTER_SANITIZE_STRING);
$L = filter_var($_POST['L'], FILTER_SANITIZE_STRING);
$XL = filter_var($_POST['XL'], FILTER_SANITIZE_STRING);
$XXL = filter_var($_POST['XXL'], FILTER_SANITIZE_STRING);
$XXXL = filter_var($_POST['XXXL'], FILTER_SANITIZE_STRING);
$XXXXL = filter_var($_POST['XXXXL'], FILTER_SANITIZE_STRING);

/* Send to DB */
	$sql = "INSERT INTO products (`model`, `name`, `category`, `upper_style`, `upper_material`, `traction`, `feature_note`, `description`, `img_url`, `img_url2`, `img_url3`, `img_url4`, `features`, `ice`, `extreme-ice`, `snow`, `oil`, `fats`, `soaps`, `chemicals`, `liquids`, `mud`, `indoor`, `outdoor`, `driving`, `gritted`, `spiked`, `safer-driving`, `safer-indoors`, `non-sparking`, `defined-heel`, `insulated`, `stripping`, `food-processing`, `oil-grease`, `over-sock`, `steel-toe`, `low-cut`, `mid-calf`, `knee-high`, `XS`, `S`, `M`, `L`, `XL`, `XXL`, `XXXL`, `XXXXL`)
	VALUES ('$model', '$name', '$category', '$upper_style', '$upper_material', '$traction', '$feature_note', '$description', '$img_url', '$img_url2', '$img_url3', '$img_url4', '$features', '$ice', '$extremeice', '$snow', '$oil', '$fats', '$soaps', '$chemicals', '$liquids', '$mud', '$indoor', '$outdoor', '$driving', '$gritted', '$spiked', '$saferdriving', '$saferindoors', '$nonsparking', '$definedheel', '$insulated', '$stripping', '$foodprocessing', '$oilgrease', '$oversock', '$steeltoe', '$lowcut', '$midcalf', '$kneehigh', '$XS', '$S', '$M', '$L', '$XL', '$XXL', '$XXXL', '$XXXXL')";

	if (!mysqli_query($con,$sql))
			{
				die('There was an issue adding this product. Error: ' . mysqli_error($con));
			}
			session_start();
			session_destroy();
			header("location:all-products.php");
		}

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
	<nav>
		<div class="wrap clearfix">
			<a href="remove-product.php" style="float:left; padding:0;">REMOVE PRODUCT/S</a>
			<a href="signout.php" style="float:right; padding:0;">SIGN OUT</a>
		</div>
	</nav>
</header>
<?php include('header.php');?>
</div>

<div class="wrap clearfix">

<!-- ---------------------------------------------------------- -->
<form method="post" id="add-product-form" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" enctype="multipart/form-data">
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
<label for="uppermaterial">Upper Material:</label>
<input type="text" name="uppermaterial" id="uppermaterial">
</div>

<div class="field-wrap">
<label for="traction">Traction:</label>
<input type="text" name="traction" id="traction">
</div>

<div class="field-wrap">
<label for="featurenote">Feature Note:</label>
<input type="text" name="featurenote" id="featurenote">
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
<label for="imgurl">Main Image:</label>
<input type="file" name="imgurl" id="imgurl">
</div>

<div class="full-field-wrap">
<label for="imgurl2">Image 2:</label>
<input type="file" name="imgurl2" id="imgurl2">
</div>

<div class="full-field-wrap">
<label for="imgurl3">Image 3:</label>
<input type="file" name="imgurl3" id="imgurl3">
</div>

<div class="full-field-wrap">
<label for="imgurl4">Image 4:</label>
<input type="file" name="imgurl4" id="imgurl4">
</div>

</div>
<!-- ---------------------------------------------------------- -->
<div class="product-form-section">
<span>Features List:</span>

<div class="half-field-wrap">
<label for="feature1">Feature 1:</label>
<input type="text" name="feature1" id="feature1">
</div>

<div class="half-field-wrap">
<label for="feature2">Feature 2:</label>
<input type="text" name="feature2" id="feature2">
</div>

<div class="half-field-wrap">
<label for="feature3">Feature 3:</label>
<input type="text" name="feature3" id="feature3">
</div>

<div class="half-field-wrap">
<label for="feature4">Feature 4:</label>
<input type="text" name="feature4" id="feature4">
</div>

<div class="half-field-wrap">
<label for="feature5">Feature 5:</label>
<input type="text" name="feature5" id="feature5">
</div>

<div class="half-field-wrap">
<label for="feature6">Feature 6:</label>
<input type="text" name="feature6" id="feature6">
</div>

<div class="half-field-wrap">
<label for="feature7">Feature 7:</label>
<input type="text" name="feature7" id="feature7">
</div>

<div class="half-field-wrap">
<label for="feature8">Feature 8:</label>
<input type="text" name="feature8" id="feature8">
</div>

<div class="half-field-wrap">
<label for="feature9">Feature 9:</label>
<input type="text" name="feature9" id="feature9">
</div>

<div class="half-field-wrap">
<label for="feature10">Feature 10:</label>
<input type="text" name="feature10" id="feature10">
</div>

</div>
<!-- ---------------------------------------------------------- -->
<div class="product-form-section">

<span>Ideal Conditions:</span>

<div class="field-wrap">
<label for="ice">Ice</label>
<select name="ice">
<option value="n/a">N/A</option>
<option value="no">No</option>
<option value="good">Good</option>
<option value="great">Great</option>
</select>
</div>


<div class="field-wrap">
<label for="snow">Snow</label>
<select name="snow">
<option value="n/a">N/A</option>
<option value="no">No</option>
<option value="good">Good</option>
<option value="great">Great</option>
</select>
</div>


<div class="field-wrap">
<label for="oil">Oil</label>
<select name="oil">
<option value="n/a">N/A</option>
<option value="no">No</option>
<option value="good">Good</option>
<option value="great">Great</option>
</select>
</div>


<div class="field-wrap">
<label for="fats">Fats</label>
<select name="fats">
<option value="n/a">N/A</option>
<option value="no">No</option>
<option value="good">Good</option>
<option value="great">Great</option>
</select>
</div>


<div class="field-wrap">
<label for="soaps">Soaps</label>
<select name="soaps">
<option value="n/a">N/A</option>
<option value="no">No</option>
<option value="good">Good</option>
<option value="great">Great</option>
</select>
</div>


<div class="field-wrap">
<label for="chemicals">Chemicals</label>
<select name="chemicals">
<option value="n/a">N/A</option>
<option value="no">No</option>
<option value="good">Good</option>
<option value="great">Great</option>
</select>
</div>


<div class="field-wrap">
<label for="liquids">Liquids</label>
<select name="liquids">
<option value="n/a">N/A</option>
<option value="no">No</option>
<option value="good">Good</option>
<option value="great">Great</option>
</select>
</div>


<div class="field-wrap">
<label for="mud">Mud</label>
<select name="mud">
<option value="n/a">N/A</option>
<option value="no">No</option>
<option value="good">Good</option>
<option value="great">Great</option>
</select>
</div>


<div class="field-wrap">
<label for="indoor">Indoor</label>
<select name="indoor">
<option value="n/a">N/A</option>
<option value="no">No</option>
<option value="good">Good</option>
<option value="great">Great</option>
</select>
</div>


<div class="field-wrap">
<label for="outdoor">Outdoor</label>
<select name="outdoor">
<option value="n/a">N/A</option>
<option value="no">No</option>
<option value="good">Good</option>
<option value="great">Great</option>
</select>
</div>


<div class="field-wrap">
<label for="driving">Driving</label>
<select name="driving">
<option value="n/a">N/A</option>
<option value="no">No</option>
<option value="good">Good</option>
<option value="great">Great</option>
</select>
</div>

</div>

<!-- ---------------------------------------------------------- -->
<div class="product-form-section">
<span>Filter Options:</span>

<div class="field-wrap">
<input type="checkbox" name="gritted" value="1" id="gritted">
<label for="gritted">Gritted</label>
</div>

<div class="field-wrap">
<input type="checkbox" name="spiked" value="1" id="spiked">
<label for="spiked">Spiked</label>
</div>

<div class="field-wrap">
<input type="checkbox" name="saferdriving" value="1" id="saferdriving">
<label for="saferdriving">Safer Driving</label>
</div>

<div class="field-wrap">
<input type="checkbox" name="saferindoors" value="1" id="saferindoors">
<label for="saferindoors">Safer Indoors</label>
</div>

<div class="field-wrap">
<input type="checkbox" name="nonsparking" value="1" id="nonsparking">
<label for="nonsparking">Non-Sparking</label>
</div>

<div class="field-wrap">
<input type="checkbox" name="definedheel" value="1" id="definedheel">
<label for="definedheel">Defined Heel</label>
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
<input type="checkbox" name="foodprocessing" value="1" id="foodprocessing">
<label for="foodprocessing">Food Processing</label>
</div>

<div class="field-wrap">
<input type="checkbox" name="oilgrease" value="1" id="oilgrease">
<label for="oilgrease">Oil/Grease</label>
</div>

<div class="field-wrap">
<input type="checkbox" name="oversock" value="1" id="oversock">
<label for="oversock">Over Sock</label>
</div>

<div class="field-wrap">
<input type="checkbox" name="steeltoe" value="1" id="steeltoe">
<label for="steeltoe">Steel Toe</label>
</div>

<div class="field-wrap">
<input type="checkbox" name="extremeice" value="1" id="extremeice">
<label for="extremeice">Extreme Ice</label>
</div>

</div>
<!-- ---------------------------------------------------------- -->
<div class="product-form-section">
<span>Boot Cut:</span>

<div class="field-wrap">
<input type="radio" name="cuttype" value="1" id="lowcut">
<label for="lowcut">Low Cut</label>
</div>

<div class="field-wrap">
<input type="radio" name="cuttype" value="2" id="midcalf">
<label for="midcalf">Mid Calf</label>
</div>

<div class="field-wrap">
<input type="radio" name="cuttype" value="3" id="kneehigh">
<label for="kneehigh">Knee High</label>
</div>

<div class="field-wrap">
<input type="radio" name="cuttype" value="4" id="sandal">
<label for="sandal">Sandal</label>
</div>

<div class="field-wrap">
<input type="radio" name="cuttype" value="5" id="stretchdevice">
<label for="stretchdevice">Stretch Device</label>
</div>

</div>
<!-- ---------------------------------------------------------- -->
<div class="product-form-section">
<span>Availible Sizes:</span>

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
</body>
</html>
