<?php
/**
 * Starting Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Starting_Theme
 */

if ( ! function_exists( 'starting_theme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function starting_theme_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Starting Theme, use a find and replace
	 * to change 'starting-theme' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'starting-theme', get_template_directory() . '/languages' );

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
		'menu-1' => esc_html__( 'Primary', 'starting-theme' ),

		'footer-1' => esc_html__( 'Footer 1', 'starting-theme' ),
		'footer-2' => esc_html__( 'Footer 2', 'starting-theme' ),
		'footer-3' => esc_html__( 'Footer 3', 'starting-theme' ),
		'footer-4' => esc_html__( 'Footer 4', 'starting-theme' ),
		'footer-5' => esc_html__( 'Footer 5', 'starting-theme' ),
		'footer-6' => esc_html__( 'Footer 6', 'starting-theme' ),
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
	add_theme_support( 'custom-background', apply_filters( 'starting_theme_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'starting_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function starting_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'starting_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'starting_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function starting_theme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'starting-theme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'starting-theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'starting_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function starting_theme_scripts() {
	wp_enqueue_style( 'starting-theme-style', get_stylesheet_uri() );
	wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', array(), '1.12.4', true );
	wp_enqueue_script( 'starting-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/js/jquery.fancybox.js', array(), '2.1.7', true );
	wp_enqueue_script( 'fancybox-pack', get_template_directory_uri() . '/js/jquery.fancybox.pack.js', array(), '2.1.7', true );
	wp_enqueue_script( 'bxslider-js', get_template_directory_uri() . '/js/jquery.bxslider.min.js', array(), '4.2.12', true );
	wp_enqueue_script( 'functions-js', get_template_directory_uri() . '/js/functions.js', array(), '0.1', true );
	wp_enqueue_script( 'wow-js', get_template_directory_uri() . '/js/wow.min.js', array(), '0.1', true );
	wp_enqueue_script( 'matchHeight-js', get_template_directory_uri() . '/js/jquery.matchHeight.js', array(), '0.7.2', true );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.7', true );
	wp_enqueue_script( 'starting-theme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'starting_theme_scripts' );

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


// //add data-toggle class and dropdown-toggle to parent anchor link
// function addanchorlink_class($menu) {
//     $menu = preg_replace('/ href="#"/','/ href="#" class="dropdown-toggle" data-toggle="dropdown" /',$menu);
//     return $menu;
// }
//
// add_filter('wp_nav_menu','addanchorlink_class');
//
// //replace child ul class
// function new_submenu_class($menu) {
//     $menu = preg_replace('/ class="sub-menu"/','/ class="dropdown-menu" /',$menu);
//     return $menu;
// }

// add_filter('wp_nav_menu','new_submenu_class');

// Make the search to index custom
/**
 * Extend WordPress search to include custom fields
 * http://adambalee.com
 *
 * Join posts and postmeta tables
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_join
 */
function cf_search_join( $join ) {
    global $wpdb;
    if ( is_search() ) {
        $join .=' LEFT JOIN '.$wpdb->postmeta. ' ON '. $wpdb->posts . '.ID = ' . $wpdb->postmeta . '.post_id ';
    }
    return $join;
}
add_filter('posts_join', 'cf_search_join' );

/**
 * Modify the search query with posts_where
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_where
 */
function cf_search_where( $where ) {
    global $pagenow, $wpdb;
    if ( is_search() ) {
        $where = preg_replace(
            "/\(\s*".$wpdb->posts.".post_title\s+LIKE\s*(\'[^\']+\')\s*\)/",
            "(".$wpdb->posts.".post_title LIKE $1) OR (".$wpdb->postmeta.".meta_value LIKE $1)", $where );
    }
    return $where;
}
add_filter( 'posts_where', 'cf_search_where' );

/**
 * Prevent duplicates
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_distinct
 */
function cf_search_distinct( $where ) {
    global $wpdb;
    if ( is_search() ) {
        return "DISTINCT";
    }
    return $where;
}
add_filter( 'posts_distinct', 'cf_search_distinct' );

/**
 * Code to add the custom login css file to the theme
 * - file is "/login/custom-login-styles.css"
 */
function my_custom_login() {
echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/login/custom-login-styles.css" />';
}
add_action('login_head', 'my_custom_login');

// Register Custom Post Type
function case_studies_post_type() {

	$labels = array(
		'name'                  => _x( 'Case Studies', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Case Study', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Case Studies', 'text_domain' ),
		'name_admin_bar'        => __( 'Case Study', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Case Study', 'text_domain' ),
		'description'           => __( 'Case Study information page.', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'revisions', 'featured' ),
		// 'taxonomies'            => array( 'category' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-clipboard',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'case_studies', $args );

}
add_action( 'init', 'case_studies_post_type', 0 );

add_action( 'init', 'case_studies_taxonomies', 0 );

//create two taxonomies, genres and tags for the post type "tag"
function case_studies_taxonomies()
{
	// case studies service taxonomy
    $casestudy_product_labels = array(
        'name'          => 'Case Study Product',
        'singular_name' => 'Case Study Product',
        'menu_name'     => 'Case Study Product'
    );

    $casestudy_product_args = array(
        'labels'                     => $casestudy_product_labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'rewrite'                    => array('pages' => true)
    );
    register_taxonomy( 'case_studies_product', array( 'case_studies' ), $casestudy_product_args );

		// case studies service taxonomy
	    $casestudy_service_labels = array(
	        'name'          => 'Case Study Service',
	        'singular_name' => 'Case Study Service',
	        'menu_name'     => 'Case Study Service'
	    );

	    $casestudy_service_args = array(
	        'labels'                     => $casestudy_service_labels,
	        'hierarchical'               => true,
	        'public'                     => true,
	        'show_ui'                    => true,
	        'show_admin_column'          => true,
	        'show_in_nav_menus'          => true,
	        'show_tagcloud'              => true,
	        'rewrite'                    => array('pages' => true)
	    );
	    register_taxonomy( 'case_studies_service', array( 'case_studies' ), $casestudy_service_args );

  // Add new taxonomy, NOT hierarchical (like tags)
  $casestudy_tags_args = array(
    'name' => _x( 'Tags', 'Case Study' ),
    'singular_name' => _x( 'Tag', 'Case Studies' ),
    'search_items' =>  __( 'Search Tags' ),
    'popular_items' => __( 'Popular Tags' ),
    'all_items' => __( 'All Tags' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Tag' ),
    'update_item' => __( 'Update Tag' ),
    'add_new_item' => __( 'Add New Tag' ),
    'new_item_name' => __( 'New Tag Name' ),
    'separate_items_with_commas' => __( 'Separate tags with commas' ),
    'add_or_remove_items' => __( 'Add or remove tags' ),
    'choose_from_most_used' => __( 'Choose from the most used tags' ),
    'menu_name' => __( 'Case Study Tags' ),
  );

  register_taxonomy('tag','case_studies',array(
    'hierarchical' => false,
    'labels' => $casestudy_tags_args,
    'show_ui' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'tag' ),
  ));
}

// Register Custom Post Type
function products_post_type() {

	$labels = array(
		'name'                  => _x( 'Products', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Product', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Products', 'text_domain' ),
		'name_admin_bar'        => __( 'Product', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Product', 'text_domain' ),
		'description'           => __( 'Product information page.', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'revisions', 'featured' ),
		// 'taxonomies'            => array( 'category' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-clipboard',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'products', $args );

}
add_action( 'init', 'products_post_type', 0 );

add_action( 'init', 'products_taxonomies', 0 );

//create two taxonomies, genres and tags for the post type "tag"
function products_taxonomies()
{
	// product taxonomy
    $products_area_labels = array(
        'name'          => 'Product Area',
        'singular_name' => 'Product Area',
        'menu_name'     => 'Product Area'
    );

    $products_area_args = array(
        'labels'                     => $products_area_labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'rewrite'                    => array('pages' => true)
    );
    register_taxonomy( 'products_area', array( 'products' ), $products_area_args );



  // Add new taxonomy, NOT hierarchical (like tags)
  $products_tags_args = array(
    'name' => _x( 'Tags', 'Product' ),
    'singular_name' => _x( 'Tag', 'Products' ),
    'search_items' =>  __( 'Search Tags' ),
    'popular_items' => __( 'Popular Tags' ),
    'all_items' => __( 'All Tags' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Tag' ),
    'update_item' => __( 'Update Tag' ),
    'add_new_item' => __( 'Add New Tag' ),
    'new_item_name' => __( 'New Tag Name' ),
    'separate_items_with_commas' => __( 'Separate tags with commas' ),
    'add_or_remove_items' => __( 'Add or remove tags' ),
    'choose_from_most_used' => __( 'Choose from the most used tags' ),
    'menu_name' => __( 'Product Tags' ),
  );

  register_taxonomy('tag','products',array(
    'hierarchical' => false,
    'labels' => $products_tags_args,
    'show_ui' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'tag' ),
  ));
}

function cc_mime_types($mimes) {
 $mimes['svg'] = 'image/svg+xml';
 return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

add_action( 'wp_print_styles', 'wps_deregister_styles', 100 );
function wps_deregister_styles() {
    wp_deregister_style( 'contact-form-7' );
}

// Move Yoast to bottom
function yoasttobottom() {
	return 'low';
}
add_filter( 'wpseo_metabox_prio', 'yoasttobottom');

//* Enqueue script to activate WOW.js
add_action('wp_enqueue_scripts', 'sk_wow_init_in_footer');
function sk_wow_init_in_footer() {
	add_action( 'print_footer_scripts', 'wow_init' );
}

//* Add JavaScript before </body>
function wow_init() { ?>
	<script type="text/javascript">
		new WOW().init();
	</script>
<?php }
