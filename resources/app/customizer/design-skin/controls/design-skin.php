<?php
/**
 * @package snow-monkey
 * @author inc2734
 * @license GPL-2.0+
 */

use Inc2734\WP_Customizer_Framework\Customizer_Framework;

$customizer = Customizer_Framework::init();

$customizer->control(
	'select',
	'design-skin',
	[
		'label'       => __( 'Design skin', 'snow-monkey' ),
		'description' => __( 'If set this, please save and reload.', 'snow-monkey' ),
		'default'     => 'none',
		'choices'     => apply_filters(
			'snow_monkey_design_skin_choices',
			[
				'none' => __( 'None', 'snow-monkey' ),
			]
		),
	]
);

if ( ! is_customize_preview() ) {
	return;
}

$section = $customizer->get_section( 'design-skin' );
$control = $customizer->get_control( 'design-skin' );
$control->join( $section );
