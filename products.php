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
<!-- //////////////////////// -->
<?php
include ('config.php');
print('<div class="wrap clearfix">');
$query = mysqli_query ($con, 'SELECT * FROM products');

while ($fetch = mysqli_fetch_array($query)) {
print ('<button class="product '.$fetch[traction_versatility].' '.$fetch[easyonoff_security].' '.$fetch[economical_indstrength].' '.$fetch[protectionwarmth_nocoverage].' " data-toggle="collapse" data-target="#'.$fetch[model].'" data-parent="#products" type="button">
			<span class="title">'.$fetch[name].'</span>
			<img src=" '.$fetch[img_url].' " alt="shoe">
		</button>');
};
print('</div>');
$query = mysqli_query ($con, 'SELECT * FROM products');

while ($fetchdetails = mysqli_fetch_array($query)) {
print('<div id="'.$fetchdetails[model].'" class="collapse">
	<div class="detailsInner clearfix">
	<div class="wrap">
		<div class="arrow-up"></div>
		<div id="left">
			<div class="inner">
				<h1>'.$fetchdetails[name].'</h1>
				<p>'.$fetchdetails[description].'</p>
					<div id="sizes">
						<a href="#" class="size"><div class="sizebox">S</div></a>
						<a href="#" class="size"><div class="sizebox">M</div></a>
						<a href="#" class="size"><div class="sizebox">L</div></a>
						<a href="#" class="size"><div class="sizebox">XL</div></a>
						<a href="#" class="expert">CONTACT AN EXPERT ></a>
					</div>
			</div>
		</div>

				<div id="right">
					<div class="inner">
						<img src=" '.$fetchdetails[img_url].' " alt="'.$fetchdetails[name].'">
					</div>
				</div>
	</div>
	</div>
</div>');
};
/*
$query2 = mysqli_query ($con, 'SELECT * FROM products WHERE id >= 8 AND id <=14');
while ($fetch = mysqli_fetch_array($query2)) {
print ('<button class="product '.$fetch[traction_versatility].' '.$fetch[easyonoff_security].' '.$fetch[economical_indstrength].' '.$fetch[protectionwarmth_nocoverage].' " data-toggle="collapse" data-parent="#products" data-target="#'.$fetch[model].' " type="button">
			<span class="title">'.$fetch[name].'</span>
			<img src=" '.$fetch[img_url].' " alt="shoe">
		</button>');
};

$query2 = mysqli_query ($con, 'SELECT * FROM products WHERE id >=8 AND id <=14');

while ($fetchdetails = mysqli_fetch_array($query2)) {
print('<div id="'.$fetchdetails[model].'" class="collapse">
	<div class="detailsInner clearfix">
	<div class="wrap">
		<div class="arrow-up"></div>
		<div id="left">
			<div class="inner">
				<h1>'.$fetchdetails[name].'</h1>
				<p>'.$fetchdetails[description].'</p>
					<div id="sizes">
						<a href="#" class="size"><div class="sizebox">S</div></a>
						<a href="#" class="size"><div class="sizebox">M</div></a>
						<a href="#" class="size"><div class="sizebox">L</div></a>
						<a href="#" class="size"><div class="sizebox">XL</div></a>
						<a href="#" class="expert">CONTACT AN EXPERT ></a>
					</div>
			</div>
		</div>

				<div id="right">
					<div class="inner">
						<img src=" '.$fetchdetails[img_url].' " alt="'.$fetchdetails[name].'">
					</div>
				</div>
	</div>
	</div>
</div>');
};
$query2 = mysqli_query ($con, 'SELECT * FROM products WHERE id >= 15 AND id <=21');
//print list of products.
while ($fetch = mysqli_fetch_array($query2)) {
print ('<button class="product '.$fetch[traction_versatility].' '.$fetch[easyonoff_security].' '.$fetch[economical_indstrength].' '.$fetch[protectionwarmth_nocoverage].' " data-toggle="collapse" data-parent="#products" data-target="#'.$fetch[model].' " type="button">
			<span class="title">'.$fetch[name].'</span>
			<img src=" '.$fetch[img_url].' " alt="shoe">
		</button>');
};

$query2 = mysqli_query ($con, 'SELECT * FROM products WHERE id >=15 AND id <=21');

while ($fetchdetails = mysqli_fetch_array($query2)) {
print('<div id="'.$fetchdetails[model].'" class="collapse">
	<div class="detailsInner clearfix">
	<div class="wrap">
		<div class="arrow-up"></div>
		<div id="left">
			<div class="inner">
				<h1>'.$fetchdetails[name].'</h1>
				<p>'.$fetchdetails[description].'</p>
					<div id="sizes">
						<a href="#" class="size"><div class="sizebox">S</div></a>
						<a href="#" class="size"><div class="sizebox">M</div></a>
						<a href="#" class="size"><div class="sizebox">L</div></a>
						<a href="#" class="size"><div class="sizebox">XL</div></a>
						<a href="#" class="expert">CONTACT AN EXPERT ></a>
					</div>
			</div>
		</div>

				<div id="right">
					<div class="inner">
						<img src=" '.$fetchdetails[img_url].' " alt="'.$fetchdetails[name].'">
					</div>
				</div>
	</div>
	</div>
</div>');
};

$query2 = mysqli_query ($con, 'SELECT * FROM products WHERE id >= 22 AND id <=28');
while ($fetch = mysqli_fetch_array($query2)) {
print ('<button class="product '.$fetch[traction_versatility].' '.$fetch[easyonoff_security].' '.$fetch[economical_indstrength].' '.$fetch[protectionwarmth_nocoverage].' " data-toggle="collapse" data-parent="#products" data-target="#'.$fetch[model].' " type="button">
			<span class="title">'.$fetch[name].'</span>
			<img src=" '.$fetch[img_url].' " alt="shoe">
		</button>');
};

$query2 = mysqli_query ($con, 'SELECT * FROM products WHERE id >=22 AND id <=28');

while ($fetchdetails = mysqli_fetch_array($query2)) {
print('<div id="'.$fetchdetails[model].'" class="collapse">
	<div class="detailsInner clearfix">
	<div class="wrap">
		<div class="arrow-up"></div>
		<div id="left">
			<div class="inner">
				<h1>'.$fetchdetails[name].'</h1>
				<p>'.$fetchdetails[description].'</p>
					<div id="sizes">
						<a href="#" class="size"><div class="sizebox">S</div></a>
						<a href="#" class="size"><div class="sizebox">M</div></a>
						<a href="#" class="size"><div class="sizebox">L</div></a>
						<a href="#" class="size"><div class="sizebox">XL</div></a>
						<a href="#" class="expert">CONTACT AN EXPERT ></a>
					</div>
			</div>
		</div>

				<div id="right">
					<div class="inner">
						<img src=" '.$fetchdetails[img_url].' " alt="'.$fetchdetails[name].'">
					</div>
				</div>
	</div>
	</div>
</div>');
};

print('</div>');*/
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
	$('.traction').addClass('hide1').css('display','none');
} else if (s1val < 10) {
	$('.versatility').addClass('hide1').css('display','none');
} else if (s1val = 10) {

$('.versatility').each(function(){
	if ($(this).hasClass('hide2') || $(this).hasClass('hide3') || $(this).hasClass('hide4')) {
		if ($(this).hasClass('hide1')) {
			$(this).removeClass('hide1');
		};
	} else if ($(this).hasClass('hide1')) {
		$(this).removeClass('hide1').css('display','inline-block');
	};
});

$('.traction').each(function(){
	if ($(this).hasClass('hide2') || $(this).hasClass('hide3') || $(this).hasClass('hide4')) {
		if ($(this).hasClass('hide1')) {
			$(this).removeClass('hide1');
		};
	} else if ($(this).hasClass('hide1')) {
		$(this).removeClass('hide1').css('display','inline-block');
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
	$('.easyonoff').addClass('hide2').css('display','none');
} else if (s2val < 10) {
	$('.security').addClass('hide2').css('display','none');
} else if (s2val = 10) {

$('.security').each(function(){
	if ($(this).hasClass('hide1') || $(this).hasClass('hide3') || $(this).hasClass('hide4')) {
		if ($(this).hasClass('hide2')) {
			$(this).removeClass('hide2');
		};
	} else if ($(this).hasClass('hide2')) {
		$(this).removeClass('hide2').css('display','inline-block');
	};
});

$('.easyonoff').each(function(){
	if ($(this).hasClass('hide1') || $(this).hasClass('hide3') || $(this).hasClass('hide4')) {
		if ($(this).hasClass('hide2')) {
			$(this).removeClass('hide2');
		};
	} else if ($(this).hasClass('hide2')) {
		$(this).removeClass('hide2').css('display','inline-block');
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
	$('.economical').addClass('hide3').css('display','none');
} else if (s3val < 10) {
	$('.indstrength').addClass('hide3').css('display','none');
} else if (s3val = 10) {

$('.indstrength').each(function(){
	if ($(this).hasClass('hide2') || $(this).hasClass('hide1') || $(this).hasClass('hide4')) {
		if ($(this).hasClass('hide3')) {
			$(this).removeClass('hide3');
		};
	} else if ($(this).hasClass('hide3')) {
		$(this).removeClass('hide3').css('display','inline-block');
	};
});

$('.economical').each(function(){
	if ($(this).hasClass('hide2') || $(this).hasClass('hide1') || $(this).hasClass('hide4')) {
		if ($(this).hasClass('hide3')) {
			$(this).removeClass('hide3');
		};
	} else if ($(this).hasClass('hide3')) {
		$(this).removeClass('hide3').css('display','inline-block');
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
	$('.protectionwarmth').addClass('hide4').css('display','none');
} else if (s4val < 10) {
	$('.nocoverage').addClass('hide4').css('display','none');
} else if (s4val = 10) {

$('.nocoverage').each(function(){
	if ($(this).hasClass('hide2') || $(this).hasClass('hide3') || $(this).hasClass('hide1')) {
		if ($(this).hasClass('hide4')) {
			$(this).removeClass('hide4');
		};
	} else if ($(this).hasClass('hide4')) {
		$(this).removeClass('hide4').css('display','inline-block');
	};
});

$('.protectionwarmth').each(function(){
	if ($(this).hasClass('hide2') || $(this).hasClass('hide3') || $(this).hasClass('hide1')) {
		if ($(this).hasClass('hide4')) {
			$(this).removeClass('hide4');
		};
	} else if ($(this).hasClass('hide4')) {
		$(this).removeClass('hide4').css('display','inline-block');
	};
});

}

}
});

////////////////////////

////////////////////////////////////////////////////////
$(document).ready(function(){
	$('.product').click(function()
	{
		var details = $(this).attr('data-target');
		var point_to_pos = $(this).offset().left + 28;
		$('.arrow-up').css({ 'left': point_to_pos});
	});
});

</script>
</body>
</html>