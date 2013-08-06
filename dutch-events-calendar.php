<?php
/*
  Plugin Name: Dutch Events Calendar
  Description: Alternative Dutch translation and Dutch localisation for Modern Tribe's The Events Calendar and The Events Calendar PRO, versions 3.0.3 and 3.0.5 respectively.
  Version: 0.0.1
  Author: Erik Massop
*/

function nlec_init() {
	load_plugin_textdomain( 'tribe-events-calendar', false, dirname( plugin_basename( __FILE__ ) ) . '/lang/' );
	load_plugin_textdomain( 'tribe-events-calendar-pro', false, dirname( plugin_basename( __FILE__ ) ) . '/lang/' );
}
add_action( 'init', 'nlec_init', 8 );

if (false):
function nlec_add_domain( $translation, $text, $domain ) {
	if ( $domain == 'tribe-events-calendar-pro' ) {
		return '[' . $translation . ']';
	} else {
		return $translation;
	}
}
add_filter( 'gettext', 'nlec_add_domain', 20, 3);
endif;
