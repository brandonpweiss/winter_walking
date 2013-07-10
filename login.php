<?php
if ( isset( $_POST['loginsubmit'] ) )
{
include('config.php');

$user=$_POST['username'];
$pass=$_POST['password'];

if ($user == $loginusername && $pass == $loginpassword){
	session_register("user");
	session_register("pass");
	header("location:add-product.php");
	}
	else {
	echo "Wrong Username or Password";
	};
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
</header>
<?php include('header.php');?>
</div>

<div class="wrap clearfix">

<form style="margin: 200px auto; width:220px;" method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>">
<input type="text" name="username" placeholder="username">
<input type="password" name="password" placeholder="password">
<input type="submit" name="loginsubmit" id="submit1" value="Sign In">
</form>

</div>
<footer>
	<div class="wrap clearfix">

	</div>
</footer>
</body>
</html>