<?php
/**
 * Avant-Garde: Query list with three columns
 *
 * @package Avant-Garde
 */

return array(
	'title'         => __( 'List of posts in three columns.', 'avant-garde' ),
	'categories'    => array( 'avant-garde-query' ),
	'viewportWidth' => 1280,
	'content'       => '<!-- wp:group {"align":"full","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull"><!-- wp:term-description {"align":"wide","style":{"typography":{"lineHeight":"1.25"}}} /-->
<!-- wp:query {"queryId":1,"query":{"perPage":"6","pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template -->
<!-- wp:separator {"className":"is-style-wide"} -->
<hr class="wp-block-separator is-style-wide"/>
<!-- /wp:separator -->
<!-- wp:spacer {"height":30} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- wp:columns {"style":{"spacing":{"margin":{"bottom":"0px"}}}} -->
<div class="wp-block-columns" style="margin-bottom:0px"><!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:post-date /--></div>
<!-- /wp:column -->
<!-- wp:column {"width":"50%","className":"is-style-no-margin"} -->
<div class="wp-block-column is-style-no-margin" style="flex-basis:50%"><!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"bottom":"10px"}}},"fontSize":"medium"} /-->
<!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":false,"fontSize":"small"} /--></div>
<!-- /wp:column -->
<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:post-terms {"term":"post_tag","textAlign":"right"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template -->
<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->
<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->',
);
