<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>About Winter Walking</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="slider.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="normalize.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="home.css">
	<script src="jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/bootstrap-slider.js"></script>
</head>
<body>
	<div class="tops">
	<div id="white">
	<div id="logobox">
   <a href="index.php"><img id="logo" src="img/logo.png" alt="Winter Walking we dont just make ice cleats, we perfect them"></a>
    <div id="tagline">WE DONT JUSTMAKE ICE CLEATS, WE PERFECT THEM</div>
  </div>
  </div>
<?php include('header.php');?>
</div>
<section id="facts">
	<div class="outer">
	<div class="wrap clearfix">
	<div id="inner">
<div class="winter">WE TAKE SLIPS AND FALLS</div>
<h1>EXTREMELY<br>SERIOUSLY</h1>
<p>Winter Walking is North America's leading manufacturer of All-Traction™ Footwear.  We've been improving worker's safety with the world's largest organizations for over 30 years, earning an unparalleled expertise in the nuances of accident prevention.  Whether indoors or outdoors, ice or snow, oil, grease, or chemicals, Winter Walking has studied all the variables to provide you with the best solutions.</p>

<p>From Non-Slip Shoes to All-Traction™ Footwear, Ice Cleats to Ice Creepers, we're as obsessed with creating the most effective products as you are with finding them.  Your search ends here - <a href="#myModal" class="speak" role="button" data-toggle="modal">speak to our experts today.</a></p>

<h3>RESEARCH & DEVELOPMENT</h3>
<p>Winter Walking didn't become the largest and oldest manufacturer of All-Traction™ Footwear by chance.  Every product in our line was created through years of research and development with you, the end user.  Our designs have proven to be so uniquely beneficial that we have been awarded several dozen patents by the United States Patent and Trademark Office in Alexandria, Virginia.</p>

<a target="_blank"  href="history.pdf">Download The History of Ice Cleats</a>

<h3>CUSTOMER SERVICE & INVENTORY</h3>
<p>Winter Walking has spent over 30 years reducing workplace slips and falls though the implementation of All-Traction™ Footwear.  No one knows as much about accident prevention as our team of experts, and no one will work harder to find the perfect solution for the unique challenges in your workplace.  Once we've identified the right solution, our massive inventory levels enable us to get the product you need out the door and in your hands while you still need it — not months later.</p>  

<a target="_blank" href="guide.pdf">Download The Ice Cleats Selection Guide</a>

<h3>SAFETY & FINANCIAL BENEFITS</h3>
<p>According to the Bureau of Labor Statistics, nearly 15% of all lost workday accidents are due to slips, trips, and falls.  When assessing the cost of a lost workday accident, we commonly identify "direct costs" first, including workers’ compensation claims and up-front medical costs.  However, the true cost of a lost workday accident becomes most apparent when considering the "indirect costs" such as lost/decreased productivity, replacement hiring, overtime pay, administrative and managerial costs, etc.  This so-called "iceberg effect" is why the National Safety Council estimates the current total cost for each lost workday at $34,000!  As most companies will see between 2-5% of their workforce experience lost workdays due to accidental slips and falls, these massive costs will have a drastic effect on the businesses bottom line.</p>

<p>With over a dozen products in our line specifically designed to increase traction and reduce slips and falls, Winter Walking can help you to contain these costs.</p>

<a href="#myModal" role="button" data-toggle="modal">Calculate Your Potential Savings</a>


</div>
	</div>
	</div>
</section>
<?php include('footer.php');?>
	<script src="scroll.js"></script>
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