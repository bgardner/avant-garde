<?php
/**
 * Avent-Garde: Split text with buttons
 *
 * @package Avant-Garde
 */

return array(
	'title'         => __( 'Split text with buttons.', 'avant-garde' ),
	'categories'    => array( 'avant-garde-general' ),
	'viewportWidth' => 1200,
	'content'       => '<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0px"}},"layout":{"inherit":true}} -->
<div class="wp-block-group alignfull"><!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"0px"}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:paragraph {"align":"right","style":{"typography":{"lineHeight":"1","fontStyle":"normal","fontWeight":"600","letterSpacing":"-0.2vw"}},"fontSize":"max-144"} -->
<p class="has-text-align-right has-max-144-font-size" style="font-style:normal;font-weight:600;line-height:1;letter-spacing:-0.2vw">' . esc_html__( 'Sublime full site editing.', 'avant-garde' ) . '</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"right","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"x-large"} -->
<p class="has-text-align-right has-x-large-font-size" style="text-transform:uppercase">—Taylor Jones</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->
<!-- wp:column {"verticalAlignment":"bottom","width":"50%","style":{"spacing":{"padding":{"right":"5%","left":"5%"}}}} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="padding-right:5%;padding-left:5%;flex-basis:50%"><!-- wp:paragraph -->
<p>' . esc_html__( 'Avant-Garde is a Chicago-based design studio that builds sophisticated websites for small businesses and professionals.', 'avant-garde' ) . '</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p>' . esc_html__( 'We leverage the power of the WordPress block editor to create digital experiences that look groovy, function with purpose, and get people really excited. Ka-chow!', 'avant-garde' ) . '</p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"blockGap":"10px"}}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link" href="https://bg.design/avant-garde/about/">' . esc_html__( 'Learn More', 'avant-garde' ) . '</a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link" href="https://bg.design/avant-garde/services/">' . esc_html__( 'Our Services', 'avant-garde' ) . '</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->',
);
