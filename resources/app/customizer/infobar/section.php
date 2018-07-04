<?php
/**
 * @package snow-monkey
 * @author inc2734
 * @license GPL-2.0+
 */

use Inc2734\WP_Customizer_Framework\Customizer_Framework;

$customizer = Customizer_Framework::init();

$customizer->section( 'infobar', [
	'title'    => __( 'Infobar', 'snow-monkey' ),
	'priority' => 1020,
] );
