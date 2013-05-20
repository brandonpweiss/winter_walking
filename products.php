<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Winter Walking Products</title>
	<link rel="stylesheet" href="slider.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="normalize.css">
	<link rel="stylesheet" href="style.css">
	<script src="jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/bootstrap-slider.js"></script>
</head>
<body>
<?php include('header.php');?>
<div class="divider"></div>
<section id="top" class="clearfix">
<div class="wrap" class="clearfix">
	<div id="instructions">
	<div class="inner">
		<div class="winter">WINTER WALKING</div>
		<h1>FIND A MATCH</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti ex corporis rem. Optio, temporibus, odit, dignissimos possimus voluptatibus reiciendis pariatur porro atque repellat iusto voluptas molestiae fugit illo quasi quisquam commodi velit similique voluptate error!</p><br>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate, numquam facilis libero quas eaque voluptatibus laboriosam distinctio similique eligendi maxime. Natus, nostrum amet culpa voluptas veritatis illo velit ipsa optio reprehenderit odit quae.</p>
	</div>
	</div>
	<div id="matrix">
		<div class="inner">
		<div class="winter" id="feature">FEATURE MATRIX</div>
		<div class="category">


			<input class="span2 slider" id="s1" value="" data-slider-min="0" data-slider-max="20" data-slider-step="2" data-slider-value="10" data-slider-orientation="horizontal" data-slider-selection="after"data-slider-tooltip="hide" data-slider-handle="triangle">


			<div class="options">
				<div class="option1">TRACTION</div>
				<div class="option2">VERSATILITY</div>
			</div>
		</div>
		<div class="category">
			<input class="span2 slider" id="s2" value="" data-slider-min="0" data-slider-max="20" data-slider-step="2" data-slider-value="10" data-slider-orientation="horizontal" data-slider-selection="after"data-slider-tooltip="hide" data-slider-handle="triangle">

			<div class="options">
				<div class="option1">EASY ON/OFF</div>
				<div class="option2">SECURITY</div>
			</div>
		</div>
		<div class="category">
			<input class="span2 slider" id="s3" value="" data-slider-min="0" data-slider-max="20" data-slider-step="2" data-slider-value="10" data-slider-orientation="horizontal" data-slider-selection="after"data-slider-tooltip="hide" data-slider-handle="triangle">

			<div class="options">
				<div class="option1">ECONOMICAL</div>
				<div class="option2">INDUSTRIAL STRENGTH</div>
			</div>
		</div>
		<div class="category">
			<input class="span2 slider" id="s4" value="" data-slider-min="0" data-slider-max="20" data-slider-step="2" data-slider-value="10" data-slider-orientation="horizontal" data-slider-selection="after"data-slider-tooltip="hide" data-slider-handle="triangle">

			<div class="options">
				<div class="option1">SHOE PROTECTION/WARMTH</div>
				<div class="option2">NO COVERAGE</div>
			</div>
		</div>
		</div>
	</div>
</div>
</section>
<!-- /////////////////////// -->
<section id="products">
<?php
$i = 0;
$a = 7;
$b = 1;
$c = 0;
include ('config.php');

$query = mysqli_query ($con, 'SELECT * FROM products');

