<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Gov.WP
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
		<div class="site-header-wrapper">
			<div class="site-branding">
<?php
	// Display Theme version in header
	$theme = wp_get_theme();
	$theme_status = $theme->get( 'Status' );
	$theme_version = $theme->get( 'Version' );
?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a> <small class="dev-version"><?php echo $theme_status . ' ' . $theme_version; ?></small></h1>
			</div>
			<?php
				if ( ! is_front_page() && ! is_search() ) {
					get_search_form();
				}
			?>
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<h1 class="menu-toggle"><?php _e( 'Menu', 'govdotwp' ); ?></h1>
				<div class="screen-reader-text skip-link"><a href="#content"><?php _e( 'Skip to content', 'govdotwp' ); ?></a></div>

				<?php // wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->

	<?php if ( is_front_page() ) : ?>

		<section id="welcome" class="site-hero">
			<div class="site-hero-wrapper">
				<div class="site-hero-content">
					<p class="site-description"><?php bloginfo( 'description' ); ?></p>
					<?php get_search_form(); ?>
				</div>
				<div class="site-hero-image">
					<!-- <img src="<?php echo get_template_directory_uri(); ?>/inc/flag.png" /> -->
				</div>
			</div>
		</section>

	<?php endif; ?>

	<div id="content" class="site-content">
		<?php if ( ! is_front_page() && ! is_search() && ! is_home() ) : ?>
			<nav class="breadcrumb-navigation">
				<?php govdotwp_breadcrumb_navigation(); ?>
			</nav>
		<?php endif; ?>