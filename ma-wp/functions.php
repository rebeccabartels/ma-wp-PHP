<?php
/**
 * Alliance functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Alliance
 */

if ( ! function_exists( 'alliance_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function alliance_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Alliance, use a find and replace
		 * to change 'alliance' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'alliance', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'alliance' ),
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
		add_theme_support( 'custom-background', apply_filters( 'alliance_custom_background_args', array(
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
add_action( 'after_setup_theme', 'alliance_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function alliance_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'alliance_content_width', 640 );
}
add_action( 'after_setup_theme', 'alliance_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function alliance_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'alliance' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'alliance' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'alliance_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function alliance_scripts() {
	wp_enqueue_style( 'alliance-style', get_stylesheet_uri() );

	wp_enqueue_style( 'awesome','//maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css');

	wp_enqueue_style( 'bootstrap', get_template_directory_uri() .'/css/bootstrap.css');

	wp_enqueue_style( 'owl', get_template_directory_uri() .'/css/owl.carousel.css');

	wp_enqueue_style( 'animated', get_template_directory_uri() .'/css/animated.css');

	wp_enqueue_style( 'mystyle', get_template_directory_uri() .'/css/style.css');

	wp_enqueue_script('jquery');

	wp_enqueue_script( 'alliance-bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), '', true );

	wp_enqueue_script( 'alliance-owl', get_template_directory_uri() . '/js/owl.carousel.js', array('jquery'), '', true );

	wp_enqueue_script( 'alliance-classie', get_template_directory_uri() . '/js/classie.js', array('jquery'), '', true );

	wp_enqueue_script( 'alliance-isotope', 'https://npmcdn.com/isotope-layout@3/dist/isotope.pkgd.js', array('jquery'), '', true );

	wp_enqueue_script( 'alliance-myscripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '', true );


	wp_enqueue_script( 'alliance-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'alliance-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'alliance_scripts' );

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

add_action( 'pre_get_posts', 'turn_off_sticky' );
 
function turn_off_sticky( $query ) {
	$query->set( 'ignore_sticky_posts', true );
}

add_action( 'init', 'register_post_types' );
function register_post_types(){
	register_post_type('person', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'People', // основное название для типа записи
			'singular_name'      => 'Person', // название для одной записи этого типа
			'add_new'            => 'Add New', // для добавления новой записи
			'add_new_item'       => 'Add New Person', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Edit Person', // для редактирования типа записи
			'new_item'           => 'New Person', // текст новой записи
			'view_item'          => 'View Person', // для просмотра записи этого типа.
			'search_items'       => 'Search Person', // для поиска по этим типам записи
			'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Not found in trash', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов) // название меню
		),
		'description'         => '',
		'public'              => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-businessman',		
		'hierarchical'        => false,
		'supports'            => array('title','editor', 'thumbnail','custom-fields'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array('role'),
	) );
}

// хук для регистрации
add_action( 'init', 'create_taxonomy' );
function create_taxonomy(){
	// список параметров: http://wp-kama.ru/function/get_taxonomy_labels
	register_taxonomy('role', array('person'), array(
		'label'                 => '', // определяется параметром $labels->name
		'labels'                => array(
			'name'              => 'Roles',
			'singular_name'     => 'Role',
			'search_items'      => 'Search Roles',
			'all_items'         => 'All Roles',
			'view_item '        => 'View Role',
			'parent_item'       => 'Parent Role',
			'parent_item_colon' => 'Parent Role:',
			'edit_item'         => 'Edit Role',
			'update_item'       => 'Update Role',
			'add_new_item'      => 'Add New Role',
			'new_item_name'     => 'New Role Name',
			'menu_name'         => 'Role',
		),
		'description'           => '', // описание таксономии
		'public'                => true,
		'publicly_queryable'    => null, // равен аргументу public
		'hierarchical'          => true,
		//'update_count_callback' => '_update_post_term_count',
		'rewrite'               => true,
		//'query_var'             => $taxonomy, // название параметра запроса
	) );
}

function my_relationship_result( $title, $post, $field, $post_id ) {
	
	// load a custom field from this $object and show it in the $result
	
	$image = get_the_post_thumbnail( $post, array(25, 25));
	
	// append to title
	$title = $image . ' ' . $title;
	
	
	// return
	return $title;
	
}



// filter for every field
add_filter('acf/fields/post_object/result', 'my_relationship_result', 10, 4);

// Register Custom Post Type
function event_custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Events', 'Post Type General Name', 'alliance' ),
		'singular_name'         => _x( 'Event', 'Post Type Singular Name', 'alliance' ),
		'menu_name'             => __( 'Events', 'alliance' ),
		'name_admin_bar'        => __( 'Event', 'alliance' ),
		'archives'              => __( 'Event Archives', 'alliance' ),
		'attributes'            => __( 'Event Attributes', 'alliance' ),
		'parent_item_colon'     => __( 'Parent Item:', 'alliance' ),
		'all_items'             => __( 'All Events', 'alliance' ),
		'add_new_item'          => __( 'Add New Event', 'alliance' ),
		'add_new'               => __( 'Add New Event', 'alliance' ),
		'new_item'              => __( 'New Event', 'alliance' ),
		'edit_item'             => __( 'Edit Event', 'alliance' ),
		'update_item'           => __( 'Update Event', 'alliance' ),
		'view_item'             => __( 'View Event', 'alliance' ),
		'view_items'            => __( 'View Events', 'alliance' ),
		'search_items'          => __( 'Search Event', 'alliance' ),
		'not_found'             => __( 'Not found', 'alliance' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'alliance' ),
		'featured_image'        => __( 'Featured Image', 'alliance' ),
		'set_featured_image'    => __( 'Set featured image', 'alliance' ),
		'remove_featured_image' => __( 'Remove featured image', 'alliance' ),
		'use_featured_image'    => __( 'Use as featured image', 'alliance' ),
		'insert_into_item'      => __( 'Insert into item', 'alliance' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'alliance' ),
		'items_list'            => __( 'Items list', 'alliance' ),
		'items_list_navigation' => __( 'Items list navigation', 'alliance' ),
		'filter_items_list'     => __( 'Filter items list', 'alliance' ),
	);
	$args = array(
		'label'                 => __( 'Event', 'alliance' ),
		'description'           => __( 'Post Type Description', 'alliance' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'taxonomies'            => array( 'event_category', 'event_tag_name', 'event_tag_sector' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-analytics',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
	);
	register_post_type( 'event', $args );

}
add_action( 'init', 'event_custom_post_type', 0 );


// Register Custom Taxonomy
function event_custom_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Categories', 'Taxonomy General Name', 'alliance' ),
		'singular_name'              => _x( 'Category', 'Taxonomy Singular Name', 'alliance' ),
		'menu_name'                  => __( 'Category', 'alliance' ),
		'all_items'                  => __( 'All Categories', 'alliance' ),
		'parent_item'                => __( 'Parent Category', 'alliance' ),
		'parent_item_colon'          => __( 'Parent Category:', 'alliance' ),
		'new_item_name'              => __( 'New Category Name', 'alliance' ),
		'add_new_item'               => __( 'Add New Category', 'alliance' ),
		'edit_item'                  => __( 'Edit Category', 'alliance' ),
		'update_item'                => __( 'Update Category', 'alliance' ),
		'view_item'                  => __( 'View Category', 'alliance' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'alliance' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'alliance' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'alliance' ),
		'popular_items'              => __( 'Popular Items', 'alliance' ),
		'search_items'               => __( 'Search Items', 'alliance' ),
		'not_found'                  => __( 'Not Found', 'alliance' ),
		'no_terms'                   => __( 'No items', 'alliance' ),
		'items_list'                 => __( 'Items list', 'alliance' ),
		'items_list_navigation'      => __( 'Items list navigation', 'alliance' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'show_in_rest'               => true,
	);
	register_taxonomy( 'event_category', array( 'event' ), $args );

}
add_action( 'init', 'event_custom_taxonomy', 0 );

// Register Custom Taxonomy
function second_event_custom_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Filter Names', 'Taxonomy General Name', 'alliance' ),
		'singular_name'              => _x( 'Filter Name', 'Taxonomy Singular Name', 'alliance' ),
		'menu_name'                  => __( 'Filter Name', 'alliance' ),
		'all_items'                  => __( 'All Filter Names', 'alliance' ),
		'new_item_name'              => __( 'New Filter Name', 'alliance' ),
		'add_new_item'               => __( 'Add New Filter Name', 'alliance' ),
		'edit_item'                  => __( 'Edit Filter Name', 'alliance' ),
		'update_item'                => __( 'Update Filter Name', 'alliance' ),
		'view_item'                  => __( 'View Filter Name', 'alliance' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'alliance' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'alliance' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'alliance' ),
		'popular_items'              => __( 'Popular Items', 'alliance' ),
		'search_items'               => __( 'Search Items', 'alliance' ),
		'not_found'                  => __( 'Not Found', 'alliance' ),
		'no_terms'                   => __( 'No items', 'alliance' ),
		'items_list'                 => __( 'Items list', 'alliance' ),
		'items_list_navigation'      => __( 'Items list navigation', 'alliance' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'show_in_rest'               => true,
	);
	register_taxonomy( 'event_tag_name', array( 'event' ), $args );

}
add_action( 'init', 'second_event_custom_taxonomy', 0 );


// Register Custom Taxonomy
function third_event_custom_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Filter Sectors', 'Taxonomy General Name', 'alliance' ),
		'singular_name'              => _x( 'Filter Sector', 'Taxonomy Singular Name', 'alliance' ),
		'menu_name'                  => __( 'Filter Sector', 'alliance' ),
		'all_items'                  => __( 'All Filter Sectors', 'alliance' ),
		'new_item_name'              => __( 'New Filter Sector', 'alliance' ),
		'add_new_item'               => __( 'Add New Filter Sector', 'alliance' ),
		'edit_item'                  => __( 'Edit Filter Sector', 'alliance' ),
		'update_item'                => __( 'Update Filter Sector', 'alliance' ),
		'view_item'                  => __( 'View Filter Sector', 'alliance' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'alliance' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'alliance' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'alliance' ),
		'popular_items'              => __( 'Popular Items', 'alliance' ),
		'search_items'               => __( 'Search Items', 'alliance' ),
		'not_found'                  => __( 'Not Found', 'alliance' ),
		'no_terms'                   => __( 'No items', 'alliance' ),
		'items_list'                 => __( 'Items list', 'alliance' ),
		'items_list_navigation'      => __( 'Items list navigation', 'alliance' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'show_in_rest'               => true,
	);
	register_taxonomy( 'event_tag_sector', array( 'event' ), $args );

}
add_action( 'init', 'third_event_custom_taxonomy', 0 );


// Register Custom Post Type
function articles_post_type() {

	$labels = array(
		'name'                  => _x( 'Articles', 'Post Type General Name', 'alliance' ),
		'singular_name'         => _x( 'Article', 'Post Type Singular Name', 'alliance' ),
		'menu_name'             => __( 'Digital Dairy', 'alliance' ),
		'name_admin_bar'        => __( 'Article', 'alliance' ),
		'archives'              => __( 'Item Archives', 'alliance' ),
		'attributes'            => __( 'Item Attributes', 'alliance' ),
		'parent_item_colon'     => __( 'Parent Item:', 'alliance' ),
		'all_items'             => __( 'All Items', 'alliance' ),
		'add_new_item'          => __( 'Add New Item', 'alliance' ),
		'add_new'               => __( 'Add New', 'alliance' ),
		'new_item'              => __( 'New Item', 'alliance' ),
		'edit_item'             => __( 'Edit Item', 'alliance' ),
		'update_item'           => __( 'Update Item', 'alliance' ),
		'view_item'             => __( 'View Item', 'alliance' ),
		'view_items'            => __( 'View Items', 'alliance' ),
		'search_items'          => __( 'Search Item', 'alliance' ),
		'not_found'             => __( 'Not found', 'alliance' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'alliance' ),
		'featured_image'        => __( 'Featured Image', 'alliance' ),
		'set_featured_image'    => __( 'Set featured image', 'alliance' ),
		'remove_featured_image' => __( 'Remove featured image', 'alliance' ),
		'use_featured_image'    => __( 'Use as featured image', 'alliance' ),
		'insert_into_item'      => __( 'Insert into item', 'alliance' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'alliance' ),
		'items_list'            => __( 'Items list', 'alliance' ),
		'items_list_navigation' => __( 'Items list navigation', 'alliance' ),
		'filter_items_list'     => __( 'Filter items list', 'alliance' ),
	);
	$args = array(
		'label'                 => __( 'Article', 'alliance' ),
		'description'           => __( 'Site articles.', 'alliance' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'revisions', 'custom-fields' ),
		'taxonomies'            => array( 'dairy_category', ' dairy_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-edit',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'article', $args );

}
add_action( 'init', 'articles_post_type', 0 );


// Register Custom Taxonomy
function dairy_cat_custom_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Categories', 'Taxonomy General Name', 'alliance' ),
		'singular_name'              => _x( 'Category', 'Taxonomy Singular Name', 'alliance' ),
		'menu_name'                  => __( 'Category', 'alliance' ),
		'all_items'                  => __( 'All categories', 'alliance' ),
		'parent_item'                => __( 'Parent Category', 'alliance' ),
		'parent_item_colon'          => __( 'Parent Category:', 'alliance' ),
		'new_item_name'              => __( 'New Category Name', 'alliance' ),
		'add_new_item'               => __( 'Add New Category', 'alliance' ),
		'edit_item'                  => __( 'Edit Category', 'alliance' ),
		'update_item'                => __( 'Update Category', 'alliance' ),
		'view_item'                  => __( 'View Category', 'alliance' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'alliance' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'alliance' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'alliance' ),
		'popular_items'              => __( 'Popular Items', 'alliance' ),
		'search_items'               => __( 'Search Items', 'alliance' ),
		'not_found'                  => __( 'Not Found', 'alliance' ),
		'no_terms'                   => __( 'No items', 'alliance' ),
		'items_list'                 => __( 'Items list', 'alliance' ),
		'items_list_navigation'      => __( 'Items list navigation', 'alliance' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'daily_category', array( 'article' ), $args );

}
add_action( 'init', 'dairy_cat_custom_taxonomy', 0 );


// Register Custom Taxonomy
function dairy_tag_custom_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Tags', 'Taxonomy General Name', 'alliance' ),
		'singular_name'              => _x( 'Tag', 'Taxonomy Singular Name', 'alliance' ),
		'menu_name'                  => __( 'Tag', 'alliance' ),
		'all_items'                  => __( 'All Tags', 'alliance' ),
		'parent_item'                => __( 'Parent Tag', 'alliance' ),
		'parent_item_colon'          => __( 'Parent Tag:', 'alliance' ),
		'new_item_name'              => __( 'New Tag Name', 'alliance' ),
		'add_new_item'               => __( 'Add New Tag', 'alliance' ),
		'edit_item'                  => __( 'Edit Tag', 'alliance' ),
		'update_item'                => __( 'Update Tag', 'alliance' ),
		'view_item'                  => __( 'View Tag', 'alliance' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'alliance' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'alliance' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'alliance' ),
		'popular_items'              => __( 'Popular Items', 'alliance' ),
		'search_items'               => __( 'Search Items', 'alliance' ),
		'not_found'                  => __( 'Not Found', 'alliance' ),
		'no_terms'                   => __( 'No items', 'alliance' ),
		'items_list'                 => __( 'Items list', 'alliance' ),
		'items_list_navigation'      => __( 'Items list navigation', 'alliance' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'dairy_tag', array( 'article' ), $args );

}
add_action( 'init', 'dairy_tag_custom_taxonomy', 0 );


if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'menu_title'	=> 'Digital Dairy',
		'parent_slug'   => 'edit.php?post_type=article'
	));
	
}


