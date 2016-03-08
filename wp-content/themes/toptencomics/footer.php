<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

			<footer class="footer" id="footer">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.svg" alt="logo" width="80" height="auto"/></a>
				<p>© TOPTEN COMICS - 2016</p>
				<span class="on-right"><a href="#"> / Mentions légales</a></span>
				<span class="on-right"><?php echo do_shortcode( '[contact-form-7 id="40" title="Inscription Newsletter"]' ); ?></span>
			</footer>


		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
		</div><!-- Close off-canvas wrapper inner -->
	</div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
<?php endif; ?>



<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>


<script type='text/javascript' id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.2.11.0.js'><\/script>".replace("HOST", location.hostname));
//]]></script>
<script>

</script>
</body>
</html>
