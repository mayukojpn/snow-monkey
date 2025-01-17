<?php
/**
 * @package snow-monkey
 * @author inc2734
 * @license GPL-2.0+
 * @version 8.1.0
 */

use Inc2734\WP_Customizer_Framework\Framework;

Framework::control(
	'checkbox',
	'vertical-global-nav',
	[
		'label'    => __( 'Make global navigation vertical', 'snow-monkey' ),
		'priority' => 101,
		'default'  => false,
		'active_callback' => function() {
			return '2row' !== get_theme_mod( 'header-layout' );
		},
	]
);

if ( ! is_customize_preview() ) {
	return;
}

$panel   = Framework::get_panel( 'layout' );
$section = Framework::get_section( 'header' );
$control = Framework::get_control( 'vertical-global-nav' );
$control->join( $section )->join( $panel );
