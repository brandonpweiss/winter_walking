<?php
/**
 * The template for displaying Category pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

<style>
	footer.entry-meta{
		color: #FFFFFF;
padding: none;
font-family: karbonmedium;
letter-spacing: 1px;
line-height: 20px;
clear:both;
background: none;
padding: 0px 0px 60px 0px;
	}
	h1.category-title{
	font-family: nexabold !important;
	color: #2496e6 !important;
	letter-spacing: 3px !important;
	font-size: 20px !important; 
	}
	 .content{
		margin-top: 50px;
		margin-bottom:50px;
	}
	article header{
		background: none;
	}
	article h1 a{
		color: #333333 !important;
		text-transform: uppercase;
	}
	#home p{
		display:block !important;
	}
	#submit{
		text-transform: uppercase;
		display:block;
		margin-top: 20px;
	}
	</style>
<section id="home" class="clearfix">
		<div class="content clearfix">

		<?php if ( have_posts() ) : ?>
			<header class="archive-header">
				<h1 class="archive-title"><?php printf( __( 'Category Archives: %s', 'twentythirteen' ), single_cat_title( '', false ) ); ?></h1>

				<?php if ( category_description() ) : // Show an optional category description ?>
				<div class="archive-meta"><?php echo category_description(); ?></div>
				<?php endif; ?>
			</header><!-- .archive-header -->

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php twentythirteen_paging_nav(); ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

	</div>
</section>

<?php get_footer(); ?>