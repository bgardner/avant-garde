<?php
/**
 * Avent-Garde: Description section with text
 *
 * @package Avant-Garde
 */

return array(
	'title'         => __( 'Description section with text.', 'avant-garde' ),
	'categories'    => array( 'avant-garde-general' ),
	'viewportWidth' => 1200,
	'content'       => '<!-- wp:group {"align":"full","backgroundColor":"primary","textColor":"secondary","layout":{"inherit":true}} -->
				<div class="wp-block-group alignfull has-secondary-color has-primary-background-color has-text-color has-background"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0px"}},"className":"has-x-large-font-size"} -->
				<div class="wp-block-group alignwide has-x-large-font-size"><!-- wp:spacer -->
				<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->

				<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.25","fontStyle":"normal","fontWeight":"300","fontSize":"34px"}}} -->
				<p class="has-text-align-center" style="font-size:34px;font-style:normal;font-weight:300;line-height:1.25">' . esc_html__( 'Avant-garde is all about pushing boundaries and experimenting with new ideas. It’s about dreaming and creating something unique.', 'avant-garde' ) . '</p>
				<!-- /wp:paragraph -->

				<!-- wp:spacer -->
				<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer --></div>
				<!-- /wp:group --></div>
				<!-- /wp:group -->',
);
