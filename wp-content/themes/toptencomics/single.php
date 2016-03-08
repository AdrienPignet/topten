<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>
<span class="bg-dechire"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/misc/bg-dechire.png"></span>
<div class="row" role="main">

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<article class="blog-fullpost" id="post-<?php the_ID(); ?>">


		<?php do_action( 'foundationpress_post_before_entry_content' ); ?>
		<div class="entry-content">
		<?php if ( has_post_thumbnail() ) : ?>

			<div class="row">
				<div class="small-12 medium-6 columns illustration">
					<?php the_post_thumbnail( '', array('class' => 'th') ); ?>
				</div>
				<div class="small-12 medium-6 columns">
					<h2 class="entry-title"><?php the_title(); ?></h2>
				</div>
			</div>
			<div class="small-12 columns content">
				<?php the_content(); ?>
			</div>
		<?php endif; ?>
		</div>
			<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
			<p><?php the_tags(); ?></p>
	</article>
<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>
</div>
<?php get_footer(); ?>
