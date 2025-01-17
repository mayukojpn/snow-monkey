<?php
/**
 * @package snow-monkey
 * @author inc2734
 * @license GPL-2.0+
 * @version 5.0.0
 */

use Inc2734\WP_Customizer_Framework\Framework;

Framework::control(
	'select',
	'mwt-share-buttons-display-position',
	[
		'type'     => 'option',
		'label'    => __( 'Display position', 'snow-monkey' ),
		'priority' => 120,
		'default'  => 'top',
		'choices'  => [
			'top'    => __( 'Top of contents', 'snow-monkey' ),
			'bottom' => __( 'Bottom of contents', 'snow-monkey' ),
			'both'   => __( 'Both', 'snow-monkey' ),
		],
	]
);

if ( ! is_customize_preview() ) {
	return;
}

$panel   = Framework::get_panel( 'seo-sns' );
$section = Framework::get_section( 'share-buttons' );
$control = Framework::get_control( 'mwt-share-buttons-display-position' );
$control->join( $section );
