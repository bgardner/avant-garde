<?php
/**
 * This file adds functions to the Avant-Garde WordPress theme.
 *
 * @package Avant-Garde
 * @author  Brian Gardner
 * @license GNU General Public License v2 or later
 * @link    https://briangardner.com/
 */

if ( ! function_exists( 'avant_garde_setup' ) ) {

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since 1.0
	 *
	 * @return void
	 */
	function avant_garde_setup() {

		// Make theme available for translation.
		load_theme_textdomain( 'avant-garde', get_template_directory() . '/languages' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles and fonts.
		add_editor_style(
			array(
				'./style.css',
				avant_garde_fonts_url(),
			)
		);

		// Disable loading core block inline styles.
		add_filter( 'should_load_separate_core_block_assets', '__return_false' );

		// Remove core block patterns.
		remove_theme_support( 'core-block-patterns' );

	}
}
add_action( 'after_setup_theme', 'avant_garde_setup' );

// Enqueue style sheet.
add_action( 'wp_enqueue_scripts', 'avant_garde_enqueue_style_sheet' );
function avant_garde_enqueue_style_sheet() {

	wp_enqueue_style( 'avant-garde', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );

}

// Enqueue fonts.
add_action( 'wp_enqueue_scripts', 'avant_garde_enqueue_fonts' );
function avant_garde_enqueue_fonts() {

	wp_enqueue_style( 'avant-garde-fonts', avant_garde_fonts_url(), array(), null );

}

// Define fonts.
function avant_garde_fonts_url() {

	$fonts = array(
		'family=Outfit:wght@100;200;300;400;500;600;700;800;900',
	);

	// Make a single request for all Google Fonts.
	return esc_url_raw( 'https://fonts.googleapis.com/css2?' . implode( '&', array_unique( $fonts ) ) . '&display=swap' );

}

/**
 * Register block styles.
 *
 * @since 1.0.4
 */
function avant_garde_register_block_styles() {

	$block_styles = array(
		'core/button'          => array(
			'fill-secondary'    => __( 'Fill Secondary', 'avant-garde' ),
			'outline-secondary' => __( 'Outline Secondary', 'avant-garde' ),
		),
		'core/group'           => array(
			'boxshadow'   => __( 'Boxshadow', 'avant-garde' ),
			'full-height' => __( 'Full-height', 'avant-garde' ),
		),
		'core/image'           => array(
			'frame' => __( 'Frame', 'avant-garde' ),
			'inner-border' => __( 'Inner Border', 'avant-garde' ),
		),
		'core/paragraph'       => array(
			'no-margin' => __( 'No Margin', 'avant-garde' ),
		),
	);

	foreach ( $block_styles as $block => $styles ) {
		foreach ( $styles as $style_name => $style_label ) {
			register_block_style(
				$block,
				array(
					'name'  => $style_name,
					'label' => $style_label,
				)
			);
		}
	}
}
add_action( 'init', 'avant_garde_register_block_styles' );

// Include block patterns.
require get_template_directory() . '/inc/block-patterns.php';
