<?php
/**
 * opm functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package opm

 */

if ( !class_exists( 'ReduxFramework' ) && file_exists( dirname( __FILE__ ) . '/libs/redux-framework/ReduxCore/framework.php' ) ) {
    require_once( dirname( __FILE__ ) . '/libs/redux-framework/ReduxCore/framework.php' );
    require_once(dirname(__FILE__) . '/inc/admin.php');
}

if ( ! function_exists( 'opm_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function opm_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on opm, use a find and replace
	 * to change 'opm' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'opm', get_template_directory() . '/languages' );

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

	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'onepagemadness' ),
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
	add_theme_support( 'custom-background', apply_filters( 'opm_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'opm_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function opm_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'opm_content_width', 640 );
}
add_action( 'after_setup_theme', 'opm_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function opm_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'opm' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'opm' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'opm_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function opm_scripts() {
	wp_enqueue_style("opm-bs",get_template_directory_uri()."/css/bootstrap.min.css");
    wp_enqueue_style("opm-fa",get_template_directory_uri()."/css/font-awesome.min.css");
    wp_enqueue_style("opm-owl",get_template_directory_uri()."/css/owl.carousel.css");
    wp_enqueue_style("opm-owl-theme",get_template_directory_uri()."/css/owl.theme.default.css");
    wp_enqueue_style("opm-google-os","//fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800,900");
    wp_enqueue_style("opm-css",get_template_directory_uri()."/css/style.css");


    wp_enqueue_script( 'opm-bs', get_template_directory_uri() . '/js/bootstrap.min.js', array("jquery"), '20130115', true );
    wp_enqueue_script( 'opm-jbs', get_template_directory_uri() . '/js/jquery.backstretch.min.js', array("jquery"), '20130115', true );
    wp_enqueue_script( 'opm-owl', get_template_directory_uri() . '/js/owl.carousel.min.js', array("jquery"), '20130115', true );
    wp_enqueue_script( 'opm-js', get_template_directory_uri() . '/js/script.js', array("jquery"), '20130115', true );
    wp_localize_script("opm-js","site",array("url"=>site_url("/"),"theme_path"=>get_template_directory_uri()));

}
add_action( 'wp_enqueue_scripts', 'opm_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
