<?php
/**
 * Avant-Garde: Footer with text, button, links
 *
 * @package Avant-Garde
 */

return array(
	'title'         => __( 'Footer with text, button, links.', 'avant-garde' ),
	'categories'    => array( 'avant-garde-footer' ),
	'blockTypes'    => array( 'core/template-part/footer' ),
	'viewportWidth' => 1200,
	'content'       => '<!-- wp:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"spacing":{"padding":{"top":"40vh","bottom":"40px"},"blockGap":"0px"}},"backgroundColor":"primary","textColor":"secondary","className":"has-x-small-font-size","layout":{"inherit":true}} -->
				<div class="wp-block-group alignfull has-x-small-font-size has-secondary-color has-primary-background-color has-text-color has-background has-link-color" style="padding-top:40vh;padding-bottom:40px"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":"0px"}}} -->
				<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"75%"} -->
				<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:75%"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.25","letterSpacing":"-0.1vw"}},"fontSize":"max-60"} -->
				<p class="has-max-60-font-size" id="design-with-courage" style="line-height:1.25;letter-spacing:-0.1vw">' . esc_html__( 'Design with courage.', 'avant-garde' ) . '</p>
				<!-- /wp:paragraph --></div>
				<!-- /wp:column -->

				<!-- wp:column {"verticalAlignment":"center","width":"25%"} -->
				<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%"><!-- wp:columns {"style":{"spacing":{"blockGap":"0px"}}} -->
				<div class="wp-block-columns"><!-- wp:column {"className":"is-style-no-margin"} -->
				<div class="wp-block-column is-style-no-margin"><!-- wp:paragraph {"className":"is-style-no-margin"} -->
				<p class="is-style-no-margin"><a href="#">' . esc_html__( 'Start Here', 'avant-garde' ) . '</a></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"className":"is-style-no-margin"} -->
				<p class="is-style-no-margin"><a href="#">' . esc_html__( 'Our Services', 'avant-garde' ) . '</a></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"className":"is-style-no-margin"} -->
				<p class="is-style-no-margin"><a href="#">' . esc_html__( 'Contact Us', 'avant-garde' ) . '</a></p>
				<!-- /wp:paragraph --></div>
				<!-- /wp:column -->

				<!-- wp:column {"className":"is-style-no-margin"} -->
				<div class="wp-block-column is-style-no-margin"><!-- wp:paragraph {"className":"is-style-no-margin"} -->
				<p class="is-style-no-margin" id="block-b19cad4c-373b-45bb-8ab0-63bbc555c61d"><a href="#">Twitter</a></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"className":"is-style-no-margin"} -->
				<p class="is-style-no-margin" id="block-3a04d4bc-d50f-4d10-a3e8-627b268529d4"><a href="#">Instagram</a></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"className":"is-style-no-margin"} -->
				<p class="is-style-no-margin" id="block-3667c312-d03c-496d-8ee5-ac375815f684"><a href="#">LinkedIn</a></p>
				<!-- /wp:paragraph --></div>
				<!-- /wp:column --></div>
				<!-- /wp:columns --></div>
				<!-- /wp:column --></div>
				<!-- /wp:columns -->

				<!-- wp:columns {"verticalAlignment":"top","align":"wide","style":{"spacing":{"blockGap":"0px"}}} -->
				<div class="wp-block-columns alignwide are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"75%","className":"is-style-no-margin"} -->
				<div class="wp-block-column is-vertically-aligned-top is-style-no-margin" style="flex-basis:75%"></div>
				<!-- /wp:column -->

				<!-- wp:column {"verticalAlignment":"top","width":"25%","className":"is-style-no-margin"} -->
				<div class="wp-block-column is-vertically-aligned-top is-style-no-margin" style="flex-basis:25%"><!-- wp:paragraph {"className":"is-style-no-margin"} -->
				<p class="is-style-no-margin"><a href="https://wordpress.org/themes/avant-garde/" data-type="URL" data-id="https://wordpress.org/themes/avant-garde/">Avant-Garde</a> by <a href="https://briangardner.com/" data-type="URL" data-id="https://briangardner.com/">Brian Gardner</a></p>
				<!-- /wp:paragraph --></div>
				<!-- /wp:column --></div>
				<!-- /wp:columns --></div>
				<!-- /wp:group -->',
);
