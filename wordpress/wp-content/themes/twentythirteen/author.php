<?php
/**
 * The template for displaying Author archive pages
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
	h1.archive-title{
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

			<?php
				/*
				 * Queue the first post, that way we know what author
				 * we're dealing with (if that is the case).
				 *
				 * We reset this later so we can run the loop
				 * properly with a call to rewind_posts().
				 */
				the_post();
			?>

			<header class="archive-header">
				<h1 class="archive-title"><?php printf( __( 'All posts by %s', 'twentythirteen' ), '<span class="vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a></span>' ); ?></h1>
			</header><!-- .archive-header -->

			<?php
				/*
				 * Since we called the_post() above, we need to
				 * rewind the loop back to the beginning that way
				 * we can run the loop properly, in full.
				 */
				rewind_posts();
			?>

			<?php if ( get_the_author_meta( 'description' ) ) : ?>
				<?php get_template_part( 'author-bio' ); ?>
			<?php endif; ?>

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