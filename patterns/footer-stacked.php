<?php
/**
 * Avant-Garde: Footer with heading, text, button, primary background
 *
 * @package Avant-Garde
 */

return array(
	'title'      => __( 'Footer with heading, text, button.', 'avant-garde' ),
	'categories' => array( 'avant-garde-footer' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"spacing":{"padding":{"top":"100px","bottom":"40px"}}},"backgroundColor":"primary","textColor":"secondary","layout":{"inherit":true},"fontSize":"small"} -->
<div class="wp-block-group alignfull has-secondary-color has-primary-background-color has-text-color has-background has-link-color has-small-font-size" style="padding-top:100px;padding-bottom:40px"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"bottom":"20px"}}},"fontSize":"max-48"} -->
<h2 class="has-text-align-center has-max-48-font-size" id="let-s-connect" style="font-style:normal;font-weight:400;margin-bottom:20px">' . esc_html__( 'Let’s Connect', 'avant-garde' ) . '</h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">' . esc_html__( 'Avant-garde is all about pushing boundaries and experimenting with new ideas. It’s about dreaming and creating something unique.', 'avant-garde' ) . '</p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":0}},"className":"is-style-outline-secondary"} -->
<div class="wp-block-button is-style-outline-secondary"><a class="wp-block-button__link no-border-radius" href="#">' . esc_html__( 'Get in Touch', 'avant-garde' ) . ' →</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<!-- wp:spacer {"height":70} -->
<div style="height:70px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size">© ' . gmdate( 'Y' ) . ' Your Company LLC · <a href="#">' . esc_html__( 'Contact Us', 'avant-garde' ) . '</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->',
);
