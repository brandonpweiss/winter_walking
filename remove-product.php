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
$query = mysqli_query ($con, "SELECT * FROM products ORDER BY name ASC");
$numrows = mysqli_num_rows($query);

$products_to_delete = filter_var($_POST['1'], FILTER_SANITIZE_STRING);
$products_to_delete .= " ";

$a = 2;
$numrows = $numrows + 1;

while ($a < $numrows) {
$products_to_delete .= filter_var($_POST[$a], FILTER_SANITIZE_STRING);
$products_to_delete .= " ";
$a++;
}


$sql = "DELETE FROM products WHERE id = '$products_to_delete'";

if (!mysqli_query($con,$sql))
			{
				die('There was an issue removing these product(s). Error: ' . mysqli_error($con));
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
	#add-product-form .product-form-section .field-wrap {
		width: 48%;
	}
	form label {
		margin-left: 10px;
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
			<a href="add-product.php" style="float:left; padding:0;">ADD PRODUCT/S</a>
			<a href="signout.php" style="float:right; padding:0;">SIGN OUT</a>
		</div>
	</nav>
</header>
<?php include('header.php');?>
</div>

<div class="wrap clearfix">
<form method="post" id="add-product-form" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" enctype="multipart/form-data">

<div class="product-form-section">
<span>Check the product(s) you would like to remove:</span>
<?php

$query = mysqli_query ($con, "SELECT * FROM products ORDER BY name ASC");
$result = mysqli_num_rows($query);
$i = 1;
while ($fetch = mysqli_fetch_array($query)) {

print ('<div class="field-wrap">');
print ('<input type="checkbox" name="'.$i.'" value="'.$fetch[id].'">');
print ('<label for="'.$i.'">'.$fetch[model].' | '.$fetch[name].' | '.$fetch[upper_style].'</label>');
print ('</div>');

$i++;
}

?>
<input type="submit" name="submit" class="submit" value="Submit">
</div>
</form>
</div>

<footer>
	<div class="wrap clearfix">

	</div>
</footer>
</body>
</html>