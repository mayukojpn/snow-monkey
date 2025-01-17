<?php
/**
 * @package snow-monkey
 * @author inc2734
 * @license GPL-2.0+
 * @version 7.0.0
 */

use Inc2734\WP_Customizer_Framework\Framework;

Framework::control(
	'content',
	'share-buttons-twitter-settings',
	[
		'label'    => __( 'Twitter settings', 'snow-monkey' ),
		'priority' => 80,
		'content'  => sprintf(
			/* translators: 1: Link of OpenShareCount  */
			__( 'If you want to count of tweet then needs to register to %1$s.', 'snow-monkey' ),
			'<a href="https://opensharecount.com/" target="_blank">OpenShareCount</a>'
		),
	]
);

if ( ! is_customize_preview() ) {
	return;
}

$panel   = Framework::get_panel( 'seo-sns' );
$section = Framework::get_section( 'share-buttons' );
$control = Framework::get_control( 'share-buttons-twitter-settings' );
$control->join( $section )->join( $panel );
