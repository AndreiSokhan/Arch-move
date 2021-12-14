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
add_action( 'init', 'register_post_types' );



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

function register_post_types(){
	add_theme_support( 'post-thumbnails' );
	register_post_type( 'needs', [
		'labels' => [
			'name'               => 'needs', // основное название для типа записи
			'singular_name'      => 'need', // название для одной записи этого типа
			'add_new'            => 'Добавить need', // для добавления новой записи
			'add_new_item'       => 'Добавление need', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование need', // для редактирования типа записи
			'new_item'           => 'Новое need', // текст новой записи
			'view_item'          => 'Смотреть need', // для просмотра записи этого типа.
			'search_items'       => 'Искать need', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'menu_name'          => 'needs', // название меню
		],
		'public'              => false,
		'show_ui'             => true, // зависит от public
		'menu_icon'           => 'dashicons-superhero-alt',
		'supports'            => [ 'title', 'editor', 'thumbnail' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
	] );
}

function getNeeds() {
	$args = array(
		'orderby'     => 'date',
		'order'       => 'ASC',
		'post_type'   => 'needs',
	); 

	$needs = [];

	foreach(get_posts($args) as $post) {

		$need = get_fields( $post->ID );

		$need['title'] = $post->post_title; 
		$need['text'] = $post->post_content;
		$need['img'] = get_the_post_thumbnail_url( $post->ID, 'thumbnail' );
		
		$needs[] = $need;
	}

	return $needs;
}

var_dump(getNeeds());