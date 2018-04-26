<?php
/**
 * studently functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package studently
 */

if ( ! function_exists( 'studently_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function studently_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on studently, use a find and replace
		 * to change 'studently' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'studently', get_template_directory() . '/languages' );

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
			'menu_main' => esc_html__( 'Main Menu', 'studently' ),
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
		add_theme_support( 'custom-background', apply_filters( 'studently_custom_background_args', array(
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
		
		
		$labels = array(
			'name'               => __( 'Tesimonials', 'studently' ),
			'singular_name'      => __( 'Tesimonial', 'studently' ),
			'menu_name'          => __( 'Tesimonials', 'studently' ),
			'name_admin_bar'     => __( 'Tesimonial', 'studently' ),
			'add_new'            => __( 'Add New', 'studently' ),
			'add_new_item'       => __( 'Add New Tesimonial', 'studently' ),
			'new_item'           => __( 'New Tesimonial', 'studently' ),
			'edit_item'          => __( 'Edit Tesimonial', 'studently' ),
			'view_item'          => __( 'View Tesimonial', 'studently' ),
			'all_items'          => __( 'All tesimonials', 'studently' ),
			'search_items'       => __( 'Search tesimonials', 'studently' ),
			'parent_item_colon'  => __( 'Parent tesimonials:', 'studently' ),
			'not_found'          => __( 'No tesimonials found.', 'studently' ),
			'not_found_in_trash' => __( 'No tesimonials found in Trash.', 'studently' )
		);

		$args = array(
			'labels'             => $labels,
					'description'        => __( 'Description.', 'studently' ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'tesimonials' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'menu_icon'      	 => 'dashicons-format-gallery',
			'supports'           => array( 'title', 'editor', 'thumbnail' )
		);

		register_post_type( 'tesimonials', $args );
		
		
		
		
		
		$labels = array(
		'name'                       => _x( 'Types', 'studently' ),
		'singular_name'              => _x( 'Type', 'studently' ),
		'search_items'               => __( 'Search Types', 'studently' ),
		'popular_items'              => __( 'Popular Types', 'studently' ),
		'all_items'                  => __( 'All Types', 'studently' ),
		'parent_item'                => null,
		'parent_item_colon'          => null,
		'edit_item'                  => __( 'Edit Type', 'studently' ),
		'update_item'                => __( 'Update Type', 'studently' ),
		'add_new_item'               => __( 'Add New Type', 'studently' ),
		'new_item_name'              => __( 'New Type Name', 'studently' ),
		'separate_items_with_commas' => __( 'Separate Types with commas', 'studently' ),
		'add_or_remove_items'        => __( 'Add or remove Types', 'studently' ),
		'choose_from_most_used'      => __( 'Choose from the most used Types', 'studently' ),
		'not_found'                  => __( 'No Types found.', 'studently' ),
		'menu_name'                  => __( 'Types', 'studently' ),
	);

	$args = array(
		'hierarchical'          => true,
		'labels'                => $labels,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'types' ),
	);

	register_taxonomy( 'types', 'tesimonials', $args );
		
		
		
		
		
	}
endif;
add_action( 'after_setup_theme', 'studently_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function studently_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'studently_content_width', 640 );
}
add_action( 'after_setup_theme', 'studently_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function studently_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Footer 1', 'studently' ),
		'id'            => 'footer-1',
		'description'   => __( 'Add Footer 1 widgets here.', 'studently' ),
		'before_widget' => '<div class="footer-part-1">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer 2', 'studently' ),
		'id'            => 'footer-2',
		'description'   => __( 'Add Footer 2 widgets here.', 'studently' ),
		'before_widget' => '<div class="footer-part-2">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer 3', 'studently' ),
		'id'            => 'footer-3',
		'description'   => __( 'Add Footer 3 widgets here.', 'studently' ),
		'before_widget' => '<div class="footer-part-3">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer 4', 'studently' ),
		'id'            => 'footer-4',
		'description'   => __( 'Add Footer 4 widgets here.', 'studently' ),
		'before_widget' => '<div class="footer-part-4">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );

}
add_action( 'widgets_init', 'studently_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function studently_scripts() {
	
	
		
	wp_enqueue_style( 'studently-fontawesome', get_template_directory_uri() . '/css/fontawesome-all.min.css');	
	
	wp_enqueue_style( 'studently-bootstrap', get_template_directory_uri() . '/css/bootstrap.css');	
	
	wp_enqueue_style( 'studently-styles', get_template_directory_uri() . '/css/style.css');	
		
	wp_enqueue_style( 'studently-style', get_stylesheet_uri() );
	
	wp_enqueue_style( 'studently-res', get_template_directory_uri() . '/css/responsive.css');

	wp_enqueue_script( 'studently-popper', get_template_directory_uri() . '/js/popper.js', array('jquery'), '', true );
	wp_enqueue_script( 'studently-bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), '', true );
	wp_enqueue_script( 'studently-custom', get_template_directory_uri() . '/js/custom.js', array('jquery'), '', true );
	
	
	
	
	

	wp_enqueue_script( 'studently-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'studently_scripts' );

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
 * Customizer additions.
 */
require get_template_directory() . '/inc/shortcode.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * redux themeoptions.
 */
require get_template_directory() . '/lib/ReduxCore/framework.php';
require get_template_directory() . '/lib/sample/config.php';