/*Reorder comment form fields*/
add_filter('comment_form_fields', 'kama_reorder_comment_fields' );
function kama_reorder_comment_fields( $fields ){
	// die(print_r( $fields )); // посмотрим какие поля есть

	$new_fields = array(); // сюда соберем поля в новом порядке

	$myorder = array('author','email','comment'); // нужный порядок

	foreach( $myorder as $key ){
		$new_fields[ $key ] = $fields[ $key ];
		unset( $fields[ $key ] );
	}

	// если остались еще какие-то поля добавим их в конец
	if( $fields )
		foreach( $fields as $key => $val )
			$new_fields[ $key ] = $val;

	return $new_fields;
}


// Register Custom Post Type
function speaker_custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Speakers', 'Post Type General Name', 'alliance' ),
		'singular_name'         => _x( 'Speaker', 'Post Type Singular Name', 'alliance' ),
		'menu_name'             => __( 'Speakers', 'alliance' ),
		'name_admin_bar'        => __( 'Speaker', 'alliance' ),
		'archives'              => __( 'Speaker Archives', 'alliance' ),
		'attributes'            => __( 'Speaker Attributes', 'alliance' ),
		'parent_item_colon'     => __( 'Parent Item:', 'alliance' ),
		'all_items'             => __( 'All Speakers', 'alliance' ),
		'add_new_item'          => __( 'Add New Speaker', 'alliance' ),
		'add_new'               => __( 'Add New', 'alliance' ),
		'new_item'              => __( 'New Speaker', 'alliance' ),
		'edit_item'             => __( 'Edit Speaker', 'alliance' ),
		'update_item'           => __( 'Update Speaker', 'alliance' ),
		'view_item'             => __( 'View Speaker', 'alliance' ),
		'view_items'            => __( 'View Speakers', 'alliance' ),
		'search_items'          => __( 'Search Speaker', 'alliance' ),
		'not_found'             => __( 'Not found', 'alliance' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'alliance' ),
		'featured_image'        => __( 'Featured Image', 'alliance' ),
		'set_featured_image'    => __( 'Set featured image', 'alliance' ),
		'remove_featured_image' => __( 'Remove featured image', 'alliance' ),
		'use_featured_image'    => __( 'Use as featured image', 'alliance' ),
		'insert_into_item'      => __( 'Insert into item', 'alliance' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'alliance' ),
		'items_list'            => __( 'Items list', 'alliance' ),
		'items_list_navigation' => __( 'Items list navigation', 'alliance' ),
		'filter_items_list'     => __( 'Filter items list', 'alliance' ),
	);
	$args = array(
		'label'                 => __( 'Speaker', 'alliance' ),
		'description'           => __( 'Post Type Description', 'alliance' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-universal-access',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
	);
	register_post_type( 'speaker', $args );

}
add_action( 'init', 'speaker_custom_post_type', 0 );

