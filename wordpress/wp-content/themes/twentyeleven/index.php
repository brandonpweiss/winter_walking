	

<section id="home" class="clearfix">
		<div class="content clearfix">
			<?php if ( have_posts() ) : ?>


				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', get_post_format() ); ?>

				<?php endwhile; ?>

				<?php twentyeleven_content_nav( 'nav-below' ); ?>

			<?php else : ?>

				<article id="post-0" class="post no-results not-found">

					<div class="entry-content">
						<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyeleven' ); ?></p>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->
			<?php endif; ?>
		</div>
		</section>
		
<footer>
	<div class="wrap clearfix">
		<div class="column" id="column1">
			<div class="columninner">
		<h2>INFORMATION</h2>

<div class="bold">Winter Walking</div>

<ul>
<li>Winter Walking</li>
<li>400 Babylon Road</li>
<li>Horsham, PA 19044</li>
</ul>
<ul>
<li>P 1-888-NO-SLIPS (667-5477)</li>
<li>F 1-215-441-9642</li>
<li>E <a href="mailto:info@winterwalking.com">info@winterwalking.com</a></li>
<li>Connect on <a href="http://www.linkedin.com/company/2453879?trk=vsrp_companies_res_name&trkInfo=VSRPsearchId%3A1622272341383685259121%2CVSRPtargetId%3A2453879%2CVSRPcmpt%3Aprimary">LinkedIn</a></li>
</ul>

<p class="copyright">All content copyright 2013 © Winter Walking.  Do not reuse or reproduce without permission.</p>

</div>
</div>
<div class="column" id="column2">
	<div class="columninner">
<h2>HOW TO ORDER</h2>
<ul>
<li><a href="#myModal" role="button" data-toggle="modal">&#62;REQUEST A PRODUCT QUOTE</a></li>
<li><a href="#myModal2" role="button" data-toggle="modal">&#62;REQUEST A PRODUCT INFORMATION KIT</a></li>
<li><a href="#myModal4" role="button" data-toggle="modal">&#62;CONTACT AN EXPERT</a></li>
</ul>

<p>For individual purchases and retail customers,
please visit <a href="http://www.wintercleats.com" target="_blank">www.wintercleats.com</a></p>
</div>
</div>
<a name="footer"></a>
<div class="column" id="column3">
<div class="columninner">
<img src="http://www.winterwalking.com/img/wwbiglogo.png" alt="Winter Walking">
<!-- <div class="contactform">
<form method="post" action="$_SERVER['PHP_SELF'];?>">
	<div id="line1">
	<input type="text" name="firstName" placeholder="FIRST NAME">
	<input type="text" name="lastName" placeholder="LAST NAME">
	</div>
	<input type="text" name="company" placeholder="COMPANY NAME">
	<input type="text" name="phoneNumber" placeholder="PHONE NUMBER">
	<input type="email" name="email" placeholder="EMAIL ADDRESS">
	<input type="text" name="comments" placeholder="COMMENTS">
	<input class="send" type="submit" name="footer-contact-submit" value="SEND">
</form>
</div> -->
</div>
</div>

	</div>

</footer>

	<script src="http://www.winterwalking.com/scroll.js"></script>
	<script src="http://www.winterwalking.com/js/stickynav.js"></script>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-44403652-1', 'winterwalking.com');
  ga('send', 'pageview');

</script>