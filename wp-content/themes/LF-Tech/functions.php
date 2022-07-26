<?php
/**
 * LF Tech functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage LFtech_lftech
 * @since LF Tech 1.0
 */


function wpb_custom_new_menu() {
    register_nav_menus(
        array(
            'menu-principal' => __( 'Menu Principal' ),
            'extra-menu' => __( 'Extra Menu' ),

        )
    );
}
add_action( 'init', 'wpb_custom_new_menu' );

$defaults = array(
    'default-color'          => '',
    'default-image'          => '',
    'default-repeat'         => '',
    'default-position-x'     => '',
    'default-attachment'     => '',
    'wp-head-callback'       => '_custom_background_cb',
    'admin-head-callback'    => '',
    'admin-preview-callback' => ''
);
add_theme_support( 'custom-background', $defaults );

function themename_custom_logo_setup() {
	$defaults = array(
		'height'               => 100,
		'width'                => 400,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => true,
	);

	add_theme_support( 'custom-logo', $defaults );
}


function themename_custom_header_setup() {
	$args = array(
		'default-image'      => get_template_directory_uri() . 'img/default-image.jpg',
		'default-text-color' => '000',
		'width'              => 1000,
		'height'             => 250,
		'flex-width'         => true,
		'flex-height'        => true,
	);
	add_theme_support( 'custom-header', $args );
}
add_action( 'after_setup_theme', 'themename_custom_header_setup' );

function wmpudev_enqueue_icon_stylesheet() {
	wp_register_style('fontawesome', 'http:////maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
	wp_enqueue_style('fontawesome');
}
add_action( 'wp_enqueue_scripts', 'wmpudev_enqueue_icon_stylesheet' );

function banners_topo(){

	$args = array(

		'labels' => array(

			'name' => 'Banners',
			'singular_name' => 'Banner',
		),
		'menu_icon' => 'dashicons-images-alt',
		'hierarchical' => true,
		'public' => true,
		'has_archive' => true,
		'supports' => array('title','thumbnail'),



	);

	register_post_type('Banner', $args);


}
add_action('init', 'banners_topo');


function register_custom_widget_area() {
	register_sidebar(
		array(
			'id' => 'footer1',
			'name' => 'footer area 1',
			'description' => 'Primeira seção do rodapé, localizada a esquerda do rodapé',
		)
	);
}
add_action( 'widgets_init', 'register_custom_widget_area' );

