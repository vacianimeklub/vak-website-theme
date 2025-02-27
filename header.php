<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php get_template_part( 'template-parts/google' ); ?>
		<?php get_template_part( 'template-parts/hotjar' ); ?>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php get_template_part( 'template-parts/facebook-platform' ); ?>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<?php if ( is_front_page() && !is_paged() ): ?>
		<div class="frontpage-header-wrapper">
			<header class="frontpage-header" role="banner">
				<div class="frontpage-header-logo">
					<h1 class="frontpage-logo-title">Váci Anime Klub</h1>
					<img class="frontpage-logo" src="<?php echo get_template_directory_uri() . "/"?>dist/assets/images/vaci-anime-klub-logo.svg" alt="Váci Anime Klub logo"/>
				</div>
				<div class="frontpage-header-contents">
					<?php dynamic_sidebar( 'frontpage-header-widget' ) ?>
				</div>
			</header>
		</div>
	<?php else: ?>
		<header class="site-header" role="banner">
			<div class="site-title-bar title-bar" <?php foundationpress_title_bar_responsive_toggle() ?>>
				<div class="title-bar-left">
					<button aria-label="<?php _e( 'Main Menu', 'foundationpress' ); ?>" class="menu-icon" type="button" data-toggle="<?php foundationpress_mobile_menu_id(); ?>"></button>
					<span class="site-mobile-title title-bar-title">
						<a class="topbar-logo-wrapper" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<h1 class="topbar-logo-title">Váci Anime Klub</h1>
							<img class="topbar-logo" src="<?php echo get_template_directory_uri() . "/"?>dist/assets/images/vaci-anime-klub-logo-miniminimal.png" alt="Váci Anime Klub logo"/>
						</a>
					</span>
				</div>
			</div>

			<nav class="site-navigation top-bar" role="navigation">
				<div class="top-bar-left">
					<div class="site-desktop-title top-bar-title">
						<a class="topbar-logo-wrapper" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<h1 class="topbar-logo-title">Váci Anime Klub</h1>
							<img class="topbar-logo" src="<?php echo get_template_directory_uri() . "/"?>dist/assets/images/vaci-anime-klub-logo-miniminimal.png" alt="Váci Anime Klub logo"/>
						</a>
					</div>
				</div>
				<div class="top-bar-right">
					<?php foundationpress_top_bar_r(); ?>

					<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
						<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
					<?php endif; ?>
				</div>
			</nav>
		</header>
	<?php endif; ?>
	
