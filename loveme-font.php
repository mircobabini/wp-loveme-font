<?php
/*
Plugin Name: LoveMe Font
Plugin URI: http://wordpress.org/plugins/loveme-font/
Description: An awesome font by Massimo Ippolito http://www.maxprod.it/
Version: 1.0.0
Author: Mirco Babini <mirkolofio@gmail.com>
Author URI: http://mircobabini.com/
License: GPLv2
*/

function loveme_scripts() {
	wp_enqueue_style( 'loveme', plugins_url( 'loveme.css', __FILE__ ) );
}

add_action( 'wp_enqueue_scripts', 'loveme_scripts' );
