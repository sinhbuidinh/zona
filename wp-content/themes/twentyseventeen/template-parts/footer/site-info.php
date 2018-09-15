<?php
/**
 * Displays footer site info
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="site-info">
	<?php
	if ( function_exists( 'the_privacy_policy_link' ) ) {
		the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
	}
	?>
	<!-- https://www.facebook.com/bluestart9d/about?lst=100001785102571%3A100001785102571%3A1536376367 -->
	<a href="https://goo.gl/dXfwjp" class="imprint">Powered by SINHBD</a>
</div><!-- .site-info -->
