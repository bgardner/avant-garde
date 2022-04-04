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

/**
 * Registers block patterns, categories, and type.
 *
 * @since Avant-Garde 1.0.4
 */
function avant_garde_register_block_patterns() {

	if ( function_exists( 'register_block_pattern_category_type' ) ) {
		register_block_pattern_category_type( 'avant-garde', array( 'label' => __( 'Avant-Garde', 'avant-garde' ) ) );
	}

	$block_pattern_categories = array(
		'avant-garde-footer'  => array(
			'label'         => __( 'Footer', 'avant-garde' ),
			'categoryTypes' => array( 'avant-garde' ),
		),
		'avant-garde-general' => array(
			'label'         => __( 'General', 'avant-garde' ),
			'categoryTypes' => array( 'avant-garde' ),
		),
		'avant-garde-header'  => array(
			'label'         => __( 'Header', 'avant-garde' ),
			'categoryTypes' => array( 'avant-garde' ),
		),
		'avant-garde-page'    => array(
			'label'         => __( 'Page', 'avant-garde' ),
			'categoryTypes' => array( 'avant-garde' ),
		),
		'avant-garde-query'   => array(
			'label'         => __( 'Query', 'avant-garde' ),
			'categoryTypes' => array( 'avant-garde' ),
		),
	);

	/**
	 * Filters the theme block pattern categories.
	 *
	 * @since Avant-Garde 1.0.4
	 *
	 * @param array[] $block_pattern_categories {
	 *     An associative array of block pattern categories, keyed by category name.
	 *
	 *     @type array[] $properties {
	 *         An array of block category properties.
	 *
	 *         @type string $label A human-readable label for the pattern category.
	 *     }
	 * }
	 */
	$block_pattern_categories = apply_filters( 'avant-garde_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		register_block_pattern_category( $name, $properties );
	}

	$block_patterns = array(
		'footer-default',
		'footer-simple',
		'footer-stacked',
		'general-description-text',
		'general-portfolio',
		'general-pricing-table',
		'general-split-text',
		'general-welcome-text',
		'header-default',
		'hidden-404',
		'page-home',
		'query-default',
		'query-grid',
		'query-list',
	);

	/**
	 * Filters the theme block patterns.
	 *
	 * @since Avant-Garde 1.0
	 *
	 * @param $block_patterns array List of block patterns by name.
	 */
	$block_patterns = apply_filters( 'avant_garde_block_patterns', $block_patterns );

	foreach ( $block_patterns as $block_pattern ) {
		register_block_pattern(
			'avant-garde/' . $block_pattern,
			require get_theme_file_path( '/patterns/' . $block_pattern . '.php' )
		);
	}

}
add_action( 'init', 'avant_garde_register_block_patterns', 9 );
