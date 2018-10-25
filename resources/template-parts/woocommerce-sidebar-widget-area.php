<?php
/**
 * @package snow-monkey
 * @author inc2734
 * @license GPL-2.0+
 */

$sidebar_id = 'woocommerce-sidebar-widget-area';

if ( ! is_active_sidebar( $sidebar_id ) || ! is_registered_sidebar( $sidebar_id ) ) {
	return;
}
?>

<div class="l-woocommerce-sidebar-widget-area"
	data-is-slim-widget-area="true"
	data-is-content-widget-area="false"
	>

	<?php dynamic_sidebar( $sidebar_id ); ?>
</div>
