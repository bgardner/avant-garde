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

		// Enqueue editor styles and fonts.
		add_editor_style(
			array(
				'./style.css',
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

/**
 * Register block styles.
 *
 * @since 1.0.4
 */
function avant_garde_register_block_styles() {

	$block_styles = array(
		'core/button'    => array(
			'fill-secondary'    => __( 'Fill Secondary', 'avant-garde' ),
			'outline-secondary' => __( 'Outline Secondary', 'avant-garde' ),
		),
		'core/group'     => array(
			'boxshadow'   => __( 'Boxshadow', 'avant-garde' ),
			'full-height' => __( 'Full-height', 'avant-garde' ),
		),
		'core/image'     => array(
			'frame' => __( 'Frame', 'avant-garde' ),
			'inner-border' => __( 'Inner Border', 'avant-garde' ),
		),
		'core/list'      => array(
			'no-disc' => __( 'No Disc', 'avant-garde' ),
		),
		'core/paragraph' => array(
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

	/* Functionality specific to the Block Pattern Explorer plugin. */
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

	foreach ( $block_pattern_categories as $name => $properties ) {
		register_block_pattern_category( $name, $properties );
	}
}
add_action( 'init', 'avant_garde_register_block_patterns', 9 );
