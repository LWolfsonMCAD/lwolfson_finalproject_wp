<?php
/**
 * highdramma functions and definitions
 *
 * @package highdramma
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'highdramma_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function highdramma_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on highdramma, use a find and replace
	 * to change 'highdramma' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'highdramma', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'highdramma' ),
	) );

	register_nav_menus( array(
		'social' => __( 'Social Menu', 'highdramma')
	) );

	register_nav_menus( array(
		'members' => __( 'Member Menu', 'highdramma')
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	// add_theme_support( 'custom-background', apply_filters( 'highdramma_custom_background_args', array(
	// 	'default-color' => 'ffffff',
	// 	'default-image' => '',
	// ) ) );
}
endif; // highdramma_setup
add_action( 'after_setup_theme', 'highdramma_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function highdramma_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'highdramma' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'highdramma_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function highdramma_scripts() {
	wp_enqueue_style( 'highdramma-google-fonts', 'http://fonts.googleapis.com/css?family=Reenie+Beanie:400');

	wp_enqueue_style( 'highdramma-fontawesome', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );

	wp_enqueue_style( 'highdramma-style', get_stylesheet_uri() );

	wp_enqueue_script( 'highdramma-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'highdramma-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'highdramma_scripts' );

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


//Function to set flexible headers.
$args = array(
	'flex-width'    => true,
	'width'         => 980,
	'flex-height'    => true,
	'height'        => 200,
	'default-image' => get_template_directory_uri() . '/images/hd-logo-200x208.png',
);
add_theme_support( 'custom-header', $args );

function highdramma_social_menu() {
	if ( has_nav_menu( 'social' ) ) {
		wp_nav_menu(
			array(
				'theme_location' => 'social',
				'container'		 => 'div',
				'container_id'	 => 'social-menu',
				'container_class' => 'social-menu',
				'menu-id'			=> 'social-menu-items',
				'menu_class'		=> 'menu-items',
				'depth'				=> 1,
				'link_before'		=> '<span class="screen-reader-text">',
				'link_after'		=> '</span>',
				'fallback_cb'		=> '',	
			)
		);
		}
}


//Function to create Member post types
add_action( 'init', 'create_post_types');

function create_post_types() {
 register_post_type( 'member', 
 array(
      'labels' => array(
      	'name' => __( 'Members' ),
      	'singular_name' => __( 'Member' ),
      	'add_new' => __( 'Add New' ),
      	'add_new_item' => __( 'Add New Member' ),
      	'edit' => __( 'Edit' ),
      	'edit_item' => __( 'Edit Member' ),
      	'new_item' => __( 'New Member' ),
      	'view' => __( 'View Members' ),
      	'view_item' => __( 'View Member' ),
      	'search_items' => __( 'Search Members' ),
      	'not_found' => __( 'No Members found' ),
      	'not_found_in_trash' => __( 'No Members found in Trash' ),
      	'parent' => __( 'Meet the Group' ),
      ),
 'public' => true,
      'menu_position' => 4,
      'rewrite' => array('slug' => 'member-bios'),
      'supports' => array( 'title', 'excerpt', 'thumbnail' ),
      'taxonomies' => array('category', 'post_tag'),
      'publicly_queryable' => true,
      'show_ui' => true,
      'query_var' => true,
      'capability_type' => 'post',
      'hierarchical' => false,
     )
  );
}



/**
 * Hide editor for specific page templates.
 *
 */
add_action( 'admin_init', 'hide_editor' );

function hide_editor() {
  // Get the Post ID.
  $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
  if( !isset( $post_id ) ) return;

  // Hide the editor on the page titled 'Homepage'
  $homepgname = get_the_title($post_id);
  if($homepgname == 'Homepage'){ 
    remove_post_type_support('page', 'editor');
  }
}

