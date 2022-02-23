<?php
/**
 * Avant-Garde: Block Patterns
 *
 * @since Avant-Garde 1.0
 */

/**
 * Registers block patterns, categories, and type.
 *
 * @since Avant-Garde 1.0
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
	 * @since Avant-Garde 1.0
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
			require get_theme_file_path( '/inc/patterns/' . $block_pattern . '.php' )
		);
	}

}
add_action( 'init', 'avant_garde_register_block_patterns', 9 );
