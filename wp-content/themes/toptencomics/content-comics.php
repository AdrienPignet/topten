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

<div class="small-6 medium-4 large-2 columns comics-custom" id="post-<?php the_ID(); ?>" <?php post_class('blogpost-entry'); ?>>
	<article>
		<?php if ( has_post_thumbnail() ) {
    			the_post_thumbnail();
			  }
		?>
		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	</article>
</div>
