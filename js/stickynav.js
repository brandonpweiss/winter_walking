var nav_pos = $('nav').offset().top;
var i = 0;
var sticky_nav = function()
{
	var top_pos = $(window).scrollTop();
	if ( (top_pos > nav_pos) && ($(window).width() > 640) )
	{
		$('#sticky_navigation').css({ 'position': 'fixed', 'top':0, 'left':0, 'z-index':999});
		$('.navLogo').css({ 'visibility': 'visible' });
	}
	else
	{
		$('#sticky_navigation').css({ 'position': 'relative', 'top':0, 'left':0 });
		$('.navLogo').css({ 'visibility': 'hidden' });

	}
};

$(window).scroll(function()
{
	if (i <= 0)
	{
		nav_pos = $('nav').offset().top - 0;
		i = 1;
	}
	sticky_nav();
});

$(window).resize(function()
{
		nav_pos = $('nav').offset().top - 0;
});