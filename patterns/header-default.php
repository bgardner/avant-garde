<?php
/**
 * Avant-Garde: Header with site title, navigation
 *
 * @package Avant-Garde
 */

return array(
	'title'         => __( 'Header with site title, navigation.', 'avant-garde' ),
	'categories'    => array( 'avant-garde-header' ),
	'blockTypes'    => array( 'core/template-part/header' ),
	'viewportWidth' => 1200,
	'content'       => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"30px","bottom":"30px"}}},"layout":{"inherit":true}} -->
<div class="wp-block-group alignfull" style="padding-top:30px;padding-bottom:30px"><!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"15px"}},"layout":{"type":"flex","allowOrientation":false}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":58,"shouldSyncIcon":true,"className":"is-style-rounded"} /-->
<!-- wp:site-title /--></div>
<!-- /wp:group -->
<!-- wp:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"center"}} -->
<!-- wp:page-list {"isNavigationChild":true,"showSubmenuIcon":true,"openSubmenusOnClick":false} /-->
<!-- /wp:navigation --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->',
);
