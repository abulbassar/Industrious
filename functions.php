<?php

if(file_exists(get_template_directory().'/inc/vc-elements.php')){
	require_once get_template_directory() . '/inc/vc-elements.php';
}
if(file_exists(get_template_directory().'/inc/vc-elements-output.php')){
	require_once get_template_directory() . '/inc/vc-elements-output.php';
}


if ( ! function_exists( 'industrious_setup' ) ) :
	
	function industrious_setup() {
		
		load_theme_textdomain( 'industrious', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );

		
		
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary-menu' => esc_html__( 'Primary', 'industrious' ),
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

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'industrious_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'industrious_setup' );


function industrious_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Footer one', 'industrious' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add footer description here.', 'industrious' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Footer two', 'industrious' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add footer description here.', 'industrious' ),
		'before_widget' => '<ul class="alt">',
		'after_widget'  => '</ul>',
		 'before_title'  => '<h4>',
		 'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Three', 'industrious' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add footer description here.', 'industrious' ),
		
	) );
}
add_action( 'widgets_init', 'industrious_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function industrious_scripts() {
	
	
	wp_enqueue_style( 'main.css', get_template_directory_uri().'/assets/css/main.css' );
	
	wp_enqueue_style( 'font-awesome.min.css', get_template_directory_uri().'/assets/css/font-awesome.min.css' );
	//wp_enqueue_style( 'font-awesome.min.css', '//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'industrious-style', get_stylesheet_uri() );
	
	//for js script
	wp_enqueue_script( 'jquery.min.js', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), '3.0', true );
	wp_enqueue_script( 'browser.min.js', get_template_directory_uri() . '/assets/js/browser.min.js', array(), '3.0', true );
	wp_enqueue_script( 'breakpoints.min.js', get_template_directory_uri() . '/assets/js/breakpoints.min.js', array(), '3.0', true );
	wp_enqueue_script( 'util.js', get_template_directory_uri() . '/assets/js/util.js', array(), '3.0', true );
	wp_enqueue_script( 'main.js', get_template_directory_uri() . '/assets/js/main.js', array(), '3.0', true );
	
	

		
}
add_action( 'wp_enqueue_scripts', 'industrious_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
//require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
//require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
//require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
//if ( defined( 'JETPACK__VERSION' ) ) {
	//require get_template_directory() . '/inc/jetpack.php';
//}

if(!class_exists('redux-framework')&& file_exists(dirname(__FILE__).'/redux-framework/ReduxCore/framework.php')){
	require_once(dirname(__FILE__)).'/redux-framework/ReduxCore/framework.php';
}
 if(!isset($redux_demo) && file_exists(dirname(__FILE__).'/redux-framework/sample/sample-config.php')){
	 require_once(dirname(__FILE__).'/redux-framework/sample/options.php');
 }
 
 //require_once(dirname(__FILE__).'/inc/test.php');
 require_once(dirname(__FILE__).'/inc/custom-widget.php');
 
 