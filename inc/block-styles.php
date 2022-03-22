<?php
/**
 * This file adds block styles to the Avant-Garde WordPress theme.
 *
 * @package Avant-Garde
 * @author  Brian Gardner
 * @license GNU General Public License v2 or later
 * @link    https://briangardner.com/
 */

/**
 * Register block styles.
 *
 * @since 1.0
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