// Register Custom Post Type
function attendee_custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Attendees', 'Post Type General Name', 'alliance' ),
		'singular_name'         => _x( 'Attendee', 'Post Type Singular Name', 'alliance' ),
		'menu_name'             => __( 'Attendees', 'alliance' ),
		'name_admin_bar'        => __( 'Attendee', 'alliance' ),
		'archives'              => __( 'Attendee Archives', 'alliance' ),
		'attributes'            => __( 'Attendee Attributes', 'alliance' ),
		'parent_item_colon'     => __( 'Parent Item:', 'alliance' ),
		'all_items'             => __( 'All Attendees', 'alliance' ),
		'add_new_item'          => __( 'Add New Attendee', 'alliance' ),
		'add_new'               => __( 'Add New', 'alliance' ),
		'new_item'              => __( 'New Attendee', 'alliance' ),
		'edit_item'             => __( 'Edit Attendee', 'alliance' ),
		'update_item'           => __( 'Update Attendee', 'alliance' ),
		'view_item'             => __( 'View Attendee', 'alliance' ),
		'view_items'            => __( 'View Attendees', 'alliance' ),
		'search_items'          => __( 'Search Attendee', 'alliance' ),
		'not_found'             => __( 'Not found', 'alliance' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'alliance' ),
		'featured_image'        => __( 'Featured Image', 'alliance' ),
		'set_featured_image'    => __( 'Set featured image', 'alliance' ),
		'remove_featured_image' => __( 'Remove featured image', 'alliance' ),
		'use_featured_image'    => __( 'Use as featured image', 'alliance' ),
		'insert_into_item'      => __( 'Insert into item', 'alliance' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'alliance' ),
		'items_list'            => __( 'Items list', 'alliance' ),
		'items_list_navigation' => __( 'Items list navigation', 'alliance' ),
		'filter_items_list'     => __( 'Filter items list', 'alliance' ),
	);
	$args = array(
		'label'                 => __( 'Attendee', 'alliance' ),
		'description'           => __( 'Post Type Description', 'alliance' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-groups',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
	);
	register_post_type( 'attendee', $args );

}
add_action( 'init', 'attendee_custom_post_type', 0 );


