<?php
/**
 * @package snow-monkey
 * @author inc2734
 * @license GPL-2.0+
 * @version 7.7.0
 *
 * renamed: app/customizer/design/sections/base-design/controls/custom-logo-scale.php
 */

use Inc2734\WP_Customizer_Framework\Framework;

Framework::control(
	'number',
	'sm-logo-scale',
	[
		'label'       => __( 'Custom logo scale (%) on mobile device', 'snow-monkey' ),
		'priority'    => 180,
		'default'     => 25,
		'input_attrs' => [
			'min' => 1,
			'max' => 50,
		],
		'active_callback' => function() {
			$custom_logo = get_custom_logo();
			if ( ! $custom_logo ) {
				return false;
			}

			preg_match( '/height="(\d+?)"/', $custom_logo, $reg );
			if ( ! isset( $reg[1] ) ) {
				return false;
			}

			return true;
		},
	]
);

if ( ! is_customize_preview() ) {
	return;
}

$panel   = Framework::get_panel( 'design' );
$section = Framework::get_section( 'base-design' );
$control = Framework::get_control( 'sm-logo-scale' );
$control->join( $section )->join( $panel );
