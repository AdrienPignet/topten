<?php
/*
Template Name: Contact Page test
*/
?>
<?php
/**
 * The template for displaying pages
 * The template name: Page Contact
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

 get_header(); ?>
<div class="small-12 columns map-topten"></div>
 <div role="main" class="contact-boutique">
 <?php do_action( 'foundationpress_before_content' ); ?>
 <?php while ( have_posts() ) : the_post(); ?>
   <article  class="row" id="post-<?php the_ID(); ?>">
           <h2 class="small-12 columns text-center"><?php the_title(); ?>
            <span class="souligne"></span></h2>

       <?php do_action( 'foundationpress_page_before_entry_content' ); ?>
       <div class="entry-content small-12 medium-8 columns">
           <?php the_content(); ?>
       </div>
       <div class="small-12 medium-4 columns text-center info-boutique">
           <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/contact/boutique.jpg" alt="" />
           <p>
            Gotham, 9 rue des super héros<br/>
            Du lundi au vendredi de <strong>09h00</strong> à <strong>18h00</strong><br/>
            Le samedi de <strong>08h30</strong> à <strong>12h00</strong><br/>
            jarvis<strong>@</strong>topten.com<br/>
            <strong>03 88 78 78 43</strong><br/>
           </p>
       </div>
   </article>
 <?php endwhile;?>
 <!--<?php do_action( 'foundationpress_after_content' ); ?>-->
 </div>

 <?php get_footer(); ?>