// Register Custom Post Type
function session_custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Sessions', 'Post Type General Name', 'alliance' ),
		'singular_name'         => _x( 'Session', 'Post Type Singular Name', 'alliance' ),
		'menu_name'             => __( 'Sessions', 'alliance' ),
		'name_admin_bar'        => __( 'Session', 'alliance' ),
		'archives'              => __( 'Session Archives', 'alliance' ),
		'attributes'            => __( 'Session Attributes', 'alliance' ),
		'parent_item_colon'     => __( 'Parent Item:', 'alliance' ),
		'all_items'             => __( 'All Session', 'alliance' ),
		'add_new_item'          => __( 'Add New Session', 'alliance' ),
		'add_new'               => __( 'Add New', 'alliance' ),
		'new_item'              => __( 'New Session', 'alliance' ),
		'edit_item'             => __( 'Edit Session', 'alliance' ),
		'update_item'           => __( 'Update Session', 'alliance' ),
		'view_item'             => __( 'View Session', 'alliance' ),
		'view_items'            => __( 'View Sessions', 'alliance' ),
		'search_items'          => __( 'Search Session', 'alliance' ),
		'not_found'             => __( 'Not found', 'alliance' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'alliance' ),
		'featured_image'        => __( 'Featured Image', 'alliance' ),
		'set_featured_image'    => __( 'Set featured image', 'alliance' ),
		'remove_featured_image' => __( 'Remove featured image', 'alliance' ),
		'use_featured_image'    => __( 'Use as featured image', 'alliance' ),
		'insert_into_item'      => __( 'Insert into item', 'alliance' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'alliance' ),
		'items_list'            => __( 'Items list', 'alliance' ),
		'items_list_navigation' => __( 'Items list navigation', 'alliance' ),
		'filter_items_list'     => __( 'Filter items list', 'alliance' ),
	);
	$args = array(
		'label'                 => __( 'Session', 'alliance' ),
		'description'           => __( 'Post Type Description', 'alliance' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'taxonomies'            => array( 'agenda_category' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-clock',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
	);
	register_post_type( 'session', $args );

}
add_action( 'init', 'session_custom_post_type', 0 );


// Register Custom Taxonomy
function agenda_custom_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Agenda Categories', 'Taxonomy General Name', 'alliance' ),
		'singular_name'              => _x( 'Agenda Category', 'Taxonomy Singular Name', 'alliance' ),
		'menu_name'                  => __( 'Agenda Category', 'alliance' ),
		'all_items'                  => __( 'All Items', 'alliance' ),
		'parent_item'                => __( 'Parent Item', 'alliance' ),
		'parent_item_colon'          => __( 'Parent Item:', 'alliance' ),
		'new_item_name'              => __( 'New Agenda Category', 'alliance' ),
		'add_new_item'               => __( 'Add New Agenda Category', 'alliance' ),
		'edit_item'                  => __( 'Edit Agenda Category', 'alliance' ),
		'update_item'                => __( 'Update Agenda Category', 'alliance' ),
		'view_item'                  => __( 'View Agenda Category', 'alliance' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'alliance' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'alliance' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'alliance' ),
		'popular_items'              => __( 'Popular Items', 'alliance' ),
		'search_items'               => __( 'Search Items', 'alliance' ),
		'not_found'                  => __( 'Not Found', 'alliance' ),
		'no_terms'                   => __( 'No items', 'alliance' ),
		'items_list'                 => __( 'Items list', 'alliance' ),
		'items_list_navigation'      => __( 'Items list navigation', 'alliance' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'show_in_rest'               => true,
	);
	register_taxonomy( 'agenda_category', array( 'session' ), $args );

}
add_action( 'init', 'agenda_custom_taxonomy', 0 );


