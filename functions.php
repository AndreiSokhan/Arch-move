<?php

add_action( 'wp_enqueue_scripts', 'arch_style' );


function arch_style() {
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );
}