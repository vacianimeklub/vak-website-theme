<?php
/**
 * Register widget areas
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

if ( ! function_exists( 'foundationpress_sidebar_widgets' ) ) :
function foundationpress_sidebar_widgets() {
	register_sidebar(array(
		'id' => 'sidebar-widgets',
		'name' => __( 'Sidebar widgets', 'foundationpress' ),
		'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget' => '</section>',
		'before_title' => '<h6>',
		'after_title' => '</h6>',
	));

	register_sidebar(array(
		'id' => 'footer-widgets',
		'name' => __( 'Footer widgets', 'foundationpress' ),
		'description' => __( 'Drag widgets to this footer container', 'foundationpress' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget' => '</section>',
		'before_title' => '<h6>',
		'after_title' => '</h6>',
	));

	register_sidebar(array(
		'id' => 'frontpage-feature-widgets',
		'name' => __( 'Frontpage featured widgets', 'foundationpress' ),
		'description' => __( 'Drag widgets to this footer container', 'foundationpress' ),
		'before_widget' => '<div id="%1$s" class="frontpage-main-feature %2$s"><div class="main-feature-content">',
		'after_widget' => '</div></div>',
		'before_title' => '<h4 class="main-feature-title">',
		'after_title' => '</h4>',
	));

	register_sidebar(array(
		'id' => 'frontpage-header-widget',
		'name' => __( 'Frontpage header widget', 'foundationpress' ),
		'description' => __( "Drag a widget here - and make sure you don't set a title.", 'foundationpress' ),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',
	));

	register_sidebar(array(
		'id' => 'frontpage-content-widgets',
		'name' => __( 'Frontpage content widgets', 'foundationpress' ),
		'description' => __( 'Drag widgets to this footer container', 'foundationpress' ),
		'before_widget' => '<div class="frontpage-content">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
}

add_action( 'widgets_init', 'foundationpress_sidebar_widgets' );
endif;
