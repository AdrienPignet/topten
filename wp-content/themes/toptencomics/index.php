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
	<section class="home-first row">
		<section class="background-home">
			<div class="owl-carousel" id="carousel-background">
			            <div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/comics/cover01.jpg" alt="cover01"></div>
			            <div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/comics/cover02.jpg" alt="cover02"></div>
			            <div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/comics/cover03.jpg" alt="cover03"></div>
						<div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/comics/cover04.jpg" alt="cover04"></div>
						<div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/comics/cover05.jpg" alt="cover05"></div>
						<div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/comics/cover06.jpg" alt="cover06"></div>
						<div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/comics/cover07.jpg" alt="cover07"></div>
						<div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/comics/cover08.jpg" alt="cover08"></div>
						<div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/comics/cover09.jpg" alt="cover09"></div>
						<div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/comics/cover10.jpg" alt="cover10"></div>
			</div>
		</section>
		<section class="background-filtre"></section>
		<article class="custom-head">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/mascotte/mascotte-home.png" alt="Mascotte" />
			<h1><?php if ( is_user_logged_in()){ echo 'Bonjour <span style="color: #eb212e"> '.$current_user->user_login.'</span><br/>';}?> <?php echo get_bloginfo( 'description' ); ?></h1>
				<div class="custom-search"><?php get_search_form(); ?></div>
				<?php
					if ( is_user_logged_in() ) {
						?> <span class="link-left"><a href="#oModal-profil" class="small-12 medium-6 columns">Mon compte</a></span><span class="link-right"><a href="#oModal-logout" class="small-12 medium-6 columns">se déconnecter</a></span><?php
					} else {
					?> <span class="link-left"><a href="#oModal" class="small-12 medium-6 columns">s'inscrire</a></span><span class="link-right"><a href="#oModal-co" class="small-12 medium-6 columns">se connecter</a></span><?php
					}
				?>
				<div id="oModal" class="oModal">
				  <div>
				    <header>
				      <a href="#fermer" title="Fermer la fenêtre" id="droite">X</a>
				       <h2>Inscription</h2>
				     </header>
				     <section>
				      <p><?php echo do_shortcode('[wpum_register form_id="" login_link="yes" psw_link="yes" register_link="no" ]');?></p>
					  <img class="mascotte" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/mascotte/mascotte-inscription.svg" alt="inscription" />
				     </section>
				  </div>
				</div>
				<div id="oModal-co" class="oModal">
				  <div>
				    <header>
				      <a href="#fermer" title="Fermer la fenêtre" id="droite">X</a>
				       <h2>Connexion</h2>
				     </header>
				     <section>
				      <p><?php echo do_shortcode('[wpum_login_form]');?></p>
					  <img class="mascotte" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/mascotte/mascotte-inscription.svg" alt="connexion" />
				     </section>
				  </div>
				</div>
				<div id="oModal-profil" class="oModal">
				  <div>
				    <header>
				      <a href="#fermer" title="Fermer la fenêtre" id="droite">X</a>
				       <h2>Connexion</h2>
				     </header>
				     <section>
				      <p><?php echo do_shortcode('[wpum_profile]');?></p>
					  <img class="mascotte" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/mascotte/mascotte-inscription.svg" alt="connexion" />
				     </section>
				  </div>
				</div>
				<div id="oModal-logout" class="oModal">
				  <div>
				    <header>
				      <a href="#fermer" title="Fermer la fenêtre" id="droite">X</a>
				       <h2>Connexion</h2>
				     </header>
				     <section>
				      <p><?php echo do_shortcode('[wpum_login_form]');?></p>
					  <img class="mascotte" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/mascotte/mascotte-inscription.svg" alt="connexion" />
				     </section>
				  </div>
				</div>
		</article>
	</section>
	<!-- HOME - SLIDER -->
	<section class="custom-slider row">
		<div id="triangle"></div>
		<div id="diagonale">
		    <h2 class="animated fadeIn">Tu cherches<br/>un comics ?</h2><span class="redbar"></span><p class="animated fadeIn">Pourquoi utiliser un <strong>cérébro</strong>...<br />Alors qu'ils sont déjà tous dans la base de donnée <strong>TOP TEN</strong> !</p>
		</div>
		<div class="owl-carousel" id="carousel-custom">
		    <div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Slider-features/slider01.jpg" alt="cover01"></div>
		    <div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Slider-features/slider02.jpg" alt="cover02"></div>
		    <div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Slider-features/slider03.jpg" alt="cover03"></div>
		</div>
		<a id="image_suivante"><i class="fa fa-angle-right"></i></a>
		<button id="image_precedente"></button>
	</section>
	<!-- HOME - BLOG -->
	<section class="blog row">
		<h2>Derniers articles</h2>
		<span class="souligne"></span>
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
