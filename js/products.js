$(".request1").click(function()
	{
		$("#modelNumber").val(number);
		$("#modelName").val(name);
	});

$(".request2").click(function()
	{
		$("#modelName2").val(name);
		$("#modelDescription").val(description);
		$("#modelFeatures").val(features);
		$("#modelImage").val(imgurl);
		$("#modelIC1").val(ice);
		$("#modelIC2").val(snow);
		$("#modelIC3").val(oil);
		$("#modelIC4").val(fats);
		$("#modelIC5").val(soaps);
		$("#modelIC6").val(chemicals);
		$("#modelIC7").val(liquids);
		$("#modelIC8").val(mud);
		$("#modelIC9").val(indoor);
		$("#modelIC10").val(outdoor);
		$("#modelIC11").val(driving);
		$("#modelS1").val(xs);
		$("#modelS2").val(s);
		$("#modelS3").val(m);
		$("#modelS4").val(l);
		$("#modelS5").val(xl);
		$("#modelS6").val(xxl);
		$("#modelS7").val(xxxl);
		$("#modelS8").val(xxxxl);
	});

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
$(".image5").click(function()
	{
		var img5 = $(this).html();
		$(".main-image").html(img5);
	});
$(".image6").click(function()
	{
		var img6 = $(this).html();
		$(".main-image").html(img6);
	});