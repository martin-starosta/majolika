<?php
/**
 * majolika functions and definitions.
 *
 * @link https://codex.wordpress.org/Functions_File_Explained
 *
 * @package majolika
 */

if( ! function_exists( 'majolika_setup' ) ):
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * @since Majolika 1.0
 */

function majolika_setup() {

    // Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

    /*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

    /*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

    // This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'majolika' ),
	) );

    	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'gallery',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'refur_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // majolika_setup
add_action( 'after_setup_theme', 'majolika_setup' );

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}

add_theme_support( 'post-thumbnails' ); 
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);