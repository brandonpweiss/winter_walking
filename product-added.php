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
<?php
include('config.php');

if ( isset( $_POST['submit'] ) )
{

// make a note of the current working directory, relative to root.
$directory_self = str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']);

// make a note of the directory that will recieve the uploaded file
$uploadsDirectory = $_SERVER['DOCUMENT_ROOT'] . $directory_self . 'img/products/';

$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["img_url"]["name"]);
$extension = end($temp);
if ((($_FILES["img_url"]["type"] == "image/gif")
|| ($_FILES["img_url"]["type"] == "image/jpeg")
|| ($_FILES["img_url"]["type"] == "image/jpg")
|| ($_FILES["img_url"]["type"] == "image/pjpeg")
|| ($_FILES["img_url"]["type"] == "image/x-png")
|| ($_FILES["img_url"]["type"] == "image/png"))
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["img_url"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["img_url"]["error"] . "<br>";
    }
  else
    {
    echo "Upload: " . $_FILES["img_url"]["name"] . "<br>";
    echo "Type: " . $_FILES["img_url"]["type"] . "<br>";
    echo "Size: " . ($_FILES["img_url"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["img_url"]["tmp_name"] . "<br>";

    if (file_exists("$uploadsDirectory" . $_FILES["img_url"]["name"]))
      {
      echo $_FILES["img_url"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["img_url"]["tmp_name"],
      "$uploadsDirectory" . $_FILES["img_url"]["name"]);
      echo "Stored in: " . "$uploadsDirectory" . $_FILES["img_url"]["name"];
      }
    }
  }
else
  {
  echo "Invalid file";
  }

	$features1 = filter_var($_POST['features-1'], FILTER_SANITIZE_STRING);
	$features2 = filter_var($_POST['features-2'], FILTER_SANITIZE_STRING);
	$features3 = filter_var($_POST['features-3'], FILTER_SANITIZE_STRING);
	$features4 = filter_var($_POST['features-4'], FILTER_SANITIZE_STRING);
	$features5 = filter_var($_POST['features-5'], FILTER_SANITIZE_STRING);
	$features6 = filter_var($_POST['features-6'], FILTER_SANITIZE_STRING);
	$features7 = filter_var($_POST['features-7'], FILTER_SANITIZE_STRING);
	$features8 = filter_var($_POST['features-8'], FILTER_SANITIZE_STRING);
	$features9 = filter_var($_POST['features-9'], FILTER_SANITIZE_STRING);
	$features10 = filter_var($_POST['features-10'], FILTER_SANITIZE_STRING);


	$model = filter_var($_POST['model'], FILTER_SANITIZE_STRING);

	$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);

	$category = filter_var($_POST['category'], FILTER_SANITIZE_STRING);

	$upper_material = filter_var($_POST['upper_material'], FILTER_SANITIZE_STRING);

	$traction = filter_var($_POST['traction'], FILTER_SANITIZE_STRING);

	$feature_note = filter_var($_POST['feature_note'], FILTER_SANITIZE_STRING);

	$description = filter_var($_POST['description'], FILTER_SANITIZE_STRING);

	// $img_url = filter_var($_POST['img_url'], FILTER_SANITIZE_STRING);

	// $img_url2 = filter_var($_POST['img_url2'], FILTER_SANITIZE_STRING);

	// $img_url3 = filter_var($_POST['img_url3'], FILTER_SANITIZE_STRING);

	// $img_url4 = filter_var($_POST['img_url4'], FILTER_SANITIZE_STRING);

	$features = "<ul>";
	$features .= "<li>$feature1</li>";
	$features .= "<li>$feature2</li>";
	$features .= "<li>$feature3</li>";
	$features .= "<li>$feature4</li>";
	$features .= "<li>$feature5</li>";
	$features .= "<li>$feature6</li>";
	$features .= "<li>$feature7</li>";
	$features .= "<li>$feature8</li>";
	$features .= "<li>$feature9</li>";
	$features .= "<li>$feature10</li>";
	$features .= "</ul>";

	$ice = filter_var($_POST['ice'], FILTER_SANITIZE_STRING);

	$extremeice = filter_var($_POST['extreme-ice'], FILTER_SANITIZE_STRING);

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

	$nonsparking = filter_var($_POST['non-sparking'], FILTER_SANITIZE_STRING);

	$definedheel = filter_var($_POST['defined-heel'], FILTER_SANITIZE_STRING);

	$insulated = filter_var($_POST['insulated'], FILTER_SANITIZE_STRING);

	$stripping = filter_var($_POST['stripping'], FILTER_SANITIZE_STRING);

	$foodprocessing = filter_var($_POST['food-processing'], FILTER_SANITIZE_STRING);

	$oversock = filter_var($_POST['over-sock'], FILTER_SANITIZE_STRING);

	$steeltoe = filter_var($_POST['steel-toe'], FILTER_SANITIZE_STRING);

	$cuttype = filter_var($_POST['cut-type'], FILTER_SANITIZE_STRING);

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
		mysqli_query($con,"INSERT INTO products (model, name, category, upper_style, upper_material, traction, feature_note, description, img_url, img_url2, img_url3, img_url4, features, ice, extreme-ice, snow, oil, fats, soaps, chemicals, liquids, mud, indoor, outdoor, driving, gritted, spiked, non-sparking, defined-heel, insulated, stripping, food-processing, over-sock, steel-toe, low-cut, mid-calf, knee-high, XS, S, M, L, XL, XXL, XXXL, XXXXL,)
		VALUES ('$model', '$name', '$category', '$upper_style', '$upper_material', '$traction', '$feature_note', '$description', '$img_url', '$img_url2', '$img_url4', '$features', '$ice', '$extremeice', '$snow' '$oil', '$fats', '$soaps' '$chemicals', '$liquids', '$mud', '$indoor', '$outdoor', '$driving', '$gritted', '$spiked', '$nonsparking', '$definedheel', '$insulated', '$stripping', '$foodprocessing', '$oversock', '$steeltoe', '$lowcut', '$midcalf', '$kneehigh', '$XS', '$S', '$M', '$L', '$XL', '$XXL', '$XXXL', '$XXXXL')");
}

?>
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
