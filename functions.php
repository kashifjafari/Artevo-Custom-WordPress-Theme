<?php
/**
 * artevo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package artevo
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function artevo_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on artevo, use a find and replace
		* to change 'artevo' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'artevo', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'primary-menu' => esc_html__( 'Primary', 'ARTEVO' ),
		)
	);
	register_nav_menus(
		array(
			'language-menu' => esc_html__( 'Language', 'ARTEVO' ),
		)
	);
	register_nav_menus(
		array(
			'footer-menu' => esc_html__( 'Footer Menu-1', 'ARTEVO' ),
		)
	);
	register_nav_menus(
		array(
			'footer-menu-2' => esc_html__( 'Footer Menu-2', 'ARTEVO' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'artevo_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'artevo_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function artevo_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'artevo_content_width', 640 );
}
add_action( 'after_setup_theme', 'artevo_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
// function artevo_widgets_init() {
// 	register_sidebar(
// 		array(
// 			'name'          => esc_html__( 'Sidebar', 'artevo' ),
// 			'id'            => 'sidebar-1',
// 			'description'   => esc_html__( 'Add widgets here.', 'artevo' ),
// 			'before_widget' => '<section id="%1$s" class="widget %2$s">',
// 			'after_widget'  => '</section>',
// 			'before_title'  => '<h2 class="widget-title">',
// 			'after_title'   => '</h2>',
// 		)
// 	);
// }
// add_action( 'widgets_init', 'artevo_widgets_init' );

   
   
   function artevo_scripts() {

	   wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/style.css' );
	   wp_enqueue_style( 'header-style', get_stylesheet_directory_uri() . '/css/header.css' );
	   wp_enqueue_style( 'bootstrap-style', get_stylesheet_directory_uri() . '/css/bootstrap.css' );
	   wp_enqueue_style( 'flaticon-style', get_stylesheet_directory_uri() . '/icons/flaticon/font/flaticon.css' );
	   wp_enqueue_style( 'all-min-style', get_stylesheet_directory_uri() . '/icons/fontawesome/css/all.min.css' );
	   wp_enqueue_style( 'themify-icon-style', get_stylesheet_directory_uri() . '/icons/themify/themify-icons.css' );
	   wp_enqueue_style( 'animate-style', get_stylesheet_directory_uri() . '/vendor/animate/animate.css' );
	   wp_enqueue_style( 'bootstrap-select.min-style', get_stylesheet_directory_uri() . '/vendor/bootstrap-select/dist/css/bootstrap-select.min.css' );
	   wp_enqueue_style( 'swiper-bundle.min-style', get_stylesheet_directory_uri() . '/vendor/swiper/swiper-bundle.min.css' );
	   wp_enqueue_style( 'nouislider.min-style', get_stylesheet_directory_uri() . '/vendor/nouislider/nouislider.min.css' );
   
   }
   add_action( 'wp_enqueue_scripts', 'artevo_scripts' );
   
   function enqueue_custom_scripts() {
	   // Enqueue your JavaScript files
	   wp_enqueue_script( 'artevo-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	   wp_enqueue_script('jquery-min', get_stylesheet_directory_uri() . '/js/jquery.min.js', array('jquery'), '1.0', true);
	   wp_enqueue_script('bootstrap.bundle.min', get_stylesheet_directory_uri() . '/vendor/bootstrap/dist/js/bootstrap.bundle.min.js', array('jquery'), '1.0', true);
	   wp_enqueue_script('bootstrap-select.min', get_stylesheet_directory_uri() . '/vendor/bootstrap-select/dist/js/bootstrap-select.min.js', array('jquery'), '1.0', true);
	   wp_enqueue_script('bootstrap-touchspin', get_stylesheet_directory_uri() . '/vendor/bootstrap-touchspin/bootstrap-touchspin.js', array('jquery'), '1.0', true);
	   wp_enqueue_script('counter', get_stylesheet_directory_uri() . '/vendor/countdown/counter.js', array('jquery'), '1.0', true);
	   wp_enqueue_script('jquery.final-countdown', get_stylesheet_directory_uri() . '/vendor/countdown/jquery.final-countdown.js', array('jquery'), '1.0', true);
	   wp_enqueue_script('kinetic', get_stylesheet_directory_uri() . '/vendor/countdown/kinetic.js', array('jquery'), '1.0', true);
	   wp_enqueue_script('counterup.min', get_stylesheet_directory_uri() . '/vendor/counter/counterup.min.js', array('jquery'), '1.0', true);
	   wp_enqueue_script('waypoints-min', get_stylesheet_directory_uri() . '/vendor/counter/waypoints-min.js', array('jquery'), '1.0', true);
	   wp_enqueue_script('nouislider.min', get_stylesheet_directory_uri() . '/vendor/nouislider/nouislider.min.js', array('jquery'), '1.0', true);
	   wp_enqueue_script('owl.carousel', get_stylesheet_directory_uri() . '/vendor/owl-carousel/owl.carousel.js', array('jquery'), '1.0', true);
	   wp_enqueue_script('swiper-bundle.min', get_stylesheet_directory_uri() . '/vendor/swiper/swiper-bundle.min.js', array('jquery'), '1.0', true);
	   wp_enqueue_script('wNumb', get_stylesheet_directory_uri() . '/vendor/wnumb/wNumb.js', array('jquery'), '1.0', true);
	   wp_enqueue_script('wow.min', get_stylesheet_directory_uri() . '/vendor/wow/wow.min.js', array('jquery'), '1.0', true);
   }
   add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');




   function custom_search_form() {
    $output = '<form role="search" method="get" id="searchform" action="' . esc_url( home_url( '/' ) ) . '">';
    $output .= '<input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="Type keywords here" />';
    $output .= '<button type="submit" id="searchsubmit"><i class="flaticon-loupe"></i></button>';
    $output .= '</form>';

    return $output;
}
   function mobile_search_form() {
    $output = '<form role="search" method="get" id="searchform" action="' . esc_url( home_url( '/' ) ) . '">';
    $output .= '<input type="text" value="' . get_search_query() . '" name="s" class="form-control" id="s" placeholder="Type keywords here" />';
    $output .= '<button type="submit" id="searchsubmit"><i class="flaticon-loupe"></i></button>';
    $output .= '</form>';

    return $output;
}





   

   function theme_customize_register($wp_customize) {
    // Add a section for the footer logo and description
    $wp_customize->add_section('footer_logo_section', array(
        'title' => __('Footer Setting', 'your_theme_textdomain'),
        'priority' => 30,
    ));

    // Add a control for the footer logo
    $wp_customize->add_setting('footer_logo', array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_url_raw', // Sanitize the URL
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_logo', array(
        'label' => __('Upload Footer Logo', 'your_theme_textdomain'),
        'section' => 'footer_logo_section',
        'settings' => 'footer_logo',
    )));

    // Add a control for the description
    $wp_customize->add_setting('footer_description', array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field', // Sanitize the text
    ));

    $wp_customize->add_control('footer_description', array(
        'label' => __('Footer Description', 'your_theme_textdomain'),
        'section' => 'footer_logo_section',
        'type' => 'text',
    ));
	

	// Add a control for the MEnu Title
    $wp_customize->add_setting('footer_menu_title', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field', // Sanitize the text
    ));

	$wp_customize->add_control('footer_menu_title', array(
		'label' => __('Fotter Menu Title', 'your_theme_textdomain'),
		'section' => 'footer_logo_section',
		'type' => 'text',
	));
	
	// Add a control for the 2nd Menu heading
    $wp_customize->add_setting('footer_menu_title_2', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field', // Sanitize the text
    ));

	$wp_customize->add_control('footer_menu_title_2', array(
		'label' => __('Fotter Menu Title (2)', 'your_theme_textdomain'),
		'section' => 'footer_logo_section',
		'type' => 'text',
	));

	// Add a control for the MEnu Title
    $wp_customize->add_setting('footer_copyright', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field', // Sanitize the text
    ));

	$wp_customize->add_control('footer_copyright', array(
		'label' => __('Fotter CopyRight', 'your_theme_textdomain'),
		'section' => 'footer_logo_section',
		'type' => 'text',
	));


	// Add a control for the footer social media icons
    $wp_customize->add_setting('footer_facebook', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw', // Sanitize the URL
    ));

    $wp_customize->add_control('footer_facebook', array(
        'label' => __('Facebook Link', 'your_theme_textdomain'),
        'section' => 'footer_logo_section',
        'type' => 'url', // This is the URL input type
    ));
	// Add a control for the footer social media icons
    $wp_customize->add_setting('footer_twitter', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw', // Sanitize the URL
    ));

    $wp_customize->add_control('footer_twitter', array(
        'label' => __('twitter Link', 'your_theme_textdomain'),
        'section' => 'footer_logo_section',
        'type' => 'url', // This is the URL input type
    ));
	// Add a control for the footer social media icons
    $wp_customize->add_setting('footer_instagram', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw', // Sanitize the URL
    ));

    $wp_customize->add_control('footer_instagram', array(
        'label' => __('instagram Link', 'your_theme_textdomain'),
        'section' => 'footer_logo_section',
        'type' => 'url', // This is the URL input type
    ));
	// Add a control for the footer social media icons
    $wp_customize->add_setting('footer_youtube', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw', // Sanitize the URL
    ));

    $wp_customize->add_control('footer_youtube', array(
        'label' => __('youtube Link', 'your_theme_textdomain'),
        'section' => 'footer_logo_section',
        'type' => 'url', // This is the URL input type
    ));
	// Add a control for the footer social media icons
    $wp_customize->add_setting('footer_linkedin', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw', // Sanitize the URL
    ));

    $wp_customize->add_control('footer_linkedin', array(
        'label' => __('linkedin Link', 'your_theme_textdomain'),
        'section' => 'footer_logo_section',
        'type' => 'url', // This is the URL input type
    ));

	// Add a section for the footer contact form and descriptions
    $wp_customize->add_section('footer_contact_form_section', array(
        'title' => __('Footer Newsletter Form', 'your_theme_textdomain'),
        'priority' => 30,
    ));

    // Add a control to select the Contact Form 7 form
    $wp_customize->add_setting('footer_contact_form_id', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field', // Sanitize the text
    ));

    $wp_customize->add_control('footer_contact_form_id', array(
        'label' => __('Add Contact-Form-7 Form id only', 'your_theme_textdomain'),
        'section' => 'footer_contact_form_section',
        'type' => 'text',
    ));

    // Add a control for the first description
    $wp_customize->add_setting('contact_title', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field', // Sanitize the text
    ));

	$wp_customize->add_control('contact_title', array(
		'label' => __('section title', 'your_theme_textdomain'),
		'section' => 'footer_contact_form_section',
		'type' => 'text',
	));
    $wp_customize->add_setting('upper_description', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field', // Sanitize the text
    ));


    $wp_customize->add_control('upper_description', array(
        'label' => __('upper text', 'your_theme_textdomain'),
        'section' => 'footer_contact_form_section',
        'type' => 'text',
    ));

    // Add a control for the second description
    $wp_customize->add_setting('down_description', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field', // Sanitize the text
    ));

    $wp_customize->add_control('down_description', array(
        'label' => __('down text', 'your_theme_textdomain'),
        'section' => 'footer_contact_form_section',
        'type' => 'text',
    ));
}
add_action('customize_register', 'theme_customize_register');


// ============================================================

function theme_customizer_settings($wp_customize) {
    $wp_customize->add_section('theme_setting', array(
        'title' => __('Theme Setting'),
        'priority' => 30,
    ));
	
	// blog banner
    $wp_customize->add_setting('blog_banner', array(
		'default' => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'blog_banner', array(
		'label' => __('Media Page Banner'),
        'section' => 'theme_setting',
        'settings' => 'blog_banner',
    )));

	// project banner
    $wp_customize->add_setting('project_banner', array(
		'default' => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'project_banner', array(
		'label' => __('Project Page Banner'),
        'section' => 'theme_setting',
        'settings' => 'project_banner',
    )));
}
add_action('customize_register', 'theme_customizer_settings');

// =============================================================



function theme_register_footer_widget_area() {
    register_sidebar(array(
        'name' => __('Footer Widget Area', 'your_theme_textdomain'),
        'id' => 'footer-widget-area',
        'description' => __('Widget area for the footer.', 'your_theme_textdomain'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init', 'theme_register_footer_widget_area');


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



class Custom_Menu_Walker extends Walker_Nav_Menu {
    function start_lvl(&$output, $depth = 0, $args = null) {
        // Add your custom HTML code before the submenu class
        $output .= '<i class="fa fa-chevron-right"></i><ul class="sub-menu">';
    }
}

// ===============================

function register_custom_post_type() {
    $labels = array(
        'name' => 'Projects',
        'singular_name' => 'Project',
        'menu_name' => 'Projects',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Project',
        'edit' => 'Edit',
        'edit_item' => 'Edit Project',
        'view' => 'View',
        'view_item' => 'View Project',
        'search_items' => 'Search Projects',
        'not_found' => 'No projects found',
        'not_found_in_trash' => 'No projects found in trash',
        'parent' => 'Parent Project',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-portfolio', // Change the icon
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'excerpt'),
        'show_in_rest' => true, // Support for block editor (Gutenberg)
    );

    // Register the custom post type
    register_post_type('project', $args);
}
add_action('init', 'register_custom_post_type');