<?php
/**
 * Rennie Craigg functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Rennie_Craigg
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
function rennie_craigg_music_teacher_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Rennie Craigg, use a find and replace
		* to change 'rennie-craigg-music-teacher' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'rennie-craigg-music-teacher', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'rennie-craigg-music-teacher' ),
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
			'rennie_craigg_music_teacher_custom_background_args',
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
add_action( 'after_setup_theme', 'rennie_craigg_music_teacher_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function rennie_craigg_music_teacher_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'rennie_craigg_music_teacher_content_width', 640 );
}
add_action( 'after_setup_theme', 'rennie_craigg_music_teacher_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function rennie_craigg_music_teacher_widgets_init() {

	register_sidebar(
		array(
			'name'          => esc_html__( 'primary', 'rennie-craigg-music-teacher' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add aside widgets here.', 'rennie-craigg-music-teacher' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)

  );



	register_sidebar(
		array(
			'name'          => esc_html__( 'footer-1', 'rennie-craigg-music-teacher' ),
			'id'            => 'footer-1',
			'description'   => esc_html__( 'Add footer widgets here.', 'rennie-craigg-music-teacher' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)

  );

    register_sidebar(
      array(
        'name'          => esc_html__( 'footer-2', 'rennie-craigg-music-teacher' ),
        'id'            => 'footer-2',
        'description'   => esc_html__( 'Add footer widgets here.', 'rennie-craigg-music-teacher' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
      )
    );


    register_sidebar(
      array(
        'name'          => esc_html__( 'footer-3', 'rennie-craigg-music-teacher' ),
        'id'            => 'footer-3',
        'description'   => esc_html__( 'Add footer widgets here.', 'rennie-craigg-music-teacher' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
      )
    );


   	
}
add_action( 'widgets_init', 'rennie_craigg_music_teacher_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function rennie_craigg_music_teacher_scripts() {
	wp_enqueue_style( 'rennie-craigg-music-teacher-style', get_stylesheet_uri(), array(), _S_VERSION );
  	wp_enqueue_script( 'rennie-craigg-music-teacher-script', get_template_directory_uri() . '/js/topnav.js', array(), '1.0.0', true );
	wp_style_add_data( 'rennie-craigg-music-teacher-style', 'rtl', 'replace' );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'rennie_craigg_music_teacher_scripts' );

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



function wpse_allowedtags()
{
  // Add custom tags to this string
  return '<figure>,<iframe>,<p>,<video>';
}

if (!function_exists('wpse_custom_wp_trim_excerpt')) :

  function wpse_custom_wp_trim_excerpt($wpse_excerpt)
  {
    $raw_excerpt = $wpse_excerpt;
    if ('' == $wpse_excerpt) {

      $wpse_excerpt = get_the_content('');
      $wpse_excerpt = apply_filters('the_content', $wpse_excerpt);
      $wpse_excerpt = strip_tags($wpse_excerpt, wpse_allowedtags()); /*If you need to allow just certain tags. Delete if all tags are allowed */

      //Set the excerpt word count and only break after sentence is complete.
      $excerpt_word_count = 25;
      $excerpt_length = apply_filters('excerpt_length', $excerpt_word_count);
      $tokens = array();
      $excerptOutput = '';
      $count = 0;

      // Divide the string into tokens; HTML tags, or words, followed by any whitespace
      preg_match_all('/(<[^>]+>|[^<>\s]+)\s*/u', $wpse_excerpt, $tokens);

      foreach ($tokens[0] as $token) {

      if ($count >= $excerpt_length && preg_match('/[\;\?\.\!]\s*$/uS', $token)) {
          // Limit reached, continue until , ; ? . or ! occur at the end
        $excerptOutput .= trim($token);
          break;
        }

        // Add words to complete sentence
         $count++;

        // Append what's left of the token
        $excerptOutput .= $token;
      }

      $wpse_excerpt = trim(force_balance_tags($excerptOutput));

     
      $excerpt_end = '...'; /*** MODIFY THIS. change the excerpt endind to something else.***/
      $excerpt_more = apply_filters('excerpt_more', ' ' . $excerpt_end);

      $pos = strrpos($wpse_excerpt, '</');
      if ($pos !== false)
      // Inside last HTML tag
      $wpse_excerpt = substr_replace($wpse_excerpt, $excerpt_end, $pos, 0); /* Add read more next to last word */
      else
      // After the content
      $wpse_excerpt .= $excerpt_more; /*Add read more in new paragraph */

      return $wpse_excerpt;

    }
    return apply_filters('wpse_custom_wp_trim_excerpt', $wpse_excerpt, $raw_excerpt);
  }

endif;

remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'wpse_custom_wp_trim_excerpt');

// Function to get archives list with limited months
function wpb_limit_archives() { 
 
  $my_archives = wp_get_archives(array(
      'type'=>'monthly', 
      'limit'=>6,
      'echo'=>0
  ));
       
  return $my_archives; 
   
  } 
   
  // Create a shortcode
  add_shortcode('wpb_custom_archives', 'wpb_limit_archives'); 
   
  // Enable shortcode execution in text widget
  add_filter('widget_text', 'do_shortcode'); 


  // Change original video size 

  function mycustom_embed_defaults($embed_size){
    $embed_size['width'] = 854;
    $embed_size['height'] = 480;
    return $embed_size;
    }
    add_filter('embed_defaults', 'mycustom_embed_defaults');
  
  //Contact Form 7 - field validation

  add_filter( 'wpcf7_validate_text', 'wpcs_custom_validation_filter', 10, 2 );
add_filter( 'wpcf7_validate_text*', 'wpcs_custom_validation_filter', 10, 2 );
 
function wpcs_custom_validation_filter( $result, $tag ) {
	$name = $tag->name;
 
	$value = isset( $_POST[$name] )
		? trim( wp_unslash( strtr( (string) $_POST[$name], "\n", " " ) ) )
		: '';
 
	if ( 'text' == $tag->basetype ) {
		if ( preg_match('/\d/', $value ) ) {
			$result->invalidate( $tag, 'Text field contains numbers. Only letters allowed.' );
    //$result->invalidate( $tag, wpcf7_get_message( 'invalid_wpcs_custom_error' ) );
		}
	}
    return $result;
}


// Exclude node modules
add_filter( 'ai1wm_exclude_themes_from_export',
function ( $exclude_filters ) {
  $exclude_filters[] = 'rennie-craigg-music-teacher/node_modules'; 
  return $exclude_filters;
} );


// Exclude SASS folders 
add_filter( 'ai1wm_exclude_themes_from_export',
function ( $exclude_filters ) {
  $exclude_filters[] = 'rennie-craigg-music-teacher/sass'; 
  return $exclude_filters;
} );