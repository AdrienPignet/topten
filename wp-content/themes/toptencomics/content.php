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

<div class="small-12 medium-4 columns blog" id="post-<?php the_ID(); ?>" <?php post_class('blogpost-entry'); ?>>
	<article>
		<?php if ( has_post_thumbnail() ) {
    			the_post_thumbnail();
			  }
		?>
		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<?php the_excerpt(); ?>
	<a class="readmore" href="<?php the_permalink(); ?>">Savoir la suite</a>
	</article>
</div>
