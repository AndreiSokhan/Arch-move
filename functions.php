<?php

//объявляем переменные
define('THEME_ROOT', get_template_directory_uri());
define('CSS_DIR', THEME_ROOT . '/assets/css');
define('JS_DIR', THEME_ROOT . '/assets/js');
//define('LIBS_DIR', THEME_ROOT . '/assets/libs');
define('IMG_DIR', THEME_ROOT . '/assets/images');


//хуки
add_action( 'wp_enqueue_scripts', 'arch_style' );
add_action( 'wp_enqueue_scripts', 'arch_scripts' );
add_action( 'after_setup_theme', 'arch_register_nav_menu' );



function arch_style() {
	wp_enqueue_style( 'normalize-style', CSS_DIR . '/normalize.css');
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );
}



function arch_scripts() {
   wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', );
	wp_enqueue_script( 'jquery' );
   
	wp_enqueue_script( 'script-script', JS_DIR . '/script.js', array('jquery'), null);
	wp_enqueue_script( 'slick-script', JS_DIR . '/slick.min.js', array('jquery'), null);
}  

function arch_register_nav_menu() {
	register_nav_menu( 'top_menu', 'Меню в шапке' );
	register_nav_menu( 'bottom_menu', 'Меню в подвале' );
}