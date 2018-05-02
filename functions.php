<?php
/**
 * gocreateme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package gocreateme
 */

if ( ! function_exists( 'gocreateme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function gocreateme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on gocreateme, use a find and replace
		 * to change 'gocreateme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'gocreateme', get_template_directory() . '/languages' );

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
		add_image_size('team', 500, 350, true);
		add_image_size('service', 300, 200, true);

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'gocreateme' ),
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
		add_theme_support( 'custom-background', apply_filters( 'gocreateme_custom_background_args', array(
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
add_action( 'after_setup_theme', 'gocreateme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function gocreateme_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'gocreateme_content_width', 640 );
}
add_action( 'after_setup_theme', 'gocreateme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function gocreateme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'gocreateme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'gocreateme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'gocreateme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function gocreateme_scripts() {
	wp_enqueue_style( 'gocreateme-style', get_stylesheet_uri() );

	wp_enqueue_script( 'gocreateme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'gocreateme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'gocreateme_scripts' );



/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// Function to change "posts" to "Team Members" in the admin side menu
function change_post_menu_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Works';
    $submenu['edit.php'][5][0] = 'Works';
    $submenu['edit.php'][10][0] = 'Add Work';
    $submenu['edit.php'][16][0] = 'Tags';
    echo '';
}
add_action( 'admin_menu', 'change_post_menu_label' );
// Function to change post object labels to "news"
function change_post_object_label() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Works';
    $labels->singular_name = 'Work';
    $labels->add_new = 'Add Work';
    $labels->add_new_item = 'Add Work';
    $labels->edit_item = 'Edit Work';
    $labels->new_item = 'Work';
    $labels->view_item = 'View Work';
    $labels->search_items = 'Search Works';
    $labels->not_found = 'No Works found';
    $labels->not_found_in_trash = 'No Works found in Trash';
}
add_action( 'init', 'change_post_object_label' );

function add_isotope() {
    wp_register_script( 'isotope', get_template_directory_uri().'/js/libs/jquery.isotope.min.js', array('jquery'),  true );
    wp_register_script( 'isotope-init', get_template_directory_uri().'/js/isotope.js', array('jquery', 'isotope'),  true );
    wp_register_style( 'isotope-css', get_stylesheet_directory_uri() . '/css/isotope.css' );
 
    wp_enqueue_script('isotope-init');
    wp_enqueue_style('isotope-css');
}
 
add_action( 'wp_enqueue_scripts', 'add_isotope' );



function gocreateme_excerpt_length($length){
		return 20;
}
add_filter('excerpt_length','gocreateme_excerpt_length',999);

function gocreateme_excerpt_ending($more){

	return "<a href='" . get_permalink() . "'>...READ MORE...</a>";

}
add_filter('excerpt_more', 'gocreateme_excerpt_ending');

function scroll_up($more){

	return "<a href='" . get_permalink() . "'>...READ MORE...</a>";

}