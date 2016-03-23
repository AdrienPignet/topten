<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<div class="small-12 medium-6 large-6 xlarge-3 columns blog-full" id="post-<?php the_ID(); ?>" <?php post_class('blogpost-entry'); ?>>
	<article>
		<?php if ( has_post_thumbnail() ) {
    			the_post_thumbnail();
			  }
		?>
		<aside id="flecheNoire"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/misc/flechenoire.png"></aside>
		<span>
			<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<?php the_excerpt(); ?>
			<a class="readmore" href="<?php the_permalink(); ?>">Savoir la suite<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/misc/readmore.png"></a>
		</span>
	</article>
</div>
