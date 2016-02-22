<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div role="main">
	<!--<article class="main-content">
	<?php if ( have_posts() ) : ?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', get_post_format() ); ?>
		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; // End have_posts() check. ?>

		<?php /* Display navigation to next/previous pages when applicable */ ?>
		<?php if ( function_exists( 'foundationpress_pagination' ) ) { foundationpress_pagination(); } else if ( is_paged() ) { ?>
			<nav id="post-nav">
				<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
				<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
			</nav>
		<?php } ?>

	</article>-->
	<!-- HOME -->
	<section class="home row">
		<h1><?php echo get_bloginfo( 'description' ); ?></h1>
			<form method="post" action="#">
				<fieldset>
				<label for="search">Recherche</label>
				<input type="text" name="recherche" id="recherche" placeholder="Tu recherches un comics, une série, un héros ?"/>
				</fieldset>
			</form>
			<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>topten/register/">s'inscrire</a></p>
			<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>topten/login/">se connecter</a></p>
	</section>
	<!-- HOME - SLIDER -->
	<section class="slider row">

	</section>
	<!-- HOME - BLOG -->
	<section class="blog row">
		<?php if ( have_posts() ) : ?>
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php else : ?>
				<?php get_template_part( 'content', 'none' ); ?>

			<?php endif;?>
	</section>
</div>

<?php get_footer(); ?>