// Register Custom Post Type
function agenda_custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Agendas', 'Post Type General Name', 'alliance' ),
		'singular_name'         => _x( 'Agenda', 'Post Type Singular Name', 'alliance' ),
		'menu_name'             => __( 'Agendas', 'alliance' ),
		'name_admin_bar'        => __( 'Agenda', 'alliance' ),
		'archives'              => __( 'Item Agendas', 'alliance' ),
		'attributes'            => __( 'Item Attributes', 'alliance' ),
		'parent_item_colon'     => __( 'Parent Item:', 'alliance' ),
		'all_items'             => __( 'All Items', 'alliance' ),
		'add_new_item'          => __( 'Add New Item', 'alliance' ),
		'add_new'               => __( 'Add New Agenda', 'alliance' ),
		'new_item'              => __( 'New Agenda', 'alliance' ),
		'edit_item'             => __( 'Edit Agenda', 'alliance' ),
		'update_item'           => __( 'Update Agenda', 'alliance' ),
		'view_item'             => __( 'View Agenda', 'alliance' ),
		'view_items'            => __( 'View Agendas', 'alliance' ),
		'search_items'          => __( 'Search Agenda', 'alliance' ),
		'not_found'             => __( 'Not found', 'alliance' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'alliance' ),
		'featured_image'        => __( 'Featured Image', 'alliance' ),
		'set_featured_image'    => __( 'Set featured image', 'alliance' ),
		'remove_featured_image' => __( 'Remove featured image', 'alliance' ),
		'use_featured_image'    => __( 'Use as featured image', 'alliance' ),
		'insert_into_item'      => __( 'Insert into item', 'alliance' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'alliance' ),
		'items_list'            => __( 'Items list', 'alliance' ),
		'items_list_navigation' => __( 'Items list navigation', 'alliance' ),
		'filter_items_list'     => __( 'Filter items list', 'alliance' ),
	);
	$args = array(
		'label'                 => __( 'Agenda', 'alliance' ),
		'description'           => __( 'Post Type Description', 'alliance' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-media-text',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
	);
	register_post_type( 'agenda', $args );

}
add_action( 'init', 'agenda_custom_post_type', 0 );