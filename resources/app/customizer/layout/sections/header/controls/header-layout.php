<?php
/**
 * @package snow-monkey
 * @author inc2734
 * @license GPL-2.0+
 * @version 8.1.0
 */

use Inc2734\WP_Customizer_Framework\Framework;
use Framework\Helper;

Framework::control(
	'select',
	'header-layout',
	[
		'label'     => __( 'Header layout', 'snow-monkey' ),
		'priority'  => 100,
		'default'   => 'center',
		'choices'  => is_customize_preview() ? Helper::get_header_templates() : [],
	]
);

if ( ! is_customize_preview() ) {
	return;
}

$panel   = Framework::get_panel( 'layout' );
$section = Framework::get_section( 'header' );
$control = Framework::get_control( 'header-layout' );
$control->join( $section )->join( $panel );
