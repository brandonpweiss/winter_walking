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
      <li><a class="hide2 active" href="featured-product.php">PRODUCTS</a></li>
      <li><a href="information.php">COMPANY</a></li>
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
			<li><a href="all-products.php">ALL PRODUCTS</a></li>
			<li><a href="products-lightweight.php">LIGHTWEIGHT</a></li>
			<li><a href="products-over-the-shoe-boots.php">OVER THE SHOE BOOTS</a></li>
			<li><a href="products-indoor-footwear.php" class="active">INDOOR FOOTWEAR</a></li>
			<li><a href="featured-product.php">FEATURED PRODUCT</a></li>
		</ul>
	</nav>
</div>
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
<script type="text/javascript">

////////////////////////

////////////////////////////////////////////////////////
// $(document).ready(function(){
	(function(){
	/*
	$('.product').click(function()
	{
		// var details = $(this).attr('data-target');
		var point_to_pos = $(this).offset().left + 28;
		$('.arrow-up').css({ 'left': point_to_pos});
	});
*/
		$('.product').click(function()
	{
///////////////////////////////////////////////
		var number = $(this).attr('product-number');
		var name = $(this).attr('product-name');
		var description = $(this).attr('product-description');
		var features = $(this).attr('product-features');
		var imgurl = $(this).attr('product-image');
		var ice = $(this).attr('ice');
		var snow = $(this).attr('snow');
		var oil = $(this).attr('oil');
		var fats = $(this).attr('fats');
		var soaps = $(this).attr('soaps');
		var chemicals = $(this).attr('chemicals');
		var liquids = $(this).attr('liquids');
		var mud = $(this).attr('mud');
		var indoor = $(this).attr('indoor');
		var outdoor = $(this).attr('outdoor');
		var driving = $(this).attr('driving');
		var image1 = $(this).attr('image1');
		var image2 = $(this).attr('image2');
		var image3 = $(this).attr('image3');
		var image4 = $(this).attr('image4');


		var s = $(this).attr('s');

		var m = $(this).attr('m');

		var l = $(this).attr('l');

		var xl = $(this).attr('xl');

		var xxl = $(this).attr('xxl');

		var xxxl = $(this).attr('xxxl');

		var xxxxl = $(this).attr('xxxxl');

		var xs = $(this).attr('xs');

		if (xs == 1) {
			xs = '&#x2713;';
		} else if (xs == 0) {
			xs = '&#32;';
		};
				if (s == 1) {
			s = '&#x2713;';
		} else if (s == 0) {
			s = '&#32;';
		};
				if (m == 1) {
			m = '&#x2713;';
		} else if (m == 0) {
			m = '&#32;';
		};
				if (l == 1) {
			l = '&#x2713;';
		} else if (l == 0) {
			l = '&#32;';
		};
				if (xl == 1) {
			xl = '&#x2713;';
		} else if (xl == 0) {
			xl = '&#32;';
		};
				if (xxl == 1) {
			xxl = '&#x2713;';
		} else if (xxl == 0) {
			xxl = '&#32;';
		};
				if (xxxl == 1) {
			xxxl = '&#x2713;';
		} else if (xxxl == 0) {
			xxxl = '&#32;';
		};
				if (xxxxl == 1) {
			xxxxl = '&#x2713;';
		} else if (xxxxl == 0) {
			xxxxl = '&#32;';
		};
		// var currentrow = 'null';
//////////////number visibile items //////////
		var i = 1;
		$('.product').each(function(){
		if ($(this).hasClass('hide1') || $(this).hasClass('hide2') || $(this).hasClass('hide3') || $(this).hasClass('hide4')) {
			$(this).attr('id', 'NULL');
		} else {
			$(this).attr('id',(i));
			i++;
	};
});
////////////// find current row //////////////
		var itemnumber = $(this).attr('id');
	if (i/6 <= 1){
			var currentrow = 1;
			var lastitem = i-1;
	}else if (i/6 > 1 && i/6 <= 2) {
			if (itemnumber <= 6){
			var currentrow = 1;
			var lastitem = 6;
		} else if (itemnumber >= 7 && itemnumber <= 12){
			var currentrow = 2;
			var lastitem = i-1;
		};
	}else if (i/6 > 2 && i/6 <= 3) {
		if (itemnumber <= 6){
			var currentrow = 1;
			var lastitem = 6;
		} else if (itemnumber >= 7 && itemnumber <= 12){
			var currentrow = 2;
			var lastitem = 12;
		} else if (itemnumber >= 13 && itemnumber <= 18){
			var currentrow = 3;
			var lastitem = i-1;
		};
	}else if (i/6 > 3 && i/6 <= 4) {
		if (itemnumber <= 6){
			var currentrow = 1;
			var lastitem = 6;
		} else if (itemnumber >= 7 && itemnumber <= 12){
			var currentrow = 2;
			var lastitem = 12;
		} else if (itemnumber >= 13 && itemnumber <= 18){
			var currentrow = 3;
			var lastitem = 18;
		} else if (itemnumber >= 19 && itemnumber <= 24){
			var currentrow = 4;
			var lastitem = i-1;
		};
	}else if (i/6 > 4 && i/6 <= 5) {
		if (itemnumber <= 6){
			var currentrow = 1;
			var lastitem = 6;
		} else if (itemnumber >= 7 && itemnumber <= 12){
			var currentrow = 2;
			var lastitem = 12;
		} else if (itemnumber >= 13 && itemnumber <= 18){
			var currentrow = 3;
			var lastitem = 18;
		} else if (itemnumber >= 19 && itemnumber <= 24){
			var currentrow = 4;
			var lastitem = 24;
		} else if (itemnumber >= 25 && itemnumber <= 30){
			var currentrow = 5;
			var lastitem = i-1;
		};
	};

/////////////////////////////////////////////
if ($('.details').length){

var detailsrow = $('.details').attr('current-row');

if (currentrow == detailsrow) {
	if ($(this).hasClass('on')) {
	$('.details').slideUp(function() {
    $('.details').remove();
	});
	$(this).removeClass('on');
		} else {
$('.details').remove();
$('.product').removeClass('on');
$(this).addClass('on');
			$('<div class="details" current-row="'+currentrow+'"><div class="detailsInner clearfix"><div class="wrap"><div class="arrow-up"></div><div id="left"><div class="inner"><div class="cta-details-blue"><a class="request"  href="#myModal" role="button" data-toggle="modal">REQUEST A QUOTE &rsaquo;</a><br><a class="request"  href="#myModal" role="button" data-toggle="modal">SPEAK TO AN EXPERT &rsaquo;</a></div><h1>'+name+'</h1><p>'+description+'</p><div class="details-moreinfo"><a href="javascript:void(0);" class="features">Features</a><a href="javascript:void(0);" class="ideal">Ideal Conditions</a><a href="javascript:void(0);" class="sizechart">Size Chart</a></div><div class="moreinfo-section"><div class="features-info">'+features+'</div><div class="ideal-info"><table border="1" bordercolor="#49aaee"><tr><td>Ice</td><td>'+ice+'</td></tr><tr><td>Snow</td><td>'+snow+'</td></tr><tr><td>Oil</td><td>'+oil+'</td></tr><tr><td>fats</td><td>'+fats+'</td></tr><tr><td>Soaps</td><td>'+soaps+'</td></tr><tr><td>Chemicals</td><td>'+chemicals+'</td></tr><tr><td>Liquids</td><td>'+liquids+'</td></tr><tr><td>Mud</td><td>'+mud+'</td></tr><tr><td>Indoor</td><td>'+indoor+'</td></tr><tr><td>Outdoor</td><td>'+outdoor+'</td></tr><tr><td>Driving</td><td>'+driving+'</td></tr></table></div><div class="sizechart-info"><table border="1" bordercolor="#0000"><tr><td>XS</td><td>S</td><td>M</td><td>L</td><td>XL</td><td>XXL</td><td>XXXL</td><td>XXXXL</td></tr><tr><td>'+xs+'</td><td>'+s+'</td><td>'+m+'</td><td>'+l+'</td><td>'+xl+'</td><td>'+xxl+'</td><td>'+xxxl+'</td><td>'+xxxxl+'</td></tr></table></div></div></div></div><div id="right"><div class="inner"><div class="views-info"><div class="main-image"><img src="'+imgurl+'"></div><div class="image1"><img src="'+imgurl+'"></div><div class="image2"><img src="'+image2+'"></div><div class="image3"><img src="'+image3+'"></div><div class="image4"><img src="'+image4+'"></div></div></div></div></div></div></div>').insertAfter('#'+lastitem);
$('.details').show();
		};

} else {
	$('.details').slideUp(function() {
    $('.details').remove();
			$('<div class="details" current-row="'+currentrow+'"><div class="detailsInner clearfix"><div class="wrap"><div class="arrow-up"></div><div id="left"><div class="inner"><div class="cta-details-blue"><a class="request"  href="#myModal" role="button" data-toggle="modal">REQUEST A QUOTE &rsaquo;</a><br><a class="request"  href="#myModal" role="button" data-toggle="modal">SPEAK TO AN EXPERT &rsaquo;</a></div><h1>'+name+'</h1><p>'+description+'</p><div class="details-moreinfo"><a href="javascript:void(0);" class="features">Features</a><a href="javascript:void(0);" class="ideal">Ideal Conditions</a><a href="javascript:void(0);" class="sizechart">Size Chart</a></div><div class="moreinfo-section"><div class="features-info">'+features+'</div><div class="ideal-info"><table border="1" bordercolor="#49aaee"><tr><td>Ice</td><td>'+ice+'</td></tr><tr><td>Snow</td><td>'+snow+'</td></tr><tr><td>Oil</td><td>'+oil+'</td></tr><tr><td>fats</td><td>'+fats+'</td></tr><tr><td>Soaps</td><td>'+soaps+'</td></tr><tr><td>Chemicals</td><td>'+chemicals+'</td></tr><tr><td>Liquids</td><td>'+liquids+'</td></tr><tr><td>Mud</td><td>'+mud+'</td></tr><tr><td>Indoor</td><td>'+indoor+'</td></tr><tr><td>Outdoor</td><td>'+outdoor+'</td></tr><tr><td>Driving</td><td>'+driving+'</td></tr></table></div><div class="sizechart-info"><table border="1" bordercolor="#0000"><tr><td>XS</td><td>S</td><td>M</td><td>L</td><td>XL</td><td>XXL</td><td>XXXL</td><td>XXXXL</td></tr><tr><td>'+xs+'</td><td>'+s+'</td><td>'+m+'</td><td>'+l+'</td><td>'+xl+'</td><td>'+xxl+'</td><td>'+xxxl+'</td><td>'+xxxxl+'</td></tr></table></div></div></div></div><div id="right"><div class="inner"><div class="views-info"><div class="main-image"><img src="'+imgurl+'"></div><div class="image1"><img src="'+imgurl+'"></div><div class="image2"><img src="'+image2+'"></div><div class="image3"><img src="'+image3+'"></div><div class="image4"><img src="'+image4+'"></div></div></div></div></div></div></div>').insertAfter('#'+lastitem);
			$('.details').slideDown();
	});
	$('.product').removeClass('on');
	$(this).addClass('on');
  };

} else {
			$('<div class="details" current-row="'+currentrow+'"><div class="detailsInner clearfix"><div class="wrap"><div class="arrow-up"></div><div id="left"><div class="inner"><div class="cta-details-blue"><a class="request"  href="#myModal" role="button" data-toggle="modal">REQUEST A QUOTE &rsaquo;</a><br><a class="request"  href="#myModal" role="button" data-toggle="modal">SPEAK TO AN EXPERT &rsaquo;</a></div><h1>'+name+'</h1><p>'+description+'</p><div class="details-moreinfo"><a href="javascript:void(0);" class="features">Features</a><a href="javascript:void(0);" class="ideal">Ideal Conditions</a><a href="javascript:void(0);" class="sizechart">Size Chart</a></div><div class="moreinfo-section"><div class="features-info">'+features+'</div><div class="ideal-info"><table border="1" bordercolor="#49aaee"><tr><td>Ice</td><td>'+ice+'</td></tr><tr><td>Snow</td><td>'+snow+'</td></tr><tr><td>Oil</td><td>'+oil+'</td></tr><tr><td>fats</td><td>'+fats+'</td></tr><tr><td>Soaps</td><td>'+soaps+'</td></tr><tr><td>Chemicals</td><td>'+chemicals+'</td></tr><tr><td>Liquids</td><td>'+liquids+'</td></tr><tr><td>Mud</td><td>'+mud+'</td></tr><tr><td>Indoor</td><td>'+indoor+'</td></tr><tr><td>Outdoor</td><td>'+outdoor+'</td></tr><tr><td>Driving</td><td>'+driving+'</td></tr></table></div><div class="sizechart-info"><table border="1" bordercolor="#0000"><tr><td>XS</td><td>S</td><td>M</td><td>L</td><td>XL</td><td>XXL</td><td>XXXL</td><td>XXXXL</td></tr><tr><td>'+xs+'</td><td>'+s+'</td><td>'+m+'</td><td>'+l+'</td><td>'+xl+'</td><td>'+xxl+'</td><td>'+xxxl+'</td><td>'+xxxxl+'</td></tr></table></div></div></div></div><div id="right"><div class="inner"><div class="views-info"><div class="main-image"><img src="'+imgurl+'"></div><div class="image1"><img src="'+imgurl+'"></div><div class="image2"><img src="'+image2+'"></div><div class="image3"><img src="'+image3+'"></div><div class="image4"><img src="'+image4+'"></div></div></div></div></div></div></div>').insertAfter('#'+lastitem);
			$('.details').slideDown();
			$(this).addClass('on');
};
	$('.product').each(function() {
		if ($(this).hasClass('on')) {
			$(this).children('img').css('-moz-box-shadow','0 0 2px 4px #4fd2e8').css('-webkit-box-shadow','0 0 2px #4fd2e8').css('box-shadow','0 0 2px 4px #4fd2e8');
		} else {
			$(this).children('img').attr('style','');
		};
	});

		var point_to_pos = $(this).offset().left + 28;
		$('.arrow-up').css({ 'left': point_to_pos});

	$(".features").click(function()
	{
			$(".ideal-info").hide();
			$(".sizechart-info").hide();

			$(".features-info").show();
	});
	$(".ideal").click(function()
	{
			$(".features-info").hide();
			$(".sizechart-info").hide();

			$(".ideal-info").show();
	});
	$(".sizechart").click(function()
	{
			$(".ideal-info").hide();
			$(".features-info").hide();

			$(".sizechart-info").show();
	});

	$(".image1").click(function()
	{
		var img1 = $(this).html();
		$(".main-image").html(img1);
	});
	$(".image2").click(function()
	{
		var img2 = $(this).html();
		$(".main-image").html(img2);
	});
	$(".image3").click(function()
	{
		var img3 = $(this).html();
		$(".main-image").html(img3);
	});
	$(".image4").click(function()
	{
		var img4 = $(this).html();
		$(".main-image").html(img4);
	});


});
})();
</script>
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
<script>
	$(".show-filter").click(function()
	{
		$("#filter").slideToggle('fast');
		$("#filter").toggleClass("filter-open");

		if ( $("#filter").hasClass("filter-open") ) {
			$(".show-filter").html("&#x25B2;");
		} else {
			$(".show-filter").html("&#x25BC;");
		};
	});
</script>
</body>
</html>