while ($fetch = mysqli_fetch_array($query)) {
if ($c == 0) {
print('<div class="wrap clearfix">');
};
print ('<button class="product '.$fetch[traction_versatility].' '.$fetch[easyonoff_security].' '.$fetch[economical_indstrength].' '.$fetch[protectionwarmth_nocoverage].' " product-number="'.$fetch[model].'" product-description="'.$fetch[description].'" product-name="'.$fetch[name].'" product-image="'.$fetch[img_url].'" product-row="'.$b.'" type="button">
			<span class="title">'.$fetch[name].'</span>
			<img src=" '.$fetch[img_url].' " alt="shoe">
		</button>');
$i++;
$c++;
// };

if ($i == $a) {
print('</div>');
print('<div class="details" id="row'.$b.'" product-row="'.$b.'"></div>');
$a = $a + 7;
$b++;
$c = 0;
};

};
mysqli_close($con);
?>
</section>
<?php include('footer.php');?>
<script type="text/javascript">

///////////SLIDER 1//////////////
$('#s1').slider({
          formater: function(value) {
            var s1val = value;
if (s1val > 10) {
	$('.traction').addClass('hide1').fadeOut('slow','swing');
} else if (s1val < 10) {
	$('.versatility').addClass('hide1').fadeOut('slow','swing');
} else if (s1val = 10) {

$('.versatility').each(function(){
	if ($(this).hasClass('hide2') || $(this).hasClass('hide3') || $(this).hasClass('hide4')) {
		if ($(this).hasClass('hide1')) {
			$(this).removeClass('hide1');
		};
	} else if ($(this).hasClass('hide1')) {
		$(this).removeClass('hide1').fadeIn('slow','swing');
	};
});

$('.traction').each(function(){
	if ($(this).hasClass('hide2') || $(this).hasClass('hide3') || $(this).hasClass('hide4')) {
		if ($(this).hasClass('hide1')) {
			$(this).removeClass('hide1');
		};
	} else if ($(this).hasClass('hide1')) {
		$(this).removeClass('hide1').fadeIn('slow','swing');
};
});

}

}
});

///////////SLIDER 2//////////////
$('#s2').slider({
          formater: function(value) {
            var s2val = value;
if (s2val > 10) {
	$('.easyonoff').addClass('hide2').fadeOut('slow','swing');
} else if (s2val < 10) {
	$('.security').addClass('hide2').fadeOut('slow','swing');
} else if (s2val = 10) {

$('.security').each(function(){
	if ($(this).hasClass('hide1') || $(this).hasClass('hide3') || $(this).hasClass('hide4')) {
		if ($(this).hasClass('hide2')) {
			$(this).removeClass('hide2');
		};
	} else if ($(this).hasClass('hide2')) {
		$(this).removeClass('hide2').fadeIn('slow','swing');
	};
});

$('.easyonoff').each(function(){
	if ($(this).hasClass('hide1') || $(this).hasClass('hide3') || $(this).hasClass('hide4')) {
		if ($(this).hasClass('hide2')) {
			$(this).removeClass('hide2');
		};
	} else if ($(this).hasClass('hide2')) {
		$(this).removeClass('hide2').fadeIn('slow','swing');
	};
});

}

}
});

///////////SLIDER 3//////////////
$('#s3').slider({
          formater: function(value) {
            var s3val = value;
if (s3val > 10) {
	$('.economical').addClass('hide3').fadeOut('slow','swing');
} else if (s3val < 10) {
	$('.indstrength').addClass('hide3').fadeOut('slow','swing');
} else if (s3val = 10) {

$('.indstrength').each(function(){
	if ($(this).hasClass('hide2') || $(this).hasClass('hide1') || $(this).hasClass('hide4')) {
		if ($(this).hasClass('hide3')) {
			$(this).removeClass('hide3');
		};
	} else if ($(this).hasClass('hide3')) {
		$(this).removeClass('hide3').fadeIn('slow','swing');
	};
});

$('.economical').each(function(){
	if ($(this).hasClass('hide2') || $(this).hasClass('hide1') || $(this).hasClass('hide4')) {
		if ($(this).hasClass('hide3')) {
			$(this).removeClass('hide3');
		};
	} else if ($(this).hasClass('hide3')) {
		$(this).removeClass('hide3').fadeIn('slow','swing');
	};
});

}

}
});

///////////SLIDER 4//////////////
$('#s4').slider({
          formater: function(value) {
            var s4val = value;
if (s4val > 10) {
	$('.protectionwarmth').addClass('hide4').fadeOut('slow','swing');
} else if (s4val < 10) {
	$('.nocoverage').addClass('hide4').fadeOut('slow','swing');
} else if (s4val = 10) {

$('.nocoverage').each(function(){
	if ($(this).hasClass('hide2') || $(this).hasClass('hide3') || $(this).hasClass('hide1')) {
		if ($(this).hasClass('hide4')) {
			$(this).removeClass('hide4');
		};
	} else if ($(this).hasClass('hide4')) {
		$(this).removeClass('hide4').fadeIn('slow','swing');
	};
});

$('.protectionwarmth').each(function(){
	if ($(this).hasClass('hide2') || $(this).hasClass('hide3') || $(this).hasClass('hide1')) {
		if ($(this).hasClass('hide4')) {
			$(this).removeClass('hide4');
		};
	} else if ($(this).hasClass('hide4')) {
		$(this).removeClass('hide4').fadeIn('slow','swing');
	};
});

}

}
});

////////////////////////

////////////////////////////////////////////////////////
$(document).ready(function(){
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
		var row = $(this).attr('product-row');
		var number = $(this).attr('product-number');
		var name = $(this).attr('product-name');
		var description = $(this).attr('product-description');
		var imgurl = $(this).attr('product-image');

		var openRow = $('.open').attr('product-row');

		if ($(this).hasClass('clicked'))
		{
			console.log("close same button");
		$('.details').slideUp();
		$(this).removeClass('clicked');
		}
		else if ($('.product').hasClass('clicked'))
		{
			if (row == openRow) {
				console.log("open another button in same row");
				console.log(row , openRow);
				$('.clicked').removeClass('clicked');
				$('.open').removeClass('open');

				$('#row'+row+'').html('<div class="detailsInner clearfix"><div class="wrap"><div class="arrow-up"></div><div id="left"><div class="inner"><h1>'+name+'</h1><p>'+description+'</p><div id="sizes"><a href="#" class="size"><div class="sizebox">S</div></a><a href="#" class="size"><div class="sizebox">M</div></a><a href="#" class="size"><div class="sizebox">L</div></a><a href="#" class="size"><div class="sizebox">XL</div></a><a href="#" class="expert">CONTACT AN EXPERT ></a></div></div></div><div id="right"><div class="inner"><img src="'+imgurl+'"></div></div></div></div>');

				$(this).addClass('clicked');
				$('#row'+row+'').addClass('open');
			} else {
				console.log("open another button in diff row");
				console.log(row , openRow);
				$('.open').slideUp().removeClass('open');
				$('.clicked').removeClass('clicked');
				$('#row'+row+'').html('<div class="detailsInner clearfix"><div class="wrap"><div class="arrow-up"></div><div id="left"><div class="inner"><h1>'+name+'</h1><p>'+description+'</p><div id="sizes"><a href="#" class="size"><div class="sizebox">S</div></a><a href="#" class="size"><div class="sizebox">M</div></a><a href="#" class="size"><div class="sizebox">L</div></a><a href="#" class="size"><div class="sizebox">XL</div></a><a href="#" class="expert">CONTACT AN EXPERT ></a></div></div></div><div id="right"><div class="inner"><img src="'+imgurl+'"></div></div></div></div>');
				$('#row'+row+'').addClass('open').slideDown();
				$(this).addClass('clicked');
			};
		}
		else
		{
			console.log("open same button");
			$('#row'+row+'').html('<div class="detailsInner clearfix"><div class="wrap"><div class="arrow-up"></div><div id="left"><div class="inner"><h1>'+name+'</h1><p>'+description+'</p><div id="sizes"><a href="#" class="size"><div class="sizebox">S</div></a><a href="#" class="size"><div class="sizebox">M</div></a><a href="#" class="size"><div class="sizebox">L</div></a><a href="#" class="size"><div class="sizebox">XL</div></a><a href="#" class="expert">CONTACT AN EXPERT ></a></div></div></div><div id="right"><div class="inner"><img src="'+imgurl+'"></div></div></div></div>');
			$('#row'+row+'').addClass('open').slideDown();
			$(this).addClass('clicked');
		};

		var point_to_pos = $(this).offset().left + 28;
		$('.arrow-up').css({ 'left': point_to_pos});
	});

});

</script>
</body>
</html>