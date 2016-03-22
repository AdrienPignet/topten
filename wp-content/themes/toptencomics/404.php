<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>
<span class="bg-dechire"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/misc/bg-dechire.png"></span>
	<div class="max-404"><h2 class="punchline-404">Vous avez fait planté le cérébro ! <br />Mais on est sympa, on vous laisse une deuxième chance !</h2>
	<span class="souligne"></span>
</div>
	<div class="max-404"><div class="custom-search"><?php get_search_form(); ?></div></div>
	<div class="max-404"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/mascotte404.svg" alt="" /></div>

<?php get_footer(); ?>
