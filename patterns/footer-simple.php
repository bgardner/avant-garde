<?php
/**
 * Avant-Garde: Footer with text, links, primary background
 *
 * @package Avant-Garde
 */

return array(
	'title'         => __( 'Footer with text, links.', 'avant-garde' ),
	'categories'    => array( 'avant-garde-footer' ),
	'blockTypes'    => array( 'core/template-part/footer' ),
	'viewportWidth' => 1200,
	'content'       => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"40px","bottom":"40px"}},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"backgroundColor":"primary","textColor":"secondary","layout":{"inherit":true},"fontSize":"small"} -->
<div class="wp-block-group alignfull has-secondary-color has-primary-background-color has-text-color has-background has-link-color has-small-font-size" style="padding-top:40px;padding-bottom:40px"><!-- wp:group {"align":"wide","layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph -->
<p>© ' . gmdate( 'Y' ) . ' Your Company LLC · <a href="#">' . esc_html__( 'Contact Us', 'avant-garde' ) . '</a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><a href="#">Facebook</a> · <a href="#">Twitter</a> · <a href="#">Instagram</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->',
);
