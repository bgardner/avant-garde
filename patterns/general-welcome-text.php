<?php
/**
 * Avent-Garde: Welcome section with text
 *
 * @package Avant-Garde
 */

return array(
	'title'         => __( 'Welcome section with text.', 'avant-garde' ),
	'categories'    => array( 'avant-garde-general' ),
	'viewportWidth' => 1200,
	'content'       => '<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0px"}},"layout":{"inherit":false,"wideSize":"1280px"}} -->
<div class="wp-block-group alignfull"><!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- wp:heading {"textAlign":"center","style":{"typography":{"lineHeight":"1","letterSpacing":"-0.5vw","textTransform":"uppercase"}},"fontSize":"max-240"} -->
<h2 class="has-text-align-center has-max-240-font-size" id="chicago" style="line-height:1;text-transform:uppercase;letter-spacing:-0.5vw">Chicago</h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.25","letterSpacing":"-0.1vw"}},"fontSize":"max-60"} -->
<p class="has-text-align-center has-max-60-font-size" style="line-height:1.25;letter-spacing:-0.1vw">' . esc_html__( 'Innovative WordPress Design', 'avant-garde' ) . '</p>
<!-- /wp:paragraph -->
<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->',
);
