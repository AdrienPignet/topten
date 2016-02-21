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

<div class="small-12 medium-4 columns" id="post-<?php the_ID(); ?>" <?php post_class('blogpost-entry'); ?>>
		<img src="http://placehold.it/350x150">
		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<?php the_content( __( 'Continue reading...', 'foundationpress' ) ); ?>
	<a class="readmore" href="<?php the_permalink(); ?>">Savoir la suite</a>
</div>
